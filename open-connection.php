<?php
$con = msqli_connect("localhost","root","","shopcart");
if ($con === false){
    die("ERROR: Could not Connected". mysqli_connect_error());
}
?>