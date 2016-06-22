<?php require_once("connection.php");
session_start();
?>
<!doctype html>
<html>
<head><title>complex page</title>
<link rel="stylesheet" href="stylesheets/contain.css"/>
</head>
<body id="container" >
<div id="main_div">
<div id="mid_div">
</div>
<h1 align="center" style="color:green;"><i>Welcome to your profile</i></h1>
<div id="inline">
<div id="side_inline"> </div>
<div id="image_display">
<img src="profilepic.php?username=$_SESSION['username']" alt="profilepic" height="200" width="200"></img>
</div>
<div id="reg_form">
<?php  $q = "SELECT * FROM member WHERE user_name = " . (int) $_SESSION['username'];
$result=mysql_query($q);
$info=mysql_fetch_array($result);
?>
First name:<?php echo "<br />".$info['f_name'];?><br/>
Second name:<?php echo "<br />".$info['s_name'];?><br/>
User name:<?php echo "<br />".$_SESSION['username'];?><br/>
password:<?php echo "<br />".$_SESSION['password'];?><br/>
Email:<?php echo "<br />".$info['email'];?><br/>
<a href="edit_profile.php"><button class="button">Edit profile</button></a><br/>
<a href="add_photo.php"><button class="button">Add your photo </button></a>
</div>
</div>
<a href="home.php"><button class="button">Back to home</button></a>
<div id="footer"><ul align="center"><a href=""><li >Help</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li >Contact us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>About us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>Terms</li></a></ul></div>
</div>
</body>
</html>
<?php mysql_close($connect) ?>
