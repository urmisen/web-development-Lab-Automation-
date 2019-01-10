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

                background-color: #545A1A;
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

             .submitted_by{
               margin:150px;
               padding: 0% 5% 0% 25%;
             }
             .dev_name{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:white;
             }
             .Roll{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
             }
             .dept{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
             }
             .sec{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
             }
             .ins{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
             }
             .facebook{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
             }
             .email{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
             }
             .con{
               font-family:"Raleway",sans-sertif;
               margin:10px;
               padding: 0% 5% 0% 10%;
               font-size:25px;
               color:yellow;
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

            <div class="col-md-5 col-xs-6">
            <img src="images/dev_photo.jpg" class="img-responsive img-circle">
            </div>

            <div class="submitted_by">
              <h1 class="dev_name"><b>Developer Name : Urmi Sen</b></h1>
              <h2 class="Roll">Roll: 1503119</h2>
              <h3 class="dept">Department: Computer Science & Engineering(CSE)</h3>
              <h4 class="sec">Section: B</h4>
              <h5 class="ins">Rajshahi University of Engineering & Technology,Bangladesh</h5>
              <h6 class="facebook">Facebook : https://web.facebook.com/urmisen1202</h5>
              <h6 class="email">Email : urmisen1202@gmail.com</h6>
              <h6 class="con">Mobile : +8801630564966</h6>

            </div>
          </div>
        </div>
      </body>
  </html>
