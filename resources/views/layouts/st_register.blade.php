<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}" />
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
  <style>
  *{color: white;}
  html, body {
      background-image:url(images/home9.jpg);
      background-size: 100% 100%;
      background-repeat: no-repeat;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100%;
      margin: 0px;
      padding:0px;
      width:100%;
      height:125%;
  }



   .form-container
   {
     border: 0px solid #fff;
     margin-top: 10vh;
     padding:50px 60px;
     -webkit-box-shadow: -1px 4px 83px 23px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 83px 23px rgba(0,0,0,0.75);
box-shadow: -1px 4px 83px 23px rgba(0,0,0,0.75);
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

    .user{
      width: 200px;
      height: 150px;
      margin-top:0px;
      margin-left: 50px;
      padding-top: 0px;
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

       <form class="form-container"  method="POST" action="{{ url('/st_register_action') }}" enctype="multipart/form-data">
          <img src="images/u_reg.png" class="user" alt="">
         {{ csrf_field() }}
         <div class="form-group">
             <label for="exampleInputEmail1">User Name</label>
             <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" placeholder="Enter user name">
         </div>
         <div class="form-group">
             <label for="exampleInputPassword1">Email</label>
             <input type="email" class="form-control p-input" name="email" placeholder="Enter Email">
         </div>
         <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control p-input" name="password" placeholder="Password">
         </div>

  <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
    <label for="exampleInputPassword1">Department</label>
    <select class="form-control p-input" name="department">
      <option value="1">CSE</option>
      <option value="2">ECE</option>
      <option value="3">ETE</option>
      <option value="4">EEE</option>
    </select>
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Roll/ID_num</label>
          <input type="text" class="form-control p-input" name="roll_OR_id_num" placeholder="Roll/ID_num">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="text" class="form-control p-input" name="phone" placeholder="Phone number">
      </div>

      <div class="form-group">
          <label>Upload file</label>
          <div class="row">
            <div class="col-12">
              <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image/label>
              <input type="file" class="form-control-file" name="photo" id="exampleInputFile2" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted"></small>
            </div>
          </div>
      </div>

  <button type="submit" class="btn btn-success btn-block">Register</button>

</form>
     </div>
     <div class="col-md-4 col-sm-4 col-xs-12"></div>
     </div>
     </div>

 </body>
 </html>
