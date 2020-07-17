<?php

include("config.php");


$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM siswa WHERE id=$id");


header("Location:timeline.php");
?>

