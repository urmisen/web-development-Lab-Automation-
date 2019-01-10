<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}" />
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
  <style>
  *{color: white;}
  html, body {
      background-image:url(images/home9.jpg);
      background-size: 100% 100%;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0px;
      padding:0px
      width:100%;
      height:100%;
  }



   .form-container
   {
     border: 0px solid #fff;
     margin-top: 10vh;
     padding:50px 60px;
     -webkit-box-shadow: 0px 0px 27px 9px rgba(0,0,0,0.75);
     -moz-box-shadow: 0px 0px 27px 9px rgba(0,0,0,0.75);
     box-shadow: 0px 0px 27px 9px rgba(0,0,0,0.75);
   }
   .user{
     width: 120px;
     height: 120px;
     margin-top:0px;
     margin-left: 85px;
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

  </style>
 </head>
 <body>
   <header>
     <nav>
       <h1>LAB  AUTOMATION</h1>
       <ul id="nav">
         <li><a class="home_red" href="/">HOME</a></li>
         <li><a class="home_black" href="#">About</a></li>
         <li><a class="home_black" href="#">Services</a></li>
         <li><a class="home_black" href="#">Contact</a></li>
       </ul>
     </nav>
   </header>
   <div class="divider"></div>
   <div class="container-fluid bg">
     <div class="row">

       <div class="col-md-4 col-sm-4 col-xs-8"></div>
       <div class="col-md-4 col-sm-4 col-xs-8">

       <form class="form-container"  method="POST" action="{{ url('/st_login/checklogin') }}">
         <p class="alert-danger"><?php
         $exception=Session::get('exception');
         if($exception){
           echo $exception;
           Session::put('exception',null);
         }
         ?></p>
         <img src="images/u_login.png" class="user" alt="">

         {{ csrf_field() }}
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="exampleInputEmail1">Email</label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="exampleInputPassword1">Password</label>
    <input id="password" type="password" class="form-control" name="password" required>

    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-success btn-block">Login</button>
</form>
     </div>
     <div class="col-md-4 col-sm-4 col-xs-12"></div>
     </div>
     </div>

 </body>
 </html>
