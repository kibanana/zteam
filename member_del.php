<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

mysqli_query($conn,"delete from member where id='".$_SESSION['userid']."'"); 

echo "<script>alert('회원탈퇴가 완료되었습니다.'); history.back();</script>";
?>