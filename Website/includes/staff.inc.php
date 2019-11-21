<?php
if (isset($_POST['login-submit'])) {

  require 'dbh.inc.php';

  $username = $_POST['user'];
  $password = $_POST['pwd'];

  if (empty($username) || empty($password)){
    header("Location: ../header.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM staff WHERE uidStaff=? OR emailStaff=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../header.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $password);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdStaff']);
        if ($pwdCheck == false) {
          header("Location: ../header.php?error=wrongpwd");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['staffId'] = $row['idStaff'];
          $_SESSION['staffUid'] = $row['uidStaff'];

          header("Location: ../staff.php?login=success");
          exit();
        }
        else {
          header("Location: ../header.php?error=wrongpassword");
          exit();
        }
      }
      else{
        header("Location: ../header.php?error=nouser");
        exit();
      }
    }
  }
}
else{
  header("Location: ../header.php");
  exit();
}
