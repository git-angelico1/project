<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<title>Gallery</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
		<form method="POST" action="/gallery">
		  <center><h1>Election Age Verifier!</h1>
		     <label for="InputName"> Enter Age: </label>
		     <input type="text" id="InputName" name="nameInput" required>
		     <button type="Submit" id="CheckAge"> Check Age	</button>
		  </center>   
		</form>
</body>
</html>