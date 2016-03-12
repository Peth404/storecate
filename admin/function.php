<?php

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$price=$_REQUEST['price'];
$discount=$_REQUEST['discount'];
// $discountprice = $_REQUEST['discountprice'];
$duration=$_REQUEST['duration'];
$ds=$_REQUEST['ds'];
$de=$_REQUEST['de'];
$image=$_REQUEST['image'];



$cost = $price;
$disc = $discount;


$totalsub = $disc / 100;

$total = $totalsub * $cost;
/*$totalM =  % $tota
*/
/*is_double()*/
$discountprice = $cost - $total ;

?>