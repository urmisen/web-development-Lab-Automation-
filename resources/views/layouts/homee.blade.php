<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Side Menu</title>
  <link rel="stylesheet" href="style.css">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
  <style>
  body{
  font-family:"Arial", Serif;
  background-color:#f4f4f4;
  overflow-x:hidden;
  margin: 0px;
  padding:0px
}
.main{
  background-image: url(images/homepage.jpg);
  width: 100%;
  height: 400px;
  background-size: 100%;
}

.navbar{
  background-color:rgba(0,0,0,0.6);
  overflow:hidden;
  height:63px;
}

.navbar a{
  float:right;
  display:block;
  color:#f2f2f2;
  text-align:center;
  padding:14px 16px;
  text-decoration:none;
  font-size:17px;
}
.navbar h1{
  display:inline;
  font-family:'Montserrat', sans-sertif;
  font-weight:400;
  font-size:32px;
  float:left;
  margin-top:10px;
  margin-right:450px;
  margin-left: 30px;
  color: white;
}
.navbar ul{
  margin:8px 0 20px 0;
  list-style:none;
}

.navbar a:hover{
  background-color:#ddd;
  color:#000;
}


.side-nav{
  height:100%;
  width:0;
  position:fixed;
  z-index:1;
  top:0;
  right:0;
  background-color:rgba(0,0,0,0.6);;
  opacity:0.9;
  overflow-x:hidden;
  padding-top:90px;
  transition:0.5s;
}

.side-nav a{
  padding:10px 10px 10px 30px;
  text-decoration:none;
  font-size:22px;
  color:#ccc;
  display:block;
  transition:0.3s;
}

.side-nav a:hover{
  color:#fff;
}

.side-nav .btn-close{
  position:absolute;
  top:0;
  left:22px;
  font-size:36px;
  margin-right:50px;
}


.font{
  transition:margin-right 0.5s;
  padding:20px;
  overflow:hidden;
  width:100%;
}
.font h1{
  font-size:18px
}
.font h2{
  font-size:18px
}

@media(max-width:568px){
  .navbar-nav{display:none}
}

@media(min-width:568px){
  /*.open-slide{display:none}*/
}

  </style>
</head>
<body>
  <div class="main">


  <nav class="navbar">

    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="3"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="3"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="3"/>
        </svg>
      </a>
    </span>
            <h1>LAB  AUTOMATION</h1>
    <ul class="navbar-nav">
      <li><a href="{{ route('welcome') }}">Logout</a></li>

    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="#">Software Lab</a>
    <a href="#">Hardware Lab</a>
    <a href="#">Network Lab</a>
  </div>
  </div>
 <div class="font">
   <h1>Lab Automation System is developed for the purpoes of maintaining the day to day entries of students , staff details which are normally maintained manualy in a laboratory which is also time consuming precess.Through this website one can handle this things technically. .
</h1>
   <h2>It also stores the  major information of all lab equipment. It provide the facility of searching the staff and student details and one can know which lab equipment is working and which not and if it is not working than how to repair it.</h2>


   <div class="container">
   <div class="row">
     <div class="col-md-6 col-xs-6">
       <img src="images/software.jpg" class="img-responsive img-circle">
     </div>
     <div class="col-md-6 col-xs-6">
       <h1>hbhkm,nmnbju</h1>

     </div>
   </div>
 </div>
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginRight = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginRight = '0';
    }
  </script>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
