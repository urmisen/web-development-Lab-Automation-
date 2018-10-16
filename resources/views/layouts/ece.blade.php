@extends('layouts.layout')
@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Data table</h2>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>Roll/ID_num #</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($ece_user_info as $v_user):

              <tr>
                <td>{{$v_user->roll_OR_id_num}}</td>
                <td>{{$v_user->name}}</td>
                <td>
                  @if($v_user->department==1)
                  <span class="label label-success">{{'CSE'}}</span>
                  @elseif($v_user->department==2)
                  <span class="label label-primaary">{{'ECE'}}</span>
                  @elseif($v_user->department==3)
                  <span class="label label-warning">{{'ETE'}}</span>
                  @elseif($v_user->department==4)
                  <span class="label label-info">{{'EEE'}}</span>
                  @endif
                </td>
                <td>{{$v_user->email}}</td>
                <td>{{$v_user->phone}}</td>
                <td><img src="{{URL::to($v_user->photo)}}" height="50" width="50" style="border-radius:50%;"</td>
                  <td>
                    <button class="btn btn-outline-primary">View</button>
                    <button class="btn btn-outline-primary">Edit</button>
                    <button class="btn btn-outline-primary">Delete</button>
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
