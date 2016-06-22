<?php require_once("connection.php"); 
session_start();
?>


<?php 
if(isset($_GET['username'])){
$id=mysql_real_escape_string($_GET['username']);
$q = "SELECT * FROM member WHERE 'user_name'='$username'"; 
$result=mysql_query($q);
$info=mysql_fetch_assoc($result);
while($row=$info){
$imageData=$row["photo"];
echo $imageData;
}else{
echo "error!";
}


}
  ?>
  <?php mysql_close(); ?>