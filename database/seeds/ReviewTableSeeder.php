<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ReviewTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([  
          ['review_title'=>'hello keti','review_content'=>'说的是sajfkbxmncxvcxczvoes','user_id'=>'1'],
          ['review_title'=>'hello hhhsss','review_content'=>'说的是sajfkbxcvxxcvmnczvoes','user_id'=>'1'],
          ['review_title'=>'hello sdadxzc','review_content'=>'说的是sajfkfsdfvoes','user_id'=>'2'],
          ['review_title'=>'hello kdfsfseti','review_content'=>'说的是sajfkxccxvbxmnczvoes','user_id'=>'3'],
          ['review_title'=>'hello kgfgdeti','review_content'=>'说的是sajfkbxmvcxvcnczvoes','user_id'=>'3']
          ]);
    }
}
