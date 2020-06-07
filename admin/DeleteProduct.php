<?php
require('Require/Connection/Connection.php');
$ID = $_GET['ID'];
$query = "DELETE FROM Product WHERE ID=$ID ";

$run = mysqli_query($conn,$query);
if (!$run){
    echo "Oops !! ERROR";
}else{
    header('location:DeleteProducts.php');
}
?>