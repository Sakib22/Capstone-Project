<?php
if (isset($_SESSION['staffId'])) {
  echo '<p class="login-status">Login Successful</p>';
}
else {
  echo '<p class="login-status">You have been Logged out!</p>';
}
 ?>
