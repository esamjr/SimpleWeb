<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">

			<p>&larr; <a href="timeline.php">Home</a>

			<form action="" method="POST">
				<h4>Input Data Siswa</h4>
				<div class="form-group">
					<label for="username">Name</label>
					<input class="form-control" type="text" name="name" placeholder="Name" />
				</div>


				<div class="form-group">
					<label for="password">Age</label>
					<input class="form-control" type="text" name="age" placeholder="Age" />
				</div>

				<div class="form-group">
					<label for="password">Email</label>
					<input class="form-control" type="text" name="email" placeholder="Email" />
				</div>

				<input type="submit" class="btn btn-success btn-block" name="Submit" value="Buat" />

			</form>
				
			</div>

			<div class="col-md-6">
				<img class="img img-responsive" src="img/gaben1.png" />
			</div>

		</div>
	</div>
    
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		 
			
			
		$result = mysqli_query($mysqli, "INSERT INTO siswa(name,age,email) VALUES('$name','$age','$email')");
		header("Location:timeline.php");
	}
}
?>
</body>
</html>
