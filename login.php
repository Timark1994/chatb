<?php include_once("connection.php");
session_start(); 
?>
<?php 
//username and password sent from form. 
$username=$_POST['Email'];
$password=$_POST['password'];
$username=stripslashes($username);
$password=stripslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$sql="select count(*) from signup where(user_name='".$username."' and password='".$password."')";
$query=mysql_query($sql);
$result=mysql_fetch_array($query);
if ($result[0]>0)
{
$_SESSION['Email']=$username;
$_SESSION['password']=$password;
//header("Location: home.php");

}else{
echo "Login failed";
echo "<br/><a href='facesignup.php'>Sign in again or create an account with us</a>";
}
?>
<?php mysql_close(); ?>