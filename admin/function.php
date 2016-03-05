<?php

$name=$_REQUEST['name'];
$costprice=$_REQUEST['costprice'];
$discount=$_REQUEST['discount'];
$image= $_REQUEST['image'];


$cost = $costprice;
$disc = $discount;


$totalsub = $disc / 100;

$total = $totalsub * $cost;
/*$totalM =  % $tota
*/
/*is_double()*/
$discountprice = $cost - $total ;

?>