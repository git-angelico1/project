<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
	<center><br><br><br><br><br><br><br>
		<h1>LOGIN FORM</h1>
		<form method= "POST" action="/login1">
		     @csrf
			 <br>

		     <label> Username: <input type="text" name="username" placeholder=" Enter"></label>
		     <br>
		     <br>
		     <label> Password: <input type="password" name="password"></label>
		     <br>
		     <br>
		     <input type="Submit" name="Login">
		     <br>
		     <br>
		     @if ($errors->any())
                        <div style="color: red;">
                            {{ $errors->first()}}
                        </div>
                    @endif


		</form>
        <br>

    </center>
</body>
</html>