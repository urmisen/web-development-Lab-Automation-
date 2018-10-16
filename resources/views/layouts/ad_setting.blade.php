@extends('layouts.st_layout')
@section('content')
      <div class="col-12 col-lg-6 grid-margin">
          <div class="card">
              <div class="card-body">
                  <h2 class="card-title">Update your profile</h2>

                  <p class="alert-success"><?php
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  }
                  ?></p>
                  <form class="forms-sample" method="POST" action="{{URL::to('/ad_setting_action')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group">
                          <label for="exampleInputEmail1">User Name</label>
                          <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp"  value="{{($user_desc_view->name)}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Email</label>
                          <input type="email" class="form-control p-input" name="email" value="{{($user_desc_view->email)}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control p-input" name="password" value="{{($user_desc_view->password)}}">
                        </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Department</label>
                          <select class="form-control p-input" name="department" value="{{($user_desc_view->department)}}">
                            <option value="1">CSE</option>
                            <option value="2">ECE</option>
                            <option value="3">ETE</option>
                            <option value="4">EEE</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Roll/ID_num</label>
                          <input type="text" class="form-control p-input" name="roll_OR_id_num" value="{{($user_desc_view->roll_OR_id_num)}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control p-input" name="phone" value="{{($user_desc_view->phone)}}">
                      </div>



                      <button type="submit" class="btn btn-success btn block">Update</button>
                  </form>
              </div>
          </div>
      </div>
@endsection
