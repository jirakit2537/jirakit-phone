<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        สถิติผลการสอบธรรมสนามหลวง
    </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        div.page_break + div.page_break{
            page-break-before: always;
        }
        @font-face {
            font-family: 'thsarabun';
            font-style: normal;
            font-weight: normal;
            src: url("{{ ('fonts/thsarabun.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: bold;
            src: url("{{ ('fonts/Sarabun-Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'Sarabun';
            font-style: italic;
            font-weight: normal;
            src: url("{{ ('fonts/Sarabun-RegularItalic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'Sarabun';
            font-style: italic;
            font-weight: bold;
            src: url("{{ ('fonts/Sarabun-BoldItalic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ ('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ ('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ ('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ ('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
        body {
            font-family: "THSarabunNew", Sans-Serif;
            font-size: 25px;
           
        }
        table.gridtable {
            font-family: "THSarabunNew", Sans-Serif;
            font-style: normal;
            font-weight: bold;
            font-size:18px;
            color:#333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
       width: 85%;
            margin: 0px auto;
        }
        table.gridtable th {
            border-width: 1px;
            padding: -5px 5px 2px 5px;
            border-style: solid;
            border-color: #666666;
            background-color: #dedede;
        }
        table.gridtable td {
            border-width: 1px;
            padding: -8px 5px 0px 5px;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<div >
    <div align="center" style="margin-top:50px;">

        
            <img src="{{ url('bandgongtham5.jpg') }}" width="150" />
            <h5 style="margin-top:-15"><strong>
                สถิติผลการสอบธรรมสนามหลวง</strong>
            </h5>
            <h5 style="margin-top:-20">
                    นักธรรมและธรรมศึกษาชั้นตรี-โท-เอก
                </h5>
                <h5 style="margin-top:-20">
                       ปีการศึกษา ๒๕๖๐
                    </h5>
                    <h5 style="margin-top:-20">
                            ต่างประเทศ
                         </h5>
    </div>

    <div style="margin-top:-20">
  <table class=" text-center  gridtable" style="padding-top:20px" align="center" >
        <thead >
            <tr>
                <th width="20%">นักธรรม-ธรรมศึกษา</th>
                <th>ส่งสอบ</th>
                <th>ขาดสอบ</th>
                <th>คงสอบ</th>
                <th>สอบได้</th>
                <th>สอบตก</th>
                <th>สอบได้%</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                
                    <td>ชั้นตรี</td>
                    <td>{{ Helper::thainum($ees->stit1c4 + $ees->stit1c7) }}</td>
                    <td>{{ Helper::thainum($ees->stit2c4 + $ees->stit2c7) }}</td>
                    <td>{{ Helper::thainum($ees->stit3c4 + $ees->stit3c7) }}</td>
                    <td>{{ Helper::thainum($ees->stit4c4 + $ees->stit4c7) }}</td>
                    <td>{{ Helper::thainum($ees->stit5c4 + $ees->stit5c7) }}</td>
                    <?php 
                    $total = $ees->stit3c4 + $ees->stit3c7
                    ?>

                    <td>{{ Helper::thainum(+number_format((($ees->stit4c4 + $ees->stit4c7 )*100)   / ($ees->stit3c4 + $ees->stit3c7),2))  }}%</td>
               
                </tr>
                <tr>
                    
                    <td>ชั้นโท</td>
                    <td>{{ Helper::thainum($ees->stit1c5 + $ees->stit1c8) }}</td>
                    <td>{{ Helper::thainum($ees->stit2c5 + $ees->stit2c8) }}</td>
                    <td>{{ Helper::thainum($ees->stit3c5 + $ees->stit3c8 )}}</td>
                    <td>{{ Helper::thainum($ees->stit4c5 + $ees->stit4c8) }}</td>
                    <td>{{ Helper::thainum($ees->stit5c5 + $ees->stit5c8) }}</td>
                    <?php 
                    $total = $ees->stit3c5 + $ees->stit3c8
                    ?>

                    <td>{{ Helper::thainum(+number_format((($ees->stit4c5 + $ees->stit4c8 )*100)   / ($ees->stit3c5 + $ees->stit3c8),2))  }}%</td>
               
                </tr>
                <tr>
                   
                      <td>ชั้นเอก</td>
                      <td>{{ Helper::thainum($ees->stit1c6 + $ees->stit1c9) }}</td>
                    <td>{{ Helper::thainum($ees->stit2c6 + $ees->stit2c9) }}</td>
                    <td>{{ Helper::thainum($ees->stit3c6 + $ees->stit3c9) }}</td>
                    <td>{{ Helper::thainum($ees->stit4c6 + $ees->stit4c9) }}</td>
                    <td>{{ Helper::thainum($ees->stit5c6 + $ees->stit5c9) }}</td>
                  

                    <td>{{ Helper::thainum(+number_format((($ees->stit4c6 + $ees->stit4c9 )*100)   / ($ees->stit3c6 + $ees->stit3c9),2))  }}%</td>
               
                  </tr>
                  <tr>
                       
                          <td>รวม</td>
                          <td>{{ Helper::thainum($ees->total1) }}</td>
                          <td>{{ Helper::thainum($ees->total2) }}</td>
                          <td>{{ Helper::thainum($ees->total3) }}</td>
                          <td>{{ Helper::thainum($ees->total4) }}</td>
                          <td>{{ Helper::thainum($ees->total5) }}</td>
                        
      
                          <td>{{ Helper::thainum(+number_format(($ees->total4 *100)   /  ($ees->total3),2))  }}%</td>
                     
               
                      </tr>
            </tbody>
    </table>

    <table class="text-center  gridtable"  style="margin-top:20px">
            <thead >
                <tr>
                    <th  width="20%">นักธรรม</th>
                    <th>ส่งสอบ</th>
                    <th>ขาดสอบ</th>
                    <th>คงสอบ</th>
                    <th>สอบได้</th>
                    <th>สอบตก</th>
                    <th>สอบได้%</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    
                        <td>ชั้นตรี</td>
                        <td>{{ Helper::thainum( $ees->stit1c7) }}</td>
                        <td>{{ Helper::thainum( $ees->stit2c7) }}</td>
                        <td>{{ Helper::thainum( $ees->stit3c7) }}</td>
                        <td>{{  Helper::thainum($ees->stit4c7) }}</td>
                        <td>{{Helper::thainum( $ees->stit5c7) }}</td>
                       
    
                        <td>{{ Helper::thainum(+number_format((($ees->stit4c7 )*100)   / ( $ees->stit3c7),2))  }}%</td>
                   
                    </tr>
                    <tr>
                        
                        <td>ชั้นโท</td>
                        <td>{{  Helper::thainum($ees->stit1c8 )}}</td>
                        <td>{{ Helper::thainum( $ees->stit2c8) }}</td>
                        <td>{{  Helper::thainum($ees->stit3c8) }}</td>
                        <td>{{ Helper::thainum($ees->stit4c8 )}}</td>
                        <td>{{ Helper::thainum($ees->stit5c8) }}</td>
                       
    
                        <td>{{ Helper::thainum(+number_format((( $ees->stit4c8 )*100)   / ( $ees->stit3c8),2))  }}%</td>
                   
                    </tr>
                    <tr>
                       
                          <td>ชั้นเอก</td>
                          <td>{{  Helper::thainum($ees->stit1c9) }}</td>
                        <td>{{Helper::thainum( $ees->stit2c9) }}</td>
                        <td>{{ Helper::thainum($ees->stit3c9 )}}</td>
                        <td>{{  Helper::thainum($ees->stit4c9 )}}</td>
                        <td>{{  Helper::thainum($ees->stit5c9 )}}</td>
                    
    
                        <td>{{ Helper::thainum(+number_format((($ees->stit4c9 )*100)   / ( $ees->stit3c9),2))  }}%</td>
                   
                      </tr>
                      <tr>
                           
                              <td>รวม</td>
                              <td>{{ Helper::thainum($ees->stit1c7 + $ees->stit1c8 + $ees->stit1c9) }}</td>
                        <td>{{Helper::thainum($ees->stit2c7 + $ees->stit2c8 + $ees->stit2c9) }}</td>
                        <td>{{ Helper::thainum($ees->stit3c7 + $ees->stit3c8 + $ees->stit3c9) }}</td>
                        <td>{{ Helper::thainum($ees->stit4c7 + $ees->stit4c8 + $ees->stit4c9) }}</td>
                        <td>{{ Helper::thainum($ees->stit5c7 + $ees->stit5c8 + $ees->stit5c9) }}</td>
                      
    
                        <td>{{ Helper::thainum(+number_format((($ees->stit4c7 + $ees->stit4c8 + $ees->stit4c9 )*100)   / ($ees->stit3c7 + $ees->stit3c8 + $ees->stit3c9),2))  }}%</td>
                   
                          </tr>
                </tbody>
        </table>

        <table class=" text-center  gridtable " style="margin-top:20px">
                <thead >
                    <tr>
                        <th  width="20%">ธรรมศึกษา</th>
                        <th>ส่งสอบ</th>
                        <th>ขาดสอบ</th>
                        <th>คงสอบ</th>
                        <th>สอบได้</th>
                        <th>สอบตก</th>
                        <th>สอบได้%</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                            <td>ชั้นตรี</td>
                            <td>{{ Helper::thainum($ees->stit1c4) }}</td>
                            <td>{{ Helper::thainum($ees->stit2c4)  }}</td>
                            <td>{{ Helper::thainum($ees->stit3c4) }}</td>
                            <td>{{ Helper::thainum($ees->stit4c4) }}</td>
                            <td>{{ Helper::thainum($ees->stit5c4) }}</td>
                          
        
                            <td>{{ Helper::thainum(+number_format((($ees->stit4c4  )*100)   / ($ees->stit3c4 ),2))  }}%</td>
                       
                        </tr>
                        <tr>
                            
                            <td>ชั้นโท</td>
                            <td>{{ Helper::thainum($ees->stit1c5) }}</td>
                            <td>{{ Helper::thainum($ees->stit2c5)  }}</td>
                            <td>{{ Helper::thainum($ees->stit3c5)  }}</td>
                            <td>{{ Helper::thainum($ees->stit4c5) }}</td>
                            <td>{{ Helper::thainum($ees->stit5c5)  }}</td>
                          
        
                            <td>{{ Helper::thainum(+number_format((($ees->stit4c5 )*100)   / ($ees->stit3c5 ),2))  }}%</td>
                       
                        </tr>
                        <tr>
                           
                              <td>ชั้นเอก</td>
                              <td>{{ Helper::thainum($ees->stit1c6 ) }}</td>
                            <td>{{ Helper::thainum($ees->stit2c6)  }}</td>
                            <td>{{ Helper::thainum($ees->stit3c6) }}</td>
                            <td>{{ Helper::thainum($ees->stit4c6)  }}</td>
                            <td>{{ Helper::thainum($ees->stit5c6 ) }}</td>
                           
                            <td>{{ Helper::thainum(+number_format((($ees->stit4c6 )*100)   / ($ees->stit3c6 ),2))  }}%</td>
                       
                          </tr>
                          <tr>
                               
                                  <td>รวม</td>
                                  <td>{{  Helper::thainum($ees->stit1c4 + $ees->stit1c5 + $ees->stit1c6) }}</td>
                            <td>{{  Helper::thainum($ees->stit2c4 + $ees->stit2c5 + $ees->stit2c6) }}</td>
                            <td>{{  Helper::thainum($ees->stit3c4 + $ees->stit3c5 + $ees->stit3c6) }}</td>
                            <td>{{  Helper::thainum($ees->stit4c4 + $ees->stit4c5 + $ees->stit4c6) }}</td>
                            <td>{{  Helper::thainum($ees->stit5c4 + $ees->stit5c5 + $ees->stit5c6) }}</td>
                        
                            <td>{{  Helper::thainum(+number_format((($ees->stit4c4 + $ees->stit4c5 + $ees->stit4c6  )*100)   / ($ees->stit3c4 + $ees->stit3c5 + $ees->stit3c6 ),2))  }}%</td>
                       
                              </tr>
                    </tbody>
            </table>
        </div>
    </div>

            <div class="page_break"></div>
            <div>
              
                @foreach ($ggwp as $keys => $item)
             {{$keys}}
          
                @foreach ($item  as $key => $items)
                <div>
                    {{$items->th_explace}}
                    {{$items->th_level}}
                
           
          
                </div>
          
                @endforeach
                @endforeach
              
                
            </div>
            <script type="text/php">
                {{-- if (isset($pdf)) {
                
                    $x = 520;
                    $y = 10;
                    $text = "หน้า {PAGE_NUM}";
                    $font = null;
                    $size = 14;
                    $color = array(255,0,0);
                    $word_space = 0.0;  //  default
                    $char_space = 0.0;  //  default
                    $angle = 0.0;   //  default
                    $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
                } --}}
                if ( isset($pdf) ) { 
                    $pdf->page_script('
                        if ($PAGE_COUNT > 1) {
                            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                            $size = 12;
                            $pageText = "Page " . $PAGE_NUM . " of " . $PAGE_COUNT;
                            $y = 15;
                            $x = 520;
                            $pdf->text($x, $y, $pageText, $font, $size);
                        } 
                    ');
                }
            </script> 

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>