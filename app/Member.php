<?php

namespace App;
use Input;
use Hash;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{

//class Member extends Model{
    //protected $table="add_user_table";

    public static function formstore($data){
      //echo "here model is";
      //var_dump($data);
     $name=Input::get('name');
      $email=Input::get('email');
      $password=Hash::make(Input::get('password'));


      $users=new Member();

      $users->name=$name;
      $users->email=$email;
      $users->password=$password;

      $users->save();
    }
}
