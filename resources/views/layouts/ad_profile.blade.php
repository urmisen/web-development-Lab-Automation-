@extends('layouts.layout')
@section('content')
<div class="content-wrapper">
  <div class="row user-profile">
    <div class="col-md-12 side-left">
      <div class="card mb-6">
        <div class="card-body avatar">
          <h2 class="card-title">Info</h2>
          <p class="alert-success"><?php
          $exception=Session::get('exception');
          if($exception){
            echo $exception;
            Session::put('exception',null);
          }
          ?></p>
          <img src="{{URL::to($user_desc_view->photo)}}" alt="">
          <p class="name">{{$user_desc_view->name}}</p>
          <a class="email" href="#">{{$user_desc_view->email}}</a>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-body overview">
          <ul class="achivements">
            <h2 style="color:maroon; font-family:'Raleway', sans-serif; font-weight:bolder;">Rajshahi University of Engineering & Technology</h2>


          </ul>
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The total information about  this user are given below ====>>></p>
          </div>
          <div class="info-links" href="#">
            <a class="website" >
              <i class="icon-globe icon">Department :</i>
              <span>
                @if($user_desc_view->department==1)
                <span class="label label-success">{{'CSE'}}</span>
                @elseif($user_desc_view->department==2)
                <span class="label label-primaary">{{'ECE'}}</span>
                @elseif($user_desc_view->department==3)
                <span class="label label-warning">{{'ETE'}}</span>
                @elseif($user_desc_view->department==4)
                <span class="label label-info">{{'EEE'}}</span>
                @endif</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-facebook icon">Roll/ID_num :</i>
              <span>{{$user_desc_view->roll_OR_id_num}}</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-linkedin icon">Mobile :</i>
              <span>{{$user_desc_view->phone}}</span>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>

@endsection
