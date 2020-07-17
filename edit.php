<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	} else {	
		
		$result = mysqli_query($mysqli, "UPDATE siswa SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		
		header("Location: timeline.php");
	}
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">

			<p>&larr; <a href="timeline.php">Home</a>

			<form action="" method="POST">
				<h4>Edit Data Siswa</h4>
				<div class="form-group">
					<label for="username">Name</label>
					<input class="form-control" type="text" name="name" value="<?php echo $name;?>" />
				</div>


				<div class="form-group">
					<label for="password">Age</label>
					<input class="form-control" type="text" name="age" value="<?php echo $age;?>" />
				</div>

				<div class="form-group">
					<label for="password">Email</label>
					<input class="form-control" type="text" name="email" value="<?php echo $email;?>" />
				</div>

				<input type="submit" class="btn btn-success btn-block" name="Submit" value="Ubah" />

			</form>
				
			</div>

			<div class="col-md-6">
				<img class="img img-responsive" src="img/gaben1.png" />
			</div>

		</div>
	</div>
</body>
</html>