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
<h1 align="center" style="color:green;"><i>Add your photo here.</i></h1>
<div id="inline">
<div id="side_inline">
 
</div>
<div id="image_display">

<form  action="add_photo.php" method="post" enctype="multipart/form-data">
<input class="button"type="file" name="image"><br/>
<input class="button"type="submit" name="submit" value="Upload"/>
</form>
<?php 
if(isset($_POST['submit'])){
$imageName=mysql_real_escape_string($_FILES["image"]["name"]);
$imageData=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
$imageType=mysql_real_escape_string($_FILES["image"]["type"]);
if(substr($imageType,0,5)=="image")
{
//$qry="INSERT INTO member_pictures(name,image)VALUES('".$imageName."','".$imageData."')";
$sql="UPDATE member SET photo=$imageData where user_name =" . (int) $_SESSION['username'];
$result=mysql_query($sql);
echo "Image uploaded";
}else{
echo "only images are allowed!";
}
}
?>
<h3>Profile picture</h3>
<img src="" height="200" width="200" alt="profile picture">   </img>
</div>
<div id="reg_form">


</div>
</div>
<a href="profile.php"><button class="button">Back</button></a>
<div id="footer"><ul align="center"><a href=""><li >Help</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li >Contact us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>About us</li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><li>Terms</li></a></ul></div>
</div>
</body>
</html>
<?php mysql_close($connect) ?>