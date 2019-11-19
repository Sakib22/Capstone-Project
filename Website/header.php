<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="loginStyle.css">
  </head>
  <body>
    <h2>Login Form</h2>

    <form class="form-staff" action="includes/staff.inc.php" method="post">
      <div class="imgcontainer">
        <img src="logo100.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd">

        <button type="submit" name="login-submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
