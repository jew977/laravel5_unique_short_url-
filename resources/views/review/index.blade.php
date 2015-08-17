<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>评论列表</title>
</head>
<body>
	<div>
		<div><h1>评论列表</h1></div>
		<div>
			<ul>
			@foreach($data as $value)
			<li>{{$value->review_title}}</li>
			@endforeach
		   </ul>
           
		</div>
		{!! $data->render();!!}
	</div>
</body>
</html>