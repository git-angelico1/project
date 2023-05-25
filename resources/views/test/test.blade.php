<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<title>Conditional Page</title>
</head>
<body>
	<h1>This is a condition page</h1>
	@if(strlen($name) > 0)
	True: The length of Johnny Sins > 0.
	@else
	False:
	@Endif
</body>
</html>