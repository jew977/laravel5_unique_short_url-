<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hash;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
         $arr=['name'=>'jew','age'=>'30'];

         //$arr=array_add($arr,'price',100);
       //list($key,$value)=array_divide($arr);
        //dd(array_except($arr,$arr['age']));
     /*array_first($arr,function($key,$value){
      if($key){
        dd($value);
      }
     });*/
     $arr1=$path = base_path();



 
         dd($arr1);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
              $validator = Validator::make($request->all());
              dd($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
