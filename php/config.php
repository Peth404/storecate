<?php
$con = mysql_connect("localhost","root"," "); // Enter hostname,user,password 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  // select database
  mysql_select_db("salesonli", $con); //

  ?>