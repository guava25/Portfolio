<?php 
require 'scripts/php/database_connection.php';
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
$querymess = "SELECT `name`, `href` FROM `nav`;";
    //$queryfrom = "SELECT `UserID`, `Username` FROM `users`";
  $result = mysqli_query($dbhandle,$querymess);          //query
    //$result2 = mysql_query($queryfrom);
  //$array = mysql_fetch_array($result);                          //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
$rows = array();
    while($r = mysqli_fetch_assoc($result)){
        $rows[] = $r; //has the same effect, without the superfluous data attribute
        //$rows[] = array('data' => $r);
    }
//    while($s = mysql_fetch_assoc($result2)){
//        $rows[] = $s;
//    }
$j = json_encode($rows);
  echo $j;

?>