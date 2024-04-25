<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>I am tired but also not! :D</h1>


	@auth
	<div>
		<p>Congrats! You are logged in!</p>
		<form action="/logout" method="POST">
			@csrf
			<button>Log out!</button>
		</form>

<div>
	<h2>Create new post!</h2>
	<form action="/create-post" method="POST">
		@csrf
		<input type="text" name="title" placeholder="Enter title of post">
		<textarea name="body" placeholder="Content of your post"></textarea>
		<button>Save Post!</button>
		
</form>	

<div>
	<h2>All posts to date below!</h2>
	@foreach($posts as $post)
	<div>
		<h3>{{$post["title"]}}</h3>
		<p>{{$post["body"]}}</p>
	</div>
	@endforeach
</div>

</div>



	</div>
	@else
	<div style="border: 3px solid black;">
		<h2>Register</h2>
		<form action="/register" method="POST"><!-- THIS IS THE URL THE FORM SUBMITS TO -->
			@csrf <!-- COOKIE PROTECTION -->
			<input name="name" type="text" placeholder="name">
			<input name="email" type="text" placeholder="email">
			<input name="password" type="password" placeholder="password">
			<button>Register</button>
		</form>
	</div>
	<div style="border: 3px solid black;">
		<h2>Login</h2>
		<form action="/login" method="POST"><!-- THIS IS THE URL THE FORM SUBMITS TO -->
			@csrf <!-- COOKIE PROTECTION -->
			<input name="login-name" type="text" placeholder="name">
			<input name="login-password" type="password" placeholder="password">
			<button>Log In!</button>
		</form>
	</div>
	@endauth
	
	
</body>
</html>