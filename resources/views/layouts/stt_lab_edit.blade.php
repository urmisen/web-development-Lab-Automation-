@extends('layouts.layout')
@section('content')

      <div class="col-12 col-lg-6 grid-margin">
          <div class="card">
              <div class="card-body">
                  <h2 class="card-title">Edit Lab Equipment</h2>

                  <p class="alert-success"><?php
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  }
                  ?></p>
                  <form class="forms-sample" method="POST" action="{{URL::to('/accept_lab_edit_action/'.$lab_desc_view->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="exampleInputPassword1">Laboratory name</label>
                    <select class="form-control p-input" name="lab_name" value="{{($lab_desc_view->lab_name)}}">
                      <option value="1">Software Lab</option>
                      <option value="2">Hardware Lab</option>
                      <option value="2">Network Lab</option>
                    </select>
                </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Computer Name</label>
                      <input type="text" class="form-control p-input" name="computer_name" aria-describedby="emailHelp" value="{{($lab_desc_view->computer_name)}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Product ID</label>
                      <input type="text" class="form-control p-input" name="product_id" value="{{($lab_desc_view->product_id)}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Operating System</label>
                      <input type="text" class="form-control p-input" name="operating_system" value="{{($lab_desc_view->operating_system)}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Processor</label>
                      <input type="text" class="form-control p-input" name="processor" value="{{($lab_desc_view->processor)}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Installed Memory(RAM)</label>
                      <input type="text" class="form-control p-input" name="ram" value="{{($lab_desc_view->ram)}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">System type</label>
                      <input type="text" class="form-control p-input" name="system_type" value="{{($lab_desc_view->system_type)}}">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">System Protection</label>
                      <select class="form-control p-input" name="protection" value="{{($lab_desc_view->protection)}}">
                        <option value="1">protected</option>
                        <option value="2">not protected</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Current State</label>
                      <select class="form-control p-input" name="state" value="{{($lab_desc_view->state)}}">
                        <option value="1">operable</option>
                        <option value="2">not operable</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">System problem or lackings</label>
                      <input type="text" class="form-control p-input" name="system_problem_or_lackings" value="{{($lab_desc_view->system_problem_or_lackings)}}">
                  </div>
                      <button type="submit" class="btn btn-success btn block">Submit</button>
                  </form>
              </div>
          </div>
      </div>
@endsection
