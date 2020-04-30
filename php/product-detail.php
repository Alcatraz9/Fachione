<?php

require_once ("connectDB.php");

if(!empty($_GET['id'])) {
$productid = $_GET['id'];

$result = mysqli_query($link,"select * from product where id= ".$productid); 

$product = mysqli_fetch_object($result);

mysqli_close($link);
} else {
    header("index.php",true,302);
    exit();
}

// mysqli_close($link);

?>