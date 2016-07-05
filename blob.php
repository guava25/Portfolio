<?php
require 'scripts/php/database_connection.php';
$location = file_get_contents("img/blob5.jpg");
$location1 = mysqli_real_escape_string($dbhandle, $location);
$query = "INSERT INTO `images` (`img`) VALUES ('".$location1."')";
$doe = mysqli_query($dbhandle,$query);
if ($doe) {
    echo "done";
}
else {
    echo "fail";
    echo $location;
}