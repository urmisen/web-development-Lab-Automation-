<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css')}}"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
          <link href="{{asset('http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic')}}" rel='stylesheet'>

          <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Raleway:100,600')}}" rel="stylesheet" type="text/css" \>
        <link href="{{asset('http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic')}}" rel='stylesheet'>

        <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans')}}" rel="stylesheet">

          </head>
        <!-- Styles -->
        <style>
            html, body {
                /* background-image:url(images/services_back.jpg); */
                background-color: #383B08;
                background-size: 100% 100%;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0px;
                padding:0px
                width:100%;
                height:100%;
            }

            header{
              background-color:rgba(0,0,0,0.6);
              color:white;
              height:50px;
              padding:8px 0px 6px 40px ;
            }
             header h1{
               display:inline;
               font-family:'Montserrat', sans-sertif;
               font-weight:400;
               font-size:32px;
               float:left;
               margin-top:0px;
               margin-right:450px;
             }
             nav ul{
               dixplay:inline;
               color:orange;
               padding:0px;
               float:left;
             }
             nav ul li{
               display:inline;
               list-style-type:none;
               color:white;
               float:left;
               text-transform:uppercase;
               margin-left:40px
             }
             nav ul li a{
               color:white;
               text-decoration:none;
             }
             #nav{
               font-family:'Montserrat', sans-sertif;

             }
             .home_red{
               color:orange;
             }
             .divider{
               background-color:orange;
               height:5px;
             }
             .home_black:hover{
               color:orange;
             }



             .data{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:white;
             }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 30px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <body>
        <header>
          <nav>
            <h1>LAB  AUTOMATION</h1>
            <ul id="nav">
              <li><a class="home_red" href="{{URL::to('/')}}">HOME</a></li>
              <li><a class="home_black" href="{{URL::to('/services')}}">Services</a></li>
              <li><a class="home_black" href="{{URL::to('/about')}}">About</a></li>
              <li><a class="home_black" href="{{URL::to('/contact')}}">Contact</a></li>

            </ul>
          </nav>
        </header>
        <div class="divider"></div>
        <div class="container">
          <div class="row">
            <div class="submitted_by">
              <h1 class="data"><b>Brief Description : </b></h1>
              <h2 class="data">Lab Automation System is a website based application developed using PHP server-scripting language and MySql database. This application is for everyday use for student and teachers. This application has a great scope because of the advancement in the technology. It maintains major information  of lab equipment. It also provide the facility of searching the student  details, lab equipment and all the entries of lab.
This app serves the users based on their role. There are mainly 2 different roles categorized as user and  admin.
</h2>
              <h3 class="data">Modules: There are mainly two modules in this application.</h3>
              <h4 class="data">1. Admin</h4>
              <h5 class="data">2. User</h5>
              <h6 class="data"><b>Admin Module: </b></h5>
              <h6 class="data"><b> •	</b>In this Lab Automation application admin can register all the users.</h6>
              <h6 class="data"><b> •	</b>Admin is responsible to maintain the database in which user and all the lab equipment information is present. </h6>
              <h6 class="data"><b> •	</b>	The admin can update, view  and delete any of lab equipment, user detail.</h6>
              <h6 class="data"><b> •	</b>	Admin can add more user and lab equipment  into the corresponding database.</h6>
              <h6 class="data"><b>User  Module:</b></h6>
              <h6 class="data"><b> •	</b>	User need to get login into their profile and they can maintain their profile.</h6>
              <h6 class="data"><b> •	</b>	User can have information about lab equipment which is operable or not operable. And if any PC have any operational problem, user can know about it.</h6>
              <h6 class="data"><b> •	</b>	User can edit the information of any lab equipment but it can not edit directly. user will send a update request to the admin and then admin can accept or reject it.</h6>


            </div>
          </div>
        </div>
      </body>
  </html>
