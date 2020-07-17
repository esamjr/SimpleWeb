<?php 
require_once("config.php");
require_once("auth.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">
            <h1>List Siswa</h1>
            
                <a href="add.php">Add New Data</a><br/><br/>

                    <table width='80%' border=0>

                    <tr bgcolor='#CCCCCC'>
                        <td>Name</td>
                        <td>Age</td>
                        <td>Email</td>
                        <td>Update</td>
                    </tr>
                    <?php 
                    $result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id DESC");
                    while($res = mysqli_fetch_array($result)) { 		
                        echo "<tr>";
                        echo "<td>".$res['name']."</td>";
                        echo "<td>".$res['age']."</td>";
                        echo "<td>".$res['email']."</td>";	
                        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
                    }
                    ?>
                    </table>
        </div>
    
    </div>
</div>

</body>
</html>