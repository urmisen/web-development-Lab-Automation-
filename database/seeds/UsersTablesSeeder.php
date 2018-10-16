<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Member;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name'    => 'Urmi',
          'email'    => 'urmisen@gmail.com',
          'password'   =>  Hash::make('password'),
          'remember_token' =>  str_random(10),
      ]);
    }
}
