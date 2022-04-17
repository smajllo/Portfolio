<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$query="SELECT * FROM user,about,favicon,admin_users";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <title>Admin Panel</title>
    <link href="css/dashboard.css" rel="stylesheet" />
  </head>
  <body>
    <div class="page">
      <nav class="side-nav">
        <ul>
          <li>
            <a href="#"
              >Hi,
              <?=$_SESSION['username']?></a
            >
          </li>
          <li>
            <a href="../admin/"> Home </a>
          </li>
          <li>
            <a href="?editfavicon=true"> Edit Favicon </a>
          </li>
          <li>
            <a href="?edituser=true"> Edit User </a>
          </li>
          <li>
            <a href="?editabout=true"> Edit About </a>
          </li>

          <li>
            <a href="?editprojects=true"> Edit Projects </a>
          </li>

          <li>
            <a href="?editAdmin=true"> Edit Admin </a>
          </li>
          <li>
            <a href="php/logout.php">Logout</a>
          </li>
        </ul>
      </nav>

      <main class="main">
        <?php
     if(isset($_GET['edituser'])){ 
     include('php/user.php'); 
     }else if(isset($_GET['editabout'])){
         include('php/about.php');      
     }else if(isset($_GET['editprojects'])){
      include('php/projects.php');
     }else if(isset($_GET['editfavicon'])){
         include('php/favicon.php');
    
     }else if(isset($_GET['editAdmin'])){ ?>

        <div class="admin-info">
          <h2>Edit Admin Information</h2>
          <?php
         if(isset($_GET['msg'])){
  if($_GET['msg']=='updated'){
      ?>
          <div>Successfully Updated !</div>
          <?php
  }  
 } 
?>
          <div class="admin-info-container">
            <form method="post" action="php/update-admin.php">
              <div class="admin-info-inner">
                <div class="admin-input">
                  <label for="ptitle">Name</label>
                  <input
                    type="text"
                    name="username"
                    value="<?=$data['username']?>"
                    id="ptitle"
                    placeholder="username"
                  />
                </div>
                <div class="admin-input">
                  <label for="psubtitle">Password</label>
                  <input
                    type="text"
                    name="userpass"
                    value="<?=$data['user_pass']?>"
                    id="psubtitle"
                    placeholder="*************"
                  />
                </div>
                <div class="admin-input">
                  <label for="psubtitle">Email Id</label>
                  <input
                    type="text"
                    name="userid"
                    value="<?=$data['user_id']?>"
                    id="psubtitle"
                    placeholder="admin@admin.com"
                  />
                </div>
              </div>

              <input
                type="submit"
                name="uprofile"
                class="admin-info-button"
                value="Save Changes"
              />
            </form>
          </div>
          <?php }else{
         include('php/welcome.php');
     } ?>
        </div>
      </main>
    </div>
  </body>
</html>
