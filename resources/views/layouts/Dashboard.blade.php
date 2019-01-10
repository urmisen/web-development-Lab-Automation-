@extends('layouts.layout')
@section('content')

            <div class="col-sm-6 col-md-3 grid-margin">

              <div class="card">
                <div class="card-body">

                  <h2 class="card-title">All Users</h2>
                  @php
                  $user=DB::table('add_user_table')->count('id');
                  @endphp
                  <p style="font-family: 'Raleway', sans-serif; font-size:20px;font-weight:bold;text-align:center;">{{$user}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Software Lab</h2>
                    @php
                  $soft_lab_info=DB::table('lab_equipment')->where(['lab_name'=>1])
                                                            ->count('id');;
                     @endphp
                  <p style="font-family: 'Raleway', sans-serif; font-size:20px;font-weight:bold;text-align:center;">{{$soft_lab_info}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Hardware Lab</h2>
                  @php
                $hard_lab_info=DB::table('lab_equipment')->where(['lab_name'=>2])
                                                          ->count('id');;
                   @endphp
                  <p style="font-family: 'Raleway', sans-serif; font-size:20px;font-weight:bold;text-align:center;">{{$hard_lab_info}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Network Lab</h2>
                  @php
                $net_lab_info=DB::table('lab_equipment')->where(['lab_name'=>3])
                                                          ->count('id');
                   @endphp
                  <p style="font-family: 'Raleway', sans-serif; font-size:20px;font-weight:bold;text-align:center;">{{$net_lab_info}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                        @php
                      $cse_user_info=DB::table('add_user_table')->where(['department'=>1])
                                                                ->count('id');
                                                                @endphp
                      <div class="social-panel bg" style="background-color:#000066; color:white;"><i>CSE</i><p  class="mb-0">{{$cse_user_info}}</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      @php
                    $ece_user_info=DB::table('add_user_table')->where(['department'=>2])
                                                              ->count('id');
                                                              @endphp
                      <div class="social-panel bg" style="background-color:#0099cc; color:white;"><i>ECE</i><p class="mb-0">{{$ece_user_info}}</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      @php
                    $ete_user_info=DB::table('add_user_table')->where(['department'=>3])
                                                              ->count('id');
                                                              @endphp
                      <div class="social-panel bg" style="background-color:#FF0033; color:white;"><i>ETE</i><p class="mb-0">{{$ete_user_info}}</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      @php
                    $eee_user_info=DB::table('add_user_table')->where(['department'=>4])
                                                              ->count('id');
                                                              @endphp
                      <div class="social-panel bg" style="background-color:#336666; color:white;"><i>EEE</i><p class="mb-0">{{$eee_user_info}}</p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection
