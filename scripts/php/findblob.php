<?php
require 'database_connection.php';
$ID = $_GET['id'];
$pictures = "SELECT * FROM `images` WHERE `id` = '$ID';";
$picture_query = mysqli_query($dbhandle,$pictures);
$picture = mysqli_fetch_assoc($picture_query) or die("Fetch did not work");
header('Content-type: image/jpeg');
echo $picture['img'] ;
mysqli_close($dbhandle);
?>