<?php
include 'scripts/php/database_connection.php';
$result = mysqli_query($dbhandle, "SELECT * FROM `activate` WHERE `id`=1");
$row = mysqli_fetch_array($result);
if ($row{'activated'}==0) {
    header('Location: construction.php');
}
elseif ($row{'activated'}==2){
    header('Location: maintainance.php');
}
else {
}
?>