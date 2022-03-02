<?php

include 'connection.php';

$id = $_GET['id'];
$q="SELECT * FROM testpapers ORDER BY id DESC LIMIT 1;";
  $query = mysqli_query($conn,$q);
  $row = mysqli_fetch_row($query);
  $questionpaper=$row[1];

$q = " DELETE FROM `$questionpaper` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:display.php');

?>