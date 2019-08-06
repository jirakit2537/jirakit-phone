<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Klaravel\Ntrust\Traits\NtrustUserTrait;
use Nestable\NestableTrait;
use Baum\Node;
class User extends Authenticatable
{

    use Notifiable;
    use NestableTrait;
	 use NtrustUserTrait;

	 protected static $roleProfile = 'user';
       protected $parent = 'parent_id';


    protected $fillable = [
        'name','lastname', 'email', 'password', 'parent_id', 'lft', 'rgt', 'depth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function childs() {
          return $this->hasMany('App\User','parent_id','id') ;
      }

      public function profile()
      {
        return $this->hasOne('App\model\Profile');
      }

    public function notephone()
    {
        return $this->hasMany('App\Notephone');
    }

    }
