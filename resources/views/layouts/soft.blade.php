<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="{{asset('js/lightbox.js')}}"> </script>
  </head>
  <style media="screen">
    body{
      font-family:"Arial", Serif;
      background-color:#f4f4f4;
      overflow-x:hidden;
      margin: 0px;
      padding:0px
    }
    a{
      color: white;
      text-decoration: none;
    }
    .container{
       width:80%;
       margin: auto;
       overflow: auto;
    }
    header{
      background: #333;
      min-height: 55px;
      color: white;
    }
     header a{
       color: white;
     }
     .logo{
       float:left;
       width: 30%;
       margin-top: 15px;
     }
     nav{
        float:right;
        width: 70%;
     }

     nav ul{
       float:right;
     }
     nav li{
       list-style: none;
       float: left;
       padding: 0 10px;
     }
    nav a{
      color: white;
      padding-bottom: 5px;
    }
    nav a.current a.nav a:hover{
      color:orange;
    }
    section{
      padding: 20px 0;
      overflow: hidden;
    }
    .tagline{
      background:rgba(0,0,0,0.6);
      color: white;
    }
    .tagline h1{
      text-align: center;
      font-size: 35px;
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
        background: #03899c url(images/overlay.jpg) no-repeat top center;
        color: #fff;
        position: absolute;
        top: 0;
        left: 0;
        g-index:100;
        width: 100%;
        height: 100%;
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
  <script type="text/javascript">
     $(document).ready(function(){
       $('ul#galary li').on('mouseenter',function(){
         var title=$(this).children().data('title');
         var desc=$(this).children().data('desc');

         if(desc==null){
           desc='Click to Enlarge';
         }
         if(title==null){
           title='';
         }

         $(this).append('<div class="overlay"></div>');

         var overlay=$(this).children('.overlay');

         overlay.html('<h3>'+title+'</h3><p>'+desc+'</p>');
         overlay.fadeIn(800);
       });
       $('ul#galary li').on('mouseleave',function(){
         $(this).append('<div class="overlay"></div>');

         var overlay=$(this).children('.overlay');

         overlay.fadeOut(500);
       });
     });




  </script>

  <body>
    <header>
      <div class="container">


      <h1 class="logo">Lab Automation</h1>
      <nav>
        <ul>
          <li><a class="home_red" href="#">HOME</a></li>
          <li><a class="home_black" href="#">About</a></li>
          <li><a class="home_black" href="#">Services</a></li>

        </ul>
      </nav>
        </div>
    </header>
    <section class="tagline">
      <div class="container">
        <h1>Software Lab</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <h1 id="heading">All Equipments</h1>
        <ul id="galary">
          <li ><a href="{{ route('login') }}" data-Lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>
          <li><a href="#" data-lightbox="projects" data-title="hp" data-desc="operatioable "><img src="images/soft_eq.jpg"></a></li>

        </ul>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
