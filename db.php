<?php
  $conn = mysqli_connect('localhost', 'root', '', 'kdjaat');

  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }
?>
