<?php

//hostname,username,userpass,dtaabsename
$db=mysqli_connect("localhost","root","","crud");
if($db){
  //echo "Database connection establised!";

}


else{
  die ("Database connection error!".mysqli_error($db));
}
?>