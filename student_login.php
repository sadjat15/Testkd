<?php
  session_start();
  include 'db.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM students WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      $_SESSION['student'] = $username;
      header('Location: student_dashboard.php');
    } else {
      echo 'Invalid username or password';
    }
  }
?>
