<?php
$conn = new mysqli("localhost","root","","vcond");

$passlama = md5($_POST["pass"]);
$passbaru = md5($_POST["pass2"]);

$sql = "select * from login where pass='$passlama'";
$query = mysqli_query($conn,$sql);
if (mysqli_num_rows($query) == 1) {
	$sql2 = "UPDATE login set pass='$passbaru' where pass='$passlama'";
$query2 = mysqli_query($conn,$sql2);

header('location:pass.php?error=1');


}else{
header('location:pass.php?error=2');

} 

?>