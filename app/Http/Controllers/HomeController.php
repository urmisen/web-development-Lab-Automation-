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
use App\Member;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



    public function main()
    {
        return view('layouts/main');
    }

    public function soft()
    {
        return view('layouts/soft');
    }

    public function st_login()
    {
        return view('layouts/st_login');
    }
   function checklogin(Request $request)
        {

        $email=$request->email;
        $password=$request->password;
        $result=DB::table('add_user_table')->where('email',$email)
                                        ->where('password',$password)
                                        ->first();


                                        if($result){
                                          Session::put('email',$result->email);
                                          Session::put('id',$result->id);
                                          return Redirect::to('/st_login/successlogin');
                                        }
                                        else{
                                          Session::put('exception','Email or Password Invalid');
                                          return Redirect::to('/st_login');
                                        }

        }

        function successlogin()
        {
         return view('layouts/successlogin');
        }

        function logout()
        {
         Auth::logout();
         return redirect('/');
        }
        public function st_register()
        {
            return view('layouts/st_register');
        }
        function st_dashboard()
        {
         return view('layouts/st_dashboard');
        }


      /*  public function register(){

          $data=Input::except(array('_token'));
          //var_dump($data);
          $rule=array(
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password',
            'department'=>'required',
            'roll_OR_id_num'=>'required',
            'phone'=>'required',
           );

          $message=array(
            'password_confirmation.required'=>'the confirm password is required',
            'password_confirmation.min'=>'the confirm password must be at least 6 characters',
            'password_confirmation.same'=>'the confirm password and password must be same'
          );
          $validator=Validator::make($data,$rule,$message);

          if($validator->fails()){
            return Redirect::to('st_register')->withErrors($validator);
          }
          else {
            Member::formstore((Input::except(array('_token','password_confirmation'))));
           return Redirect::to('/st_login/successlogin');
          }
        }*/
        public function register(Request $request)

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
            Session::put('exception','User Registered successfully');
            return Redirect::to('/st_login');
          }
        }

            $data['image']=$image_url;
            DB::table('add_user_table')->insert($data);
            Session::put('exception','User Registered successfully');
            return Redirect::to('/st_login');

            DB::table('add_user_table')->insert($data);
            Session::put('exception','User Registered successfully');
            return Redirect::to('/st_login');

        }


        public function st_profile()
        {
          $id=Session::get('id');
          $user_desc_view=DB::table('add_user_table')->select('*')
                                                        ->where('id',$id)
                                                        ->first();

      $manage_desc_user=view('layouts/st_view')->with('user_desc_view',$user_desc_view);
      return view('layouts/st_layout')->with('st_view',$manage_desc_user);
        }

        public function st_logout()
        {
          Session::put('name',null);
          Session::put('id',null);
          //  Auth::logout();
           return Redirect::to('/');
        }

        public function st_setting()
        {
            $id=Session::get('id');
          $user_desc_view=DB::table('add_user_table')->select('*')
                                                           ->where('id',$id)
                                                           ->first();
         $manage_desc_user=view('layouts/st_setting')->with('user_desc_view',$user_desc_view);
         return view('layouts/st_layout')->with('st_setting',$manage_desc_user);
        }

        public function st_setting_action(Request $request)
        {
          $id=Session::get('id');
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
                return Redirect::to('/st_profile');
        }

        public function st_all_lab()
        {
          $all_lab_info=DB::table('lab_equipment')->get();
          $manage_lab=view('layouts.st_all_lab')->with('all_lab_info',$all_lab_info);
          return view('layouts/st_layout')->with('st_all_lab',$manage_lab);
            //return view('layouts/all_user');
        }


    }


?>
