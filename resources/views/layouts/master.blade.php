<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/master.css">
</head>
<body>
	<header>
		<nav>
			<a href="/home">Home</a>
			<a href="/home/create">Create</a>
		</nav>
	</header>

	<br/>

	@yield('content')

	<br/>
	<footer>
		<p>
			&copy; laravel 2017
		</p>
	</footer>

	<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
