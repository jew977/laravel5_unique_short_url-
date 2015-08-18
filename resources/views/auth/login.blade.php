<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登陆</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
     <style>
   
     </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="text-center">用户登陆</h2>
		   <form action="/auth/login" method="post" class="form-box form-horizontal">
		   	<input type="hidden" name="_token" value="{{csrf_token()}}">
		    <div class="form-group">
		    	<div class="col-xs-3">
		    		<label for="" class="control-lable">用户名</label>
		    	</div>
		    	<div class="col-xs-9">
		    		<input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="请输入您的用户名">
		    	</div>
		    </div>
		    <div class="form-group">
		    
		    	<label for="" class="control-lable col-xs-3">密&nbsp;&nbsp;码</label>
		    	<div class="col-xs-9">
		    		<input type="password" name="password" class="form-control" placeholder="请输入您的密码">
		    	</div>
		    </div>
		    <div class="form-group">
		    	<div class="col-xs-2 col-xs-offset-4"><button class="btn btn-primary btn-lg" type="submit">登陆</button></div>
		    	<div class="col-xs-6"><button class="btn btn-primary btn-lg" type="reset">重置</button></div>		 		
		    </div>
	        </form>
	        <div class="">
	        	@if(count($errors)>0)
	        	<ul>
	        		@foreach($errors->all() as $error)
	        		<li>{{$error}}</li>
	        		@endforeach
	        	</ul>
	        	@endif
	        </div>
		</div>
	</div>
</body>
</html>