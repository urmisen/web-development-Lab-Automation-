@extends('layouts.layout')
@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Lab Equipment</h2>
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
                  <th>Lab Name #</th>
                  <th>Computer Name</th>
                  <th>Product ID</th>
                  <th>Operating System</th>
                  <th>processor</th>
                  <th>Installed Memory(RAM)</th>
                  <th>System type</th>
                  <th>Protection</th>
                  <th>system problem or lackings</th>
                  <th>Actions</th>
                  <th>State</th>
                  <th>Image</th>

              </tr>
            </thead>
            <tbody>
              @foreach($all_lab_info as $v_lab):

              <tr>
                <td>
                  @if($v_lab->lab_name==1)
                  <span class="label label-success">{{'Software Lab'}}</span>
                  @elseif($v_lab->lab_name==2)
                  <span class="label label-primaary">{{'Hardware Lab'}}</span>
                  @elseif($v_lab->lab_name==3)
                  <span class="label label-warning">{{'Network Lab'}}</span>

                  @endif
                </td>
                <td>{{$v_lab->computer_name}}</td>
                <td>{{$v_lab->product_id}}</td>
                <td>{{$v_lab->operating_system}}</td>
                <td>{{$v_lab->processor}}</td>
                <td>{{$v_lab->ram}}</td>
                <td>{{$v_lab->system_type}}</td>


                <td>
                  @if($v_lab->protection==1)
                  <span class="label label-success">{{'Protected'}}</span>
                  @elseif($v_lab->protection==2)
                  <span class="label label-primaary">{{'Not Protected'}}</span>
                  @endif
                </td>
                <td>{{$v_lab->system_problem_or_lackings}}</td>


                  <td>
                    <a href="{{URL::to('/lab_view/'.$v_lab->id)}}"><button class="btn btn-outline-primary">View</button></a>
                    <a href="{{URL::to('/lab_edit/'.$v_lab->id)}}"><button class="btn btn-outline-primary">Edit</button></a>
                    <a href="{{URL::to('/lab_delete/'.$v_lab->id)}}" id="delete"><button class="btn btn-outline-primary">Delete</button></a>
                  </td>
                  <td>

                    @if($v_lab->state==1)
                    <span class="label label-success">{{'operationable'}}</span>
                    @elseif($v_lab->state==2)
                    <span class="label label-primaary">{{'not operationable'}}</span>
                    @endif
                  </td>

                  <td><img src="{{URL::to($v_lab->photo)}}" height="50" width="50" style="border-circle:50%;"> </td>

              </tr>
               @endforeach;
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
