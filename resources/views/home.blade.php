<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset('/image-crystal-chrispy-favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker:400" rel="stylesheet" type="text/css">
	<title>Chrispy"s Site</title>
</head>

<body>

	
	<h1><span id="camberden">Camberden's</span><span class="marker">Laravel Workspace<span></h1>

	<main class="index-grid">

	@auth
	<div class="index-item">
		<p>Congrats! You are logged in!</p>
		<form action="/logout" method="POST">
			@csrf
			<button>Log out!</button>
		</form>
	</div>

	<div class="index-item">
		<form action="/create-post" method="POST">
		@csrf
		<div class="sub-index-grid">
			<div class="sub-index-item"><input type="text" name="title" placeholder="Enter title of post" id="post-title"></div>
			<div class="sub-index-item"><textarea name="body" placeholder="Content of post" id="textarea-title"></textarea></div>
			<div class="sub-index-item"><button>Save Post!</button></div>
			</form>
		</div>
	</div>

	<div class="index-item">
	<h2>All posts to date below!</h2>
	@foreach($posts as $post)
	<div>
		<h3>{{$post["title"]}}</h3>
		<p>{{$post["body"]}}</p>
	</div>
	@endforeach
	</div>
	
	@else
	<div style="border: 3px solid black;" class="index-item">
		<h2>Register</h2>
		<form action="/register" method="POST"><!-- THIS IS THE URL THE FORM SUBMITS TO -->
			@csrf <!-- COOKIE PROTECTION -->
			<input name="name" type="text" placeholder="name">
			<input name="email" type="text" placeholder="email">
			<input name="password" type="password" placeholder="password">
			<button>Register</button>
		</form>
	</div>
	<div style="border: 3px solid black;" class="index-item">
		<h2>Login</h2>
		<form action="/login" method="POST"><!-- THIS IS THE URL THE FORM SUBMITS TO -->
			@csrf <!-- COOKIE PROTECTION -->
			<input name="login-name" type="text" placeholder="name">
			<input name="login-password" type="password" placeholder="password">
			<button>Log In!</button>
		</form>
	</div>
	@endauth
	
	</main>
</body>
</html>