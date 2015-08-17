<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $table='urls';

    public static function get_short_url(){
    	$short_url=base_convert(rand(1000,99999),10,36);
    	$res=Url::where('short_url',$short_url)->first();
    	if(!empty($res)){
        static::get_short_url();
    	}else{
         return $short_url;
    	}
    }
}
