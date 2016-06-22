<?php include_once("connection.php")?>
<?php 
$f_name=$_POST['first_name'];
$s_name=$_POST['second_name'];
$pass=$_POST['password'];
$email=$_POST['email'];
$username=$_POST['username'];
$sql="insert into member(f_name,s_name,email,password,user_name) values('".$f_name."','".$s_name."','".$email."','".$pass."','".$username."')";
$qury=mysql_query($sql);
if(!$qury){
echo "Failed".mysql_error();
echo "<a href='signup.php'>Signup</a>";
}else{
header("Location:welcome.php");
exit;
}
?>
<?php mysql_close(); ?>