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
<nav id="top-nav"><a href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Dishes</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Groups</a></nav>
<section style="float:right;"><a href="profile.php"><button class="button">Your profile</button></a></section>
</div>
<div id="search"> <form action="search.php" style="float:right;">Search here:<input type="text" /><input type="submit" value="search" class="button"/></form></div>
<div id="content">
<section id="left_side">

<section id="dish">
<h1>Select from dishes below;</h1>
<a href="create_dish.php"><button class="button">Create new dish</button></a>
<a href="edit_dish.php"><button class="button">Edit dish</button></a>
<a href="delete_dish.php"><button class="button">Delete dish</button></a>
</section>

<section id="group">
<h1>These are your groups.</h1>
<a href="create_group.php"><button class="button">Create new group</button></a>
<a href="edit_group.php"><button class="button">Edit group</button></a>
<a href="delete_group.php"><button class="button">Delete group</button></a>
<h3>Click the button .</h3>
<a href="confirm_member.php"><button class="button">Confirm members</button></a>
</section>

</section>
<section  id="center"  ><h4 align="left"> <i><?php $uname=$_SESSION['username'];echo "<br />Hi&nbsp;&nbsp;&nbsp;".$_SESSION['username']."!";?><br/>
<img src="profilepic.php?user_name=$_SESSION['username']" alt="profilepic" height="200" width="200"></img>
</i></h4></section>
<section id="right_side"></section>
</div>



<div id="footer"><ul align="center"><a href=""><li >Help</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li >Contact us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>About us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>Terms</li></a></ul></div>
</div>
</body>
</html>
<?php mysql_close($connect) ?>