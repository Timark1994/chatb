<?php require_once("connection.php") ?>
<!doctype html>
<html>
<head><title>sample page</title>
<link rel="stylesheet" href="stylesheets/contain.css"/>
</head>
<body id="container" >
<div id="main_div">
<div id="mid_div">
<form class="form" action="login.php" method="post">
username:<input type="text" name="username"/>
password:<input type="password" name="password"/>
<input type="submit" name="sign in" class="button" value="sign in"/>
</form>
</div>
<h1 align="center" style="color:green;"><i>Welcome to the Master chef</i></h1>
<h2 align="center" style="color:green;">Create account</h2>
<div id="inline">
<div id="side_inline"></div>
<div id="image_display"><img src="images/finallogo.jpg" height="400px" width="300px" alt="site logo"/></div>
<div id="reg_form">
<form action="signup.php" name="registration" method="post" >
<h3 style="display:inline-block;">First name:</h3><br/><input type="text"  name="first_name"/>
<h3>Second name:</h3><input type="text"  name="second_name"/>
<h3>password:</h3><input type="password"  name="password"/>

<h3>Username:</h3><input type="text"  name="username"/>
<h3>Email:</h3><input type="text"  name="email"/><br/>
<input type="submit" value="Sign Up" class="button" name="submit"/>
</form>
</div>
</div>
<div id="footer"><ul valign="middle" align="center"><a href=""><li >Help</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li >Contact us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>About us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>Terms</li></a></ul></div>
</div>
</body>
</html>
<?php mysql_close($connect) ?>