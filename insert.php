<?php

$LIST = $_POST['List'];

include "config.php";

mysqli_query($con, "INSERT INTO `tbltodolistkehidupan`(`List`) VALUES ('$LIST')");

header("location:index.php");

?>