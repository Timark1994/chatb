<?php require_once("connection.php");
session_start();
 ?>
<!doctype html>

<html>
<head><title>sample page</title>
<link rel="stylesheet" href="stylesheets/contain.css"/>
</head>
<body id="container" >
<div id="main_div">
<div id="mid_div">
</div>
<h1 align="center" style="color:green;"><i>The Master chef.</i></h1>
<div id="inline">
<div id="side_inline"> </div>
<div id="image_display"><img src="images/finallogo.jpg" height="400px" width="300px" alt="site logo"/></div>
<div id="reg_form">
<?php
if(isset($_POST['submit'])){
$f_name=$_POST['first_name'];
$s_name=$_POST['second_name'];
$user_name=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$sql="UPDATE member SET f_name='$f_name',s_name='$s_name',user_name='$user_name',password='$password',email='$email' where user_name =" . (int) $_SESSION['username'];
$qury=mysql_query($sql);
if(mysql_affected_rows()==1){
//success
header("Location:profile.php");
}else{
//failed
echo "Profile update failed.";
echo "<br/>".mysql_error();
header("Location:edit_profile.php");
}
}
 ?>

<form action="edit_profile.php" name="registration" method="post" >
<h3 style="display:inline-block;">First name:</h3><br/><input type="text"  name="first_name"/>
<h3>Second name:</h3><br/><input type="text"  name="second_name"/>
<h3>password:</h3><br/><input type="password"  name="password"/>
<h3>Username:</h3><br/><input type="text"  name="username"/>
<h3>Email:</h3><br/><input type="text"  name="email"/><br/>
<input type="submit"  class="button" name="submit" value="Edit"/><br/>
</form>

</div>
</div>
<div id="footer"><ul align="center"><a href=""><li >Help</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li >Contact us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>About us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>Terms</li></a></ul></div>
</div>
</body>
</html>
<?php mysql_close($connect) ?>