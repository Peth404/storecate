<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salesonli";

include_once 'function.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql=  "INSERT INTO pep (id, name, price, discount, discountprice, duration, ds, de, image) VALUES ('".$id."',  '".$name."', '".$price."', '".$discount."', '".$discountprice."', '".$duration."', '".$ds."', '".$de."', '".$image."')";

/*table_name` (`id` int(11) NOT NULL AUTO_INCREMENT,`cost` DECIMAL( 10, 2 ) NOT NULL);*/



if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<div>
<?php
	/*echo $_GET('index.html');*/
	
	
	echo "  -----     " . number_format($price, 2,".","");
	echo "   -----     " . number_format($discount); 
	echo "   -----    " . number_format($discountprice, 2,".","");
	echo $image;
	?>
</div>