<?php
/*****************************************************************************
* SqlCounter.php
* Connects to database / Creates new one / Increments Variable / Echoes Value
*****************************************************************************/

function SqlCounter() {
//-------------Connect to DataBase---------------------------------------------
    $mysql_server = "127.0.0.1";
    $mysql_admin = "root";
    $mysql_pass = "";
    
    $Connection = mysqli_connect($mysql_server, $mysql_admin, $mysql_pass);
if(!$Connection){
     die('Could not connect: ' . mysqli_error());
}

//-----------------------------------------------------------------------------

$db_selected = mysqli_select_db($Connection,'Counter');

if (!$db_selected) {
  $sql = 'CREATE DATABASE Counter int (1)';

  if (mysqli_query($Connection,$sql)) {
      echo "Database Counter created successfully\n";
  } else {
      echo $Connection->error;
  }
}
$sql = ("INSERT INTO Counter(Count) VALUES (Count) ON DUPLICATE KEY UPDATE Count = Count+1");
if($Connection->query($sql)===TRUE){
    echo"Record updated succesfully";
} else {
echo "Error updating record:" . $Connection->error;    
}
mysqli_close($Connection);
}

?>
