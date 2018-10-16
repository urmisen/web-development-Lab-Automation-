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

class AdminController extends Controller
{
  public function admin_login()
  {
      return view('layouts/admin_login');
  }

  function checklogin(Request $request)
       {
       $email=$request->email;
       $password=$request->password;
       $result=DB::table('admin_table')->where('email',$email)
                                       ->where('password',$password)
                                       ->first();
                                       if($result){
                                         Session::put('email',$result->email);
                                         Session::put('id',$result->id);
                                         return Redirect::to('/dashboard');
                                       }
                                       else{
                                         Session::put('exception','Email or Password Invalid');
                                         return back()->with('error', 'Wrong Login Details');
                                       }
       }

      

       function logout()
       {
        Auth::logout();
        return redirect('/');
       }

  public function dashboard()
  {
      return view('layouts/Dashboard');
  }

  public function add_admin()
  {
      return view('layouts/add_admin');
  }

  public function add_user()
  {
      return view('layouts/add_user');

  }
  public function all_user()
  {
    $all_user_info=DB::table('add_user_table')->get();
    $manage_user=view('layouts.all_user')->with('all_user_info',$all_user_info);
    return view('layouts/layout')->with('all_user',$manage_user);
      //return view('layouts/all_user');
  }
  public function cse()
  {
    $cse_user_info=DB::table('add_user_table')->where(['department'=>1])
                                              ->get();
    $manage_user=view('layouts.cse')->with('cse_user_info',$cse_user_info);
    return view('layouts/layout')->with('cse',$manage_user);
  }
  public function ece()
  {
    $ece_user_info=DB::table('add_user_table')->where(['department'=>2])
                                              ->get();
    $manage_user=view('layouts.ece')->with('ece_user_info',$ece_user_info);
    return view('layouts/layout')->with('ece',$manage_user);
  }
  public function ete()
  {
    $ete_user_info=DB::table('add_user_table')->where(['department'=>3])
                                              ->get();
    $manage_user=view('layouts.ete')->with('ete_user_info',$ete_user_info);
    return view('layouts/layout')->with('ete',$manage_user);
  }
  public function eee()
  {
    $eee_user_info=DB::table('add_user_table')->where(['department'=>4])
                                              ->get();
    $manage_user=view('layouts.eee')->with('eee_user_info',$eee_user_info);
    return view('layouts/layout')->with('eee',$manage_user);
  }

  public function view()
  {
      return view('layouts/view');
  }
  public function setting()
  {
      return view('layouts/setting');
  }

  public function user_delete($id){
   DB::table('add_user_table')->where('id',$id)
                               ->delete();
return Redirect::to('/all_user');
  }
  public function user_view($id){
    $user_desc_view=DB::table('add_user_table')->select('*')
                                                  ->where('id',$id)
                                                  ->first();
$manage_desc_user=view('layouts/user_view')->with('user_desc_view',$user_desc_view);
return view('layouts/layout')->with('user_view',$manage_desc_user);

  }

  public function user_edit($id){
 $user_desc_view=DB::table('add_user_table')->select('*')
                                                  ->where('id',$id)
                                                  ->first();
$manage_desc_user=view('layouts/user_edit')->with('user_desc_view',$user_desc_view);
return view('layouts/layout')->with('user_edit',$manage_desc_user);

  }

  public function user_edit_action(Request $request,$id){

     $data=array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['password']=$request->password;
    $data['department']=$request->department;
    $data['roll_OR_id_num']=$request->roll_OR_id_num;
    $data['phone']=$request->phone;

    DB::table('add_user_table')->select('*')
                               ->where('id',$id)
                               ->update($data);

         Session::put('exception','User update successfully');
           return Redirect::to('/all_user');
  }



  public function add_user_action(Request $request)

  {
    $data=array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['password']=$request->password;
    $data['department']=$request->department;
    $data['roll_OR_id_num']=$request->roll_OR_id_num;
    $data['phone']=$request->phone;
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
        DB::table('add_user_table')->insert($data);
        Session::put('exception','User added successfully');
        return Redirect::to('/add_user');
      }
    }
      $data['image']=$image_url;
      DB::table('add_user_table')->insert($data);
      Session::put('exception','User added successfully');
      return Redirect::to('/add_user');

      DB::table('add_user_table')->insert($data);
      Session::put('exception','User added successfully');
      return Redirect::to('/add_user');
  }

  public function add_admin_action(Request $request)

  {
    $data=array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['password']=$request->password;
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
        DB::table('admin_table')->insert($data);
        Session::put('exception','Admin added successfully');
        return Redirect::to('/add_admin');
      }
    }
      $data['image']=$image_url;
      DB::table('admin_table')->insert($data);
      Session::put('exception','Admin added successfully');
      return Redirect::to('/add_admin');

      DB::table('admin_table')->insert($data);
      Session::put('exception','Admin added successfully');
      return Redirect::to('/add_admin');
  }

  public function ad_logout()
  {
    Session::put('name',null);
    Session::put('id',null);
    //  Auth::logout();
     return Redirect::to('/');
  }

  public function all_admin()
  {
    $all_user_info=DB::table('admin_table')->get();
    $manage_user=view('layouts.all_admin')->with('all_user_info',$all_user_info);
    return view('layouts/layout')->with('all_admin',$manage_user);
  }
  public function admin_delete($id){
   DB::table('admin_table')->where('id',$id)
                               ->delete();
return Redirect::to('/all_admin');
  }



}
