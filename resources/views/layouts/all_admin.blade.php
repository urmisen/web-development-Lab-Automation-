@extends('layouts.layout')
@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Data table</h2>
      <p class="alert-success"><?php
      $exception=Session::get('exception');
      if($exception){
        echo $exception;
        Session::put('exception',null);
      }
      ?></p>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>ID #</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($all_user_info as $v_user):

              <tr>
                <td>{{$v_user->id}}</td>
                <td>{{$v_user->name}}</td>
                <td>{{$v_user->email}}</td>
                <td><img src="{{URL::to($v_user->photo)}}" height="50" width="50" style="border-circle:50%;"></td>
                  <td>
                    <a href="{{URL::to('/admin_delete/'.$v_user->id)}}" id="delete"><button class="btn btn-outline-primary">Delete</button></a>
                  </td>
              </tr>
               @endforeach;
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
