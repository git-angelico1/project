<html>
<head>
    <title>Name</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
	<center><br><br><br><br><br><br><br>
		<h1>Voters Age</h1>
		<form method= "POST" action="/view">
		     @csrf
		     <label for="InputName">Enter Age: </label>
		     <input type="number" name ="InputName" min = "1" name="InputName" required><br><br>
		     <input type="Submit" name="Check Age">

		</form>
        <br>
            <p style="color: red;">{{$name}}</p>
            <p style="color: red;">{{$mess}}</p>

            
    </center>
</body>
</html>