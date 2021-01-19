<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Student Edit</h1>
				<form action="/update" method="post">
					<div class="form-row">
						
						<?php echo csrf_field(); ?>
							<input type="hidden" value="{{$query->id}}" name="id" class="form-control" id="inputPassword4" placeholder="Name">
						<div class="form-group col-md-6">
							<label for="inputPassword4">Name</label>
							<input type="text" value="{{$query->name}}" name="name" class="form-control" id="inputPassword4" placeholder="Name">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4">Email</label>
							<input type="email" value="{{$query->email}}" name="email" class="form-control" id="inputEmail4" placeholder="Email">
						</div>
						</div>
						<div class="form-group">
							<label for="inputAddress2">Phone</label>
							<input type="text" value="{{$query->phone}}" name="phone" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Course Name</label>
								<select name="course_name" class="form-control">
									<option value="4">JavaScript and Jquery Advance</option>
									<option value="3">Laravel 5.5 Beginning to Advance</option>
									<option value="1">PHP & MySQL for Beginner</option>
									<option value="2">ZCPE (PHP Advance Course</option>
								</select>
						</div>

					
						<!-- <div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" name="address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						</div>
						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" name="city" class="form-control" id="inputCity">
						</div> -->
						<!-- <div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
						</div> -->
						<!-- <div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" name="zip" class="form-control" id="inputZip">
						</div> -->
					</div>
					<!-- <div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
						</div>
					</div> -->
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>