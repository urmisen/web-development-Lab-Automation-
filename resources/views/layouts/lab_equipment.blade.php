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
                          <label for="exampleInputEmail1">Computer Name</label>
                          <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" placeholder="Enter computer name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Product ID</label>
                          <input type="text" class="form-control p-input" name="phone" placeholder="Phone number">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Operating System</label>
                          <input type="email" class="form-control p-input" name="email" placeholder="Enter Operating system">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Processor</label>
                          <input type="password" class="form-control p-input" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Installed Memory(RAM)</label>
                          <input type="password" class="form-control p-input" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">System type</label>
                          <input type="text" class="form-control p-input" name="roll_OR_id_num" placeholder="Roll/ID_num">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">System problem or lackings</label>
                          <input type="text" class="form-control p-input" name="system_problem_or_lackings" placeholder="">
                      </div>

                      <button type="submit" class="btn btn-success btn block">Submit</button>
                  </form>
              </div>
          </div>
      </div>
@endsection
