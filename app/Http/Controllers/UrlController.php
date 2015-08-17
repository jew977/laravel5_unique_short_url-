<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use App\Url;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('url.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $url=$request->input('url');
        //验证提交的url
        $target=['url'=>$url];
        $roule=['url'=>'required|url'];
        $message=['url'=>$url.'不是合法的url','required'=>'请求输入url'];
        $validator=validator::make($target,$roule,$message);
        if($validator->fails()){
           return redirect('url')->withErrors($validator);
        }
        
       //检测在数据库
      $result=Url::where('url',$url)->first();
      //dd($result);
      if($result){
        return view('url.result')->with('short_url',$result->short_url);
      }
       //检测不在数据库
       $short_url=Url::get_short_url();
       $res=Url::insert([
       'url'=>$url,
       'short_url'=>$short_url
        ]);
       if($res){
        return view('url.result')->with('short_url',$short_url);
       }else{
        return '数据添加失败';
       }

    }

    public function short_url($short_url){
       $res=Url::where('short_url',$short_url)->first();
       //dd($res->url);
       if(is_null($res)){
       return redirect('url');
       }
       return redirect($res->url);

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
