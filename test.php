<?Php
require "php/action.php";  // Database connection string

$sql="select id,name,image from item limit 0,10"; // Query to get records from student table 

echo "<table>";

foreach ($dbo->query($sql) as $row) {
echo "<tr><td>$row[id] </td><td> $row[name]</td><td><a value=$row[image] class='b_dtl'><img src=pt.gif></a></td><td><div id='$row[id]' class='my_dtl'> </div> </td> </tr>";
}

echo "</table>";
?>