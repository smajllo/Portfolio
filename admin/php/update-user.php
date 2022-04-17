<?php
include('../../include/db.php');
include('checkupload.php');
$query="SELECT * FROM user";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['save'])){
    
$profilepic=$_FILES['profile']['name'];    
$homewallpaper=$_FILES['cover']['name'];
    
if($profilepic==""){
    $profilepic=$data['profilepic'];
}else{
    $pdone = Upload('profile',$target_dir);
}
    

    
    
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$linkedin=mysqli_real_escape_string($db,$_POST['linkedin']);
$github=mysqli_real_escape_string($db,$_POST['github']);

    


    
if($pdone=="error"){
    header("location:../?edituser=true&msg=error");
}else if($cdone=="error"){
    header("location:../?edituser=true&msg=error");
}else{
$query="UPDATE user SET ";
$query.="profilepic='$profilepic',";
$query.="name='$name',";

$query.="linkedin='$linkedin',";
$query.="github='$github',";

$query.="emailid='$email' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edituser=true&msg=updated");
}    

}    
    
}
