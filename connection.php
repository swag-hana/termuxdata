<?php

$Conn=mysqli_connect("localhost", "root", "", "form_db");
echo "Connection Sucess";
if(mysqli_connect_error()){
  echo "Something went wrong:" .mysql_connect_error($con);
}
?>