<?php
/*require_once 'php/dbcontroller.php';*/
include '../php/config.php'; 
 // connect to mysql//
//step:1

/*$con = mysql_connect("localhost","root"," "); // Enter hostname,user,password 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  // select database
  mysql_select_db("stores", $con); *///Provide database name which has our data for pagination.
  

  //   count total number of rows from the desired table in the database  //
//step:2
    
  $query = mysql_query("SELECT * FROM edgars"); //Counting total number of rows in the table 'data',
  $total_rows = mysql_num_rows($query);

  // setup configuration//  
//step:3

  $base_url = 'https://localhost/pagi/';    //Provide location of you index file  
  $per_page = 12;                           //number of results to shown per page 
  $num_links = 8;                           // how many links you want to show
  $total_rows = $total_rows; 
  $cur_page = 1;                           // set default current page to 1


//now we will extract information from url//
//step:4
    if(isset($_GET['page']))
    {
      $cur_page = $_GET['page'];
      $cur_page = ($cur_page < 1)? 1 : $cur_page;            //if page no. in url is less then 1 or -ve
    }

// calculate limit and offset, it'll will be used for Sql Query//
//step:5
    $offset = ($cur_page-1)*$per_page;                //setting offset
   
    $pages = ceil($total_rows/$per_page);              // no of page to be created

    //Calculate the start and end page numbers for pagination links//
//step:6

    $start = (($cur_page - $num_links) > 0) ? ($cur_page - ($num_links - 1)) : 1;
    $end   = (($cur_page + $num_links) < $pages) ? ($cur_page + $num_links) : $pages;

    //query the database with calculated OFFSET //
//step:7
    $res = mysql_query("SELECT * FROM edgars LIMIT ".$per_page." OFFSET ".$offset);

 mysql_close($con);
 
 // pagination.php completed // 
?>

