@extends('layout.master')
@section('content')
<div class="form-box">
		<h1 class="text-center">短连接生成器</h1>
	<form action="url" method="post" class="form-dl">	
	<div class="col-xs-5 col-xs-offset-4 form-group">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<input type="text" name="url" class="form-control" placeholder="请输入您的url地址">
	</div>
	<div class="col-xs-3 form-group">
		<button class="btn btn-primary" type="submit btn-primary">提交</button>
	</div>
	</form>
	<div class="validater">
		@if(!empty($errors->first('url')))
		<div class="text-center bg-warning">{{$errors->first('url')}}</div>
		@endif
	</div>
</div>
@stop