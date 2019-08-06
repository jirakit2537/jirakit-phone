<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\provinces;
use App\Model\geography;
use App\Model\amphures;
use App\Model\districts;
use App\model\Profile;
use App\model\zipcodes;
use App\User;
use App\Role;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

  public function __construct(User $users)
  {
      $this->$users = $users;


  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'จัดการข้อมูลผู้ใช้';
         $categories = User::where('parent_id', '=', 0)->orderBy('id', 'DESC')->get();
        //  $users = User::nested()->get();
//         $users = User::ulAttr(function($ul, $parent_id) {
//
//     if($parent_id == 64) {
//         $ul->ulAttr('class', 'nav-bar');
//     }
//
// })->renderAsHtml();

// dd($users);
// var_dump($users);
        $data = User::orderBy('id', 'DESC')->paginate(20);
        return view('users.index', compact('data','title','users','categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function editprofile()
    {
        $title = 'จัดการข้อมูลผู้ใช้';
        $user = User::find(Auth::user()->id);
        return view('users.profile', ["user" => $user]);

    }

    public function saveeditprofile(Request $input)
    {

        $this->validate($input, [
            'name' => 'required|max:255',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $input["name"];
        if ($input->has('password'))
            $user->password = bcrypt($input['password']);
        $user->save();
        return redirect('users/profile')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('parent_id', '>', 0)->get();

		if(Auth::user()->hasRole('Province')){
			$roles = Role::whereIn('id', [7, 8, 9])->pluck('display_name', 'id'); //เจ้าคณะจังหวัด

		}elseif(Auth::user()->hasRole('District')){
			$roles = Role::whereIn('id', [10, 11, 12])->pluck('display_name', 'id'); //เจ้าคณะอำเภอ
		}elseif(Auth::user()->hasRole('canton')){
			$roles = Role::whereIn('id', [13, 14])->pluck('display_name', 'id');   //เจ้าคณะตำบล
		}elseif(Auth::user()->hasRole('Admin')){
			 $roles = Role::pluck('display_name', 'id');
		}elseif(Auth::user()->hasRole(['tammayut', 'mahanigay'])) {
      	 $roles = Role::whereIn('id', [6])->pluck('display_name', 'id');
    }


//  $p =  provinces::pluck('PROVINCE_NAME', 'PROVINCE_ID');
  // $g =  geography::count();
        $title = 'จัดการข้อมูลผู้ใช้';
        return view('users.create', compact('roles','title','users','p'));
    }

    public function selectAjax(Request $request)
    {
      if($request->ajax()){
    		$states = DB::table('amphures')->where('PROVINCE_ID',$request->id_country)->pluck("AMPHUR_NAME","AMPHUR_ID")->all();
    		$data = view('ajax-select',compact('states'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }

    public function selectdistricts(Request $request)
    {
      if($request->ajax()){
        $states = DB::table('districts')->where('AMPHUR_ID',$request->id_state)->pluck("DISTRICT_NAME","DISTRICT_ID")->all();
        $data = view('ajax-districts',compact('states'))->render();
        return response()->json(['options'=>$data]);
      }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $user = User::create($input);
        // $user->makeChildOf(1);
        $profile = new Profile;
        $profile->user_id = $user->id;
          $profile->name = $user->name;
        $profile->provinces_id = $request->id_country;
        $profile->amphures_id = $request->id_state;
        $profile->districts_id = $request->id_districts;
        $profile->zipcode_id = $request->id_zipcode;
          $profile->telephone = $request->telephone;
        $user->profile()->save($profile);
            $user->attachRole($request->input('roles'));

        // dd($user);
        return redirect()->route('users.index')
            ->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);
        $title = $user->name;


//              $tes = DB::table('amphures')->where('AMPHUR_ID',$user->profile->amphures_id)->pluck("AMPHUR_NAME")->first();
//                    $d = DB::table('districts')->where('DISTRICT_ID',$user->profile->districts_id)->pluck("DISTRICT_NAME")->first();
//                        $t = DB::table('districts')->where('DISTRICT_ID',$user->profile->districts_id)->pluck("DISTRICT_CODE")->first();
//                        $z = DB::table('zipcodes')->where('DISTRICT_CODE',$t)->pluck("zipcode")->first();
                        // dd($tes);

        // $p = provinces::where('PROVINCE_ID', $user->profile->provinces_id);
      //  dd($z);
        return view('users.show', compact('user','title','tes','a','d','z'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $title = $user->name;
        // $roles = Role::pluck('display_name', 'id');
        $userRole = $user->roles->pluck('id', 'id')->toArray();

        if(Auth::user()->hasRole('Province')){
          $roles = Role::whereIn('id', [7, 8, 9])->pluck('display_name', 'id'); //เจ้าคณะจังหวัด

        }elseif(Auth::user()->hasRole('District')){
          $roles = Role::whereIn('id', [10, 11, 12])->pluck('display_name', 'id'); //เจ้าคณะอำเภอ
        }elseif(Auth::user()->hasRole('canton')){
          $roles = Role::whereIn('id', [13, 14])->pluck('display_name', 'id');   //เจ้าคณะตำบล
        }elseif(Auth::user()->hasRole('Admin')){
           $roles = Role::pluck('display_name', 'id');
        }
          $p =  provinces::pluck('PROVINCE_NAME', 'PROVINCE_ID');
              $a =  amphures::pluck('AMPHUR_NAME', 'AMPHUR_ID');
    $d =  districts::pluck('DISTRICT_NAME', 'DISTRICT_ID');

        return view('users.edit', compact('user', 'roles', 'userRole','title','p','a','d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }

        $user = User::find($id);
//dd($user->id);
        $profile = Profile::where('user_id', $user->id)->first();
        $profile->name = $request->input('name');
//dd($request->input('profile.provinces_id'));
          $profile->provinces_id = $request->input('profile.provinces_id');


          $profile->amphures_id = $request->input('profile.amphures_id');


          $profile->districts_id = $request->input('profile.districts_id');
        $profile->zipcode_id = $request->input('profile.zipcode_id');


          $profile->telephone = $request->input('profile.telephone');


        $profile->update();

        $user->update($input);


        DB::table('role_user')->where('user_id', $id)->delete();


            $user->attachRole($request->input('roles'));


  //  dd($request->all());
        return redirect()->route('users.index')
            ->with('success', 'อัพเดทข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $member = User::findOrFail($id);
    if($request->ajax()){
          $member->delete();
return response(['msg' => 'Member deleted',
'status' => 'Success']);
}else{
return response(['msg' => 'Failed deleting the member',
'status' => 'Failed']);
    }
}
}
