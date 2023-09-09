<?php
require'connection.php';

if(isset($_POST["Submit"])){
  $sql = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$_POST[Username]' AND password = '$_POST[Password]'");
  $cek = mysqli_num_rows($sql);
  if ($cek == 1) {
    $_SESSION['username'] = $_POST['Username'];

    header("Location: user_1/u1.php");
  }
  if ($cek > 1) {
    $_SESSION['username'] = $_POST['Username'];

    header("Location: u2.html");
  }
}

?>