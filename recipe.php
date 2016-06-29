<?php require_once("connection.php") ?>
<!doctype html>
<html>
<head><title>sample pagemmmmmm</title>
<link rel="stylesheet" href="stylesheets/contain.css"/>
</head>
<body id="container" >
<div id="main_div">
<div id="mid_div">
<form  style="float:left;" action="login.php" method="post">
username:<input type="text" name="username"/>
password:<input type="password" name="password"/>
<input type="submit" name="sign in" class="button" value="sign in"/>
</form>
</div>
<h1 align="center" style="color:green;"><i>Welcome to the Master chef</i></h1>
<h3 align="right" style="color:green;">Create account</h3>
<div id="inline">
<div id="side_inline"></div>
<div id="image_display"><img src="images/finallogo.jpg" height="400px" width="300px" alt="site logo"/></div>
<div id="reg_form">
<form action="signup.php" name="registration" method="post" >
<h1 style="display:inline-block;">First name:</h1><input type="text" value="first_name" name="first_name"/>
<h1>Second name:</h1><input type="text" value="second name" name="second_name"/>
<h1>password:</h1><input type="password" value="password" name="password"/>

<h1>Username:</h1><input type="text" value="username" name="username"/>
<h1>Email:</h1><input type="text" value="email" name="email"/>
<input type="submit" value="Sign Up" class="button" name="submit"/>
</form>
</div>
</div>
<div id="footer"><ul valign="middle" align="center"><a href=""><li >Help</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li >Contact us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>About us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>Terms</li></a></ul></div>
</div>
</body>
</html>
<?php mysql_close($connect) ?>
