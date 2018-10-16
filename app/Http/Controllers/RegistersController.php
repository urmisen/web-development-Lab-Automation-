<?php

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Member;
use Illuminate\Http\Request;

class RegistersController extends Controller
{

    public function register(Request $request){
      $this -> validate($request,[
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'password-confirm'=>'required',
      ]);

      $members=new Member;
      $members->name=$request->input('name');
      $members->email=$request->input('email');
      $members->password=$request->input('password');
      $members->password_confirmation=$request->input('password-confirm');
      $members->save();
      return redirect('/st_login')->with('response','Registration Successful');
    }

  }
