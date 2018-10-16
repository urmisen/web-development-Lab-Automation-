lab@extends('layouts.layout')
@section('content')
<div class="content-wrapper">
  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-6">
        <div class="card-body avatar">
          <h2 class="card-title">Info</h2>
          <h2 style="color:maroon; font-family:'Raleway', sans-serif; font-weight:bolder;">Rajshahi University of Engineering & Technology</h2>
          <a class="website" style="color:maroon; font-family:'Raleway', sans-serif; font-weight:bolder;>
            <i class="icon-globe icon"></i>
            <span>
              @if($lab_desc_view->lab_name==1)
              <span class="label label-success">{{'Software Lab'}}</span>
              @elseif($lab_desc_view->lab_name==2)
              <span class="label label-primaary">{{'Hardware Lab'}}</span>
              @elseif($lab_desc_view->lab_name==3)
              <span class="label label-primaary">{{'Network Lab'}}</span>
              @endif</span>
          </a>
          <a class="social-link" href="#">
            <i class="icon-social-linkedin icon">Computer Name :</i>
            <span>{{$lab_desc_view->computer_name}}</span>
          </a>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-body overview">
          <ul class="achivements">
          </ul>
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">Details</h2>
          </div>
          <div class="info-links" href="#">
            <a class="social-link" href="#">
              <i class="icon-social-facebook icon">Product Key :</i>
              <span>{{$lab_desc_view->product_id}}</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-linkedin icon">Oprtaing System :</i>
              <span>{{$lab_desc_view->operating_system}}</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-facebook icon">Processor :</i>
              <span>{{$lab_desc_view->processor}}</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-facebook icon">Installed Memory(RAM) :</i>
              <span>{{$lab_desc_view->ram}}</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-facebook icon">System Type :</i>
              <span>{{$lab_desc_view->system_type}}</span>
            </a>

            <a class="website" >
              <i class="icon-globe icon">Protection :</i>
              <span>
                @if($lab_desc_view->protection==1)
                <span class="label label-success">{{'Protected'}}</span>
                @elseif($lab_desc_view->protection==2)
                <span class="label label-primaary">{{'Not Protected'}}</span>
                @endif</span>
            </a>
            <a class="social-link" href="#">
              <i class="icon-social-facebook icon">System problem or lackings :</i>
              <span>{{$lab_desc_view->system_problem_or_lackings}}</span>
            </a>

          </div>
        </div>
      </div>
    </div>
</div>
  </div>

@endsection
