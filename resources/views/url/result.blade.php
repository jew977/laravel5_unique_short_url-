@extends('layout.master')
@section('content')
<div class="form-box">
		<h1 class="text-center">短连接生成器</h1>
	<form action="url" method="post" class="form-dl">	
	<div class="col-xs-5 col-xs-offset-4 form-group">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<input type="text" class="form-control" placeholder="请输入一个url地址">
	</div>
	<div class="col-xs-3 form-group">
		<button class="btn btn-primary" type="submit btn-primary">提交</button>
	</div>
	</form>
	<div class="validater">
		<div class="text-center bg-success"><h3>您生成的短链是</h3><a href="{{$short_url}}" target="_blank">{{$short_url}}</a></div>
	</div>
</div>
@stop