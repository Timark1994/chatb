<?php include_once("connection.php"); 
session_start();
?>
<?php  
$f_name=$_POST['first_name'];
$s_name=$_POST['second_name'];
$user_name=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$sql="UPDATE member SET f_name=[$f_name],s_name=[$s_name],user_name=[$user_name],password=[$password],email=[$email] where user_name =" . (int) $_SESSION['username'];
$qury=mysql_query($sql);
if(mysql_affected_rows()==1){
//success
$message="Your profile was successfully updated.";
}else{
//failed
$message="Profile update failed.";
$message.="<br/>".mysql_error();
}


?>
<?php mysql_close(); ?>