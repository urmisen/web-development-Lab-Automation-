<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600 rel="stylesheet" type="text/css" \>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

          </head>
        <!-- Styles -->
        <style>
            html, body {
                background-image:url(images/home.jpg);
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
             .homesub{
               font-family:"Raleway",sans-sertif;
               margin:0;
               padding: 9% 5% 0% 55%;
               font-size:18px;
               color:yellow;
             }

             .homelab{
               font-family:"Raleway",sans-sertif;
               margin:0.5% 0% 0% 55%;
               font-size:75px;
               color:orange;
               display:inline-block;
             }
             .homeauto{
               font-family:"Oswald",sans-sertif;
               margin: 0% 0% 0% 55%;
               font-size:82px;
               color:white;
               background-color:rgba(0,0,0,0.4);
               display:inline-block;
             }
             .btnin{
               background-color:white;
               margin: 0% 0% 0% 55%;
               border:none;
               font-size:12px;
               font-weight:bold;
               text-transform:uppercase;
               line-height:40px;
               width:150px;
               font-family:'Montserrat', sans-sertif;
               margin-top:25px;
               border:3px solid white;
               color:black;
             }
             .btnup{
               background-color:transparent;
               border:none;
               font-size:12px;
               font-weight:bold;
               text-transform:uppercase;
               line-height:40px;
               font-family:'Montserrat', sans-sertif;
               border:3px solid white;
               width:150px;
               color:black;
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
                padding: 0 25px;
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
              <li><a class="home_red" href="#">HOME</a></li>
              <li><a class="home_black" href="#">About</a></li>
              <li><a class="home_black" href="#">Services</a></li>
              <li><a class="home_black" href="#">Contact</a></li>
            </ul>
          </nav>
        </header>
        <div class="divider"></div>
        <div class="fwimage1">
          <h2 class="homesub">Welcome to our exclusive website</h2>
          <h1 class="homelab">LAB</h1>
          <h3 class="homeauto">AUTOMATION</h3>
          <br>
        <a href="st_login"><input type="button" id="login_btn" class="btnin" value="Sign In"/></a>
          <a href="st_register"><input type="button" id="logup_btn" class="btnup" value="Sign Up"/></a>

</div>
        </div>


    </body>
</html>
