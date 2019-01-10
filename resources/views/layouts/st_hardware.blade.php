@extends('layouts.st_layout')
@php
    function convert_state($value){
      $values=[
      1=>'operationable',
      2=>'not operationable',
      ];
      return $values[$value];
    }
@endphp
@section('content')


      <p class="alert-success"><?php
      $exception=Session::get('exception');
      if($exception){
        echo $exception;
        Session::put('exception',null);
      }
      ?></p>


      <style media="screen">
        body{
          font-family:"Arial", Serif;
          background-color:#f4f4f4;
          overflow-x:hidden;
          margin: 0px;
          padding:0px
        }

        #galary{
          list-style: none;
          margin: 0px;
          padding: 0px;
          width: 100%;
        }
        #galary li{
          display: block;
          float: left;;
          width: 23%;
            cursor: pointer;
          border-radius: 5px;
          box-sizing: border-box;
          margin: 0 12px 7px 0;
          position: relative;
          }
          #galary img{
            width: 100%;
            border-radius: 5px;
          }
          .overlay{
            display: none;
            /* background: #03899c url(images/overlay.jpg) no-repeat top center; */
            background-color:rgba(0,0,0,0.5);
            color: #fff;
            position: absolute;
            top: 0;
            left: 0;
            g-index:100;
            width: 100%;
            height: 80%;
            border-radius: 5px;
            box-sizing: border-box;
            padding: 20px;
            pointer-events: none;
          }
          .overlay h3{
            text-align: center;
          }
          @media (max-width 760px) {
            .logo,nav{
              float: none;
              width: 100%;
              text-align: center;
            }

            nav ul, nav li{
              float: none;
              padding: 0;
            }
            nav li{
              margin-bottom: 15px;
            }
            #galary li{
              width: 48%;
              margin-right: 8px;
            }
          }

          @media (max-width:568px) {
            #galary li{
              width: 100%;
              margin-right: 0;
            }

          }
      </style>


            <body>

              <section>
                <div class="container">
                  <h1 id="heading">Hardware Lab Equipments</h1>
                  <ul id="galary">
              @foreach($hard_lab_info as $v_lab):
                   <li><a href="#" data-lightbox="projects" data-title="{{$v_lab->id}}" data-desc="{{convert_state($v_lab->state)}}"><img src="{{URL::to($v_lab->photo)}}" height="150" width="100"></a>
                 <a href="{{URL::to('/st_lab_view/'.$v_lab->id)}}"><button class="btn btn-outline-primary">Learn more</button></a></li>

               @endforeach;

             </ul>
           </div>
         </section>
            </body>





@endsection
