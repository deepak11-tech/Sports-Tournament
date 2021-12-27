<?php

include 'config.php';

$id = $_GET['id'];

$q = " DELETE FROM `sport` WHERE id = $id ";

mysqli_query($con, $q);

header('location:index.php');

?>