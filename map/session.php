<?php
error_reporting(0);
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$conn = new mysqli("localhost", "root", "", "vcond");

session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];

// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql="select user from login where user='$user_check'";
$result=mysqli_query($conn,$ses_sql);
$row = mysqli_fetch_assoc($result);

$login_session = $row['user'];
if(!isset($login_session)){
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../session.php">';
exit;
}
?>