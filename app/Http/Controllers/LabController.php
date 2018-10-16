<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Input;
use Validator;
use Redirect;
use Auth;
use Session;

class LabController extends Controller
{
  public function add_lab()
  {
      return view('layouts/add_lab');

  }

  public function new()
  {
      return view('layouts/lgin');

  }
  public function all_lab()
  {
    $all_lab_info=DB::table('lab_equipment')->get();
    $manage_lab=view('layouts.all_lab')->with('all_lab_info',$all_lab_info);
    return view('layouts/layout')->with('all_lab',$manage_lab);
      //return view('layouts/all_user');
  }
  public function software()
  {
    $soft_lab_info=DB::table('lab_equipment')->where(['lab_name'=>1])
                                              ->get();
    $manage_lab=view('layouts.software')->with('soft_lab_info',$soft_lab_info);
    return view('layouts/layout')->with('software',$manage_lab);
  }
  public function hardware()
  {
    $hard_lab_info=DB::table('lab_equipment')->where(['lab_name'=>2])
                                              ->get();
    $manage_lab=view('layouts.hardware')->with('hard_lab_info',$hard_lab_info);
    return view('layouts/layout')->with('hardware',$manage_lab);
  }
  public function network()
  {
    $net_lab_info=DB::table('lab_equipment')->where(['lab_name'=>3])
                                              ->get();
    $manage_lab=view('layouts.network')->with('net_lab_info',$net_lab_info);
    return view('layouts/layout')->with('network',$manage_lab);
  }

  public function lab_delete($id){
   DB::table('lab_equipment')->where('id',$id)
                               ->delete();
return Redirect::to('/all_lab');
  }
  public function lab_view($id){
    $lab_desc_view=DB::table('lab_equipment')->select('*')
                                                  ->where('id',$id)
                                                  ->first();
$manage_desc_lab=view('layouts/lab_view')->with('lab_desc_view',$lab_desc_view);
return view('layouts/layout')->with('lab_view',$manage_desc_lab);

  }

  public function lab_edit($id){
 $lab_desc_view=DB::table('lab_equipment')->select('*')
                                                  ->where('id',$id)
                                                  ->first();
$manage_desc_lab=view('layouts/lab_edit')->with('lab_desc_view',$lab_desc_view);
return view('layouts/layout')->with('lab_edit',$manage_desc_lab);

  }
  public function lab_edit_action(Request $request,$id){

     $data=array();
    $data['lab_name']=$request->lab_name;
    $data['computer_name']=$request->computer_name;
    $data['product_id']=$request->product_id;
    $data['operating_system']=$request->operating_system;
    $data['processor']=$request->processor;
    $data['ram']=$request->ram;
    $data['system_type']=$request->system_type;
    $data['system_problem_or_lackings']=$request->system_problem_or_lackings;
    $data['protection']=$request->protection;
    $data['state']=$request->state;

    DB::table('lab_equipment')->select('*')
                               ->where('id',$id)
                               ->update($data);

         Session::put('exception','Data update successfully');
           return Redirect::to('/all_lab');
  }



  public function add_lab_action(Request $request)

  {
    $data=array();
    $data['lab_name']=$request->lab_name;
    $data['computer_name']=$request->computer_name;
    $data['product_id']=$request->product_id;
    $data['operating_system']=$request->operating_system;
    $data['processor']=$request->processor;
    $data['ram']=$request->ram;
    $data['system_type']=$request->system_type;
    $data['system_problem_or_lackings']=$request->system_problem_or_lackings;
    $data['protection']=$request->protection;
    $data['state']=$request->state;
    $image=$request->file('photo');


    if($image){
      $image_name=str_random(20);
      $ext=strtolower($image->getClientOriginalExtension());
      $image_full_name=$image_name.'.'.$ext;
      $upload_path='images/';
      $image_url=$upload_path.$image_full_name;
      $success=$image->move($upload_path,$image_full_name);

      if($success){
        $data['photo']=$image_url;
        DB::table('lab_equipment')->insert($data);
        Session::put('exception','Data added successfully');
        return Redirect::to('/add_lab');
      }
    }
      $data['image']=$image_url;
      DB::table('lab_equipment')->insert($data);
      Session::put('exception','Data added successfully');
      return Redirect::to('/add_lab');

      DB::table('lab_equipment')->insert($data);
      Session::put('exception','Data added successfully');
      return Redirect::to('/add_lab');
  }

  public function st_lab_view($id){
    $lab_desc_view=DB::table('lab_equipment')->select('*')
                                                  ->where('id',$id)
                                                  ->first();
                                                  if($lab_desc_view->state==1){
                                                  Session::put('exception','The following PC is operable');
                                                }
                                                  elseif($lab_desc_view->state==2){
                                                    Session::put('exceptionn','The following PC is not operable');
                                                  }

$manage_desc_lab=view('layouts/st_lab_view')->with('lab_desc_view',$lab_desc_view);
return view('layouts/st_layout')->with('st_lab_view',$manage_desc_lab);

  }

  public function st_software()
  {
    $soft_lab_info=DB::table('lab_equipment')->where(['lab_name'=>1])
                                              ->get();
    $manage_lab=view('layouts.st_software')->with('soft_lab_info',$soft_lab_info);
    return view('layouts/st_layout')->with('st_software',$manage_lab);
  }
  public function st_hardware()
  {
    $hard_lab_info=DB::table('lab_equipment')->where(['lab_name'=>2])
                                              ->get();
    $manage_lab=view('layouts.st_hardware')->with('hard_lab_info',$hard_lab_info);
    return view('layouts/st_layout')->with('st_hardware',$manage_lab);
  }
  public function st_network()
  {
    $net_lab_info=DB::table('lab_equipment')->where(['lab_name'=>3])
                                              ->get();
    $manage_lab=view('layouts.st_network')->with('net_lab_info',$net_lab_info);
    return view('layouts/st_layout')->with('st_network',$manage_lab);
  }

  public function st_lab_delete($id){
   DB::table('lab_equipment')->where('id',$id)
                               ->delete();
return Redirect::to('/st_all_lab');
  }
}
