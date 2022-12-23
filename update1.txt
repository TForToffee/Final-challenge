<?php
include "config.php";
$List = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($con, "UPDATE `tbltodolistkehidupan` SET `List`='&List' WHERE ID = $ID");
header("location:index.php");

?>