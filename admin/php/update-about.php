<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$heading=mysqli_real_escape_string($db,$_POST['ptitle']);
$longdesc=mysqli_real_escape_string($db,$_POST['longdesc']);  
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["pdf_file"]["name"];
move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"../../assets/files/" . $_FILES["pdf_file"]["name"]);


$query="UPDATE about SET ";
$query.="heading='$heading',";
$query.="pdf='$upload_pdf',";
$query.="longdesc='$longdesc' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editabout=true&msg=updated");
}    

}    
    

