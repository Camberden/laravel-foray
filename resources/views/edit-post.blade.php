<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset('/image-crystal-chrispy-favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker:400" rel="stylesheet" type="text/css">
	<title>Edit Post</title>
</head>
<body>
	<h1>Edit Post</h1>
	<form action="/edit-post/{{$post->id}}" method="POST">
		@csrf
		@method("PUT")
		<input type="text" name="title" value="{{$post->title}}">
		<textarea name="body">{{$post->body}}</textarea>
		<button>Save Changes</button>
	</form>

</body>
</html>