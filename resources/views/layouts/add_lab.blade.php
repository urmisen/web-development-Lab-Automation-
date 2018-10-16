@extends('layouts.layout')
@section('content')
      <div class="col-12 col-lg-6 grid-margin">
          <div class="card">
              <div class="card-body">
                  <h2 class="card-title">Add Lab Equipment</h2>

                  <p class="alert-success"><?php
                  $exception=Session::get('exception');
                  if($exception){
                    echo $exception;
                    Session::put('exception',null);
                  }
                  ?></p>
                  <form class="forms-sample" method="POST" action="{{ url('/add_lab_action') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Laboratory name</label>
                        <select class="form-control p-input" name="lab_name">
                          <option value="1">Software Lab</option>
                          <option value="2">Hardware Lab</option>
                          <option value="3">Network Lab</option>
                        </select>
                    </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Computer Name</label>
                          <input type="text" class="form-control p-input" name="computer_name" aria-describedby="emailHelp" placeholder="Enter computer name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Product ID</label>
                          <input type="text" class="form-control p-input" name="product_id" placeholder="Product Id">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Operating System</label>
                          <input type="text" class="form-control p-input" name="operating_system" placeholder="Enter Operating system with edition">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Processor</label>
                          <input type="text" class="form-control p-input" name="processor" placeholder="Processor">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Installed Memory(RAM)</label>
                          <input type="text" class="form-control p-input" name="ram" placeholder="Enter Installed Memory(RAM)">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">System type</label>
                          <input type="text" class="form-control p-input" name="system_type" placeholder="Enter System type">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">System problem or lackings</label>
                          <input type="text" class="form-control p-input" name="system_problem_or_lackings" placeholder="Enter Problems or lackings">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">System Protection</label>
                          <select class="form-control p-input" name="protection">
                            <option value="1">protected</option>
                            <option value="2">not protected</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">Current State</label>
                          <select class="form-control p-input" name="state">
                            <option value="1">operationable</option>
                            <option value="2">not operationable</option>
                          </select>
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
