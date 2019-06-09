<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

$name = $_POST['name'];
$s_num = $_POST['s_num'];
$interest1 = $_POST['interest1'];
$interest2 = $_POST['interest2'];
$interest3 = $_POST['interest3'];
$profile = $_POST['profile'];

mysqli_query($conn,"update member set name='".$name."', s_num='".$s_num."',interest1='".$interest1."',interest2='".$interest2."',interest3='".$interest3."',profile='".$profile."' where id='".$_SESSION['userid']."'");
echo "<script>alert('정보변경이 완료되었습니다'); history.back();</script>";

mysqli_close($conn);
?>