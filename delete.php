<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($myspli, "DELETE FROM student Where id='$id'");
header("Location:index.php");
?>