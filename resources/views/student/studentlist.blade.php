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
				<h1 style="text-center">Student List</h1>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	foreach($query as $row){ ?>
				  		<tr>
					      <th scope="row"><?php echo $row->id ?></th>
					      <td><?php echo $row->name ?></td>
					      <td><?php echo $row->email ?></td>
					      <td><?php echo $row->phone ?></td>
					      <td><a href="modify/<?php echo $row->id ?>">Edit</a></td>
				    	</tr>
        			<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>