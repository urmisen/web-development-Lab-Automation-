@extends('layouts.layout')
@section('content')
      <div class="col-12 col-lg-6 grid-margin">
          <div class="card">
              <div class="card-body">
                  <h2 class="card-title">Add User</h2>

                  <p class="alert-success"><?php
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  }
                  ?></p>
                  <form class="forms-sample" method="POST" action="{{ url('/add_user_action') }}" enctype="multipart/form-data">
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
                      <div class="form-group">
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

                      <button type="submit" class="btn btn-success btn block">Submit</button>
                  </form>
              </div>
          </div>
      </div>
@endsection
