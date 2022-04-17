<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Admin Login</title>
    <link href="../css/signin.css" rel="stylesheet" />
  </head>
  <body>
    <form action="../php/check.php" method="post" class="forma">
      <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='logout'){
      ?>
      <div>Logout Successfull !</div>
      <?php
  }  
  if($_GET['msg']=='iuser'){
      ?>
      <div>Incorrect Email/Password !</div>
      <?php
  } } 
?>
      <div class="admin-login">
        <h1>Please sign in</h1>
        <div class="input-label">
          <label for="inputEmail">Email address</label>
          <input
            type="email"
            id="inputEmail"
            name="email"
            placeholder="Email address"
            required
          />
        </div>
         <div class="input-label">
        <label for="inputPassword">Password</label>
        <input
          type="password"
          id="inputPassword"
          name="password"
          placeholder="Password"
          required
        />
        <div>
          <label>
            <input type="checkbox" name="rm" value="remember-me" /> Remember me
          </label>
        </div>
        <input type="submit" name="login" value="Login" />
      </div>
    </form>
  </body>
</html>
