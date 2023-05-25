<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD EXAMPLE</title>

	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
	 <div class="container mt-2">
	 	<div class="row">
	 		<div class="col-lg-12 margin-tb">
	 			<div class="pull-left">
	 				<h2>Student Information</h2>
	 			</div>
	 			<div class="pull-right mb-2">
	 				<a class="btn btn-success" href="{{ route('companies.create') }}">Add Student</a>
	 			</div>
	 		</div>
	 	</div>
	 	@if ($message = Session::get('success'))
	 	    <div class="alert alert-success">
	 	    	<p>{{ $message }}</p>
	 	    </div>
	 	@endif
	 	<table class="table table-boardered">
	 		<thead>
	 			<tr>
	 				<th>Student ID</th>
	 				<th>Student Name</th>
	 				<th>Student Email</th>
	 				<th>Company Address</th>
	 				<th width="280px">Action</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			@foreach ($companies as $company)
	 			    <tr>
	 			    	<td>{{ $company->id }}</td>
	 			    	<td>{{ $company->name }}</td>
	 			    	<td>{{ $company->email }}</td>
	 			    	<td>{{ $company->address }}</td>
	 			    	<td>
	 			    		<form action="{{ route('companies.destroy' ,$company->id" }}" method="Post">
	 			    			<a class="btn btn-primary" href=""

		
	</title>
</head>
<body>

</body>
</html>