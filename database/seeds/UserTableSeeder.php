<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([  
          ['name'=>'令狐冲','email'=>'linghu@163.com','password'=>Hash::make('123456')],
          ['name'=>'任我行','email'=>'renwuxing@163.com','password'=>Hash::make('123456')],
          ['name'=>'宋江','email'=>'songjiang@163.com','password'=>Hash::make('123456')],
          ['name'=>'武松','email'=>'wusong@163.com','password'=>Hash::make('123456')]
          ]);
    }
}
