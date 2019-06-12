<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "dbconn.php";
include "setting.php";

$sql = mysqli_query($conn, "select * from member where id='$userid'");
$member = mysqli_fetch_array($sql);

$chk1=$_POST['chk1'];
$chk2=$_POST['chk2'];
$chk3=$_POST['chk3'];

if ($chk1 = 1) {
    mysqli_query($conn,"UPDATE member SET noti_ap=1 where id='".$_SESSION['userid']."'");
}

if ($chk2 = 1) {
    mysqli_query($conn,"UPDATE member SET noti_recvap=1 where id='".$_SESSION['userid']."'");
} if ($chk3 = 1) {
    mysqli_query($conn,"UPDATE member SET noti_vol=1 where id='".$_SESSION['userid']."'");

} else if(!($chk1 = 1)){
    mysqli_query($conn,"UPDATE member SET noti_ap=0 where id='".$_SESSION['userid']."'");
        echo "<script>
    alert('알림 해지 완료!');
    history.back();
	</script>";
} else  if(!($chk2 = 1)){

    mysqli_query($conn,"UPDATE member SET noti_recvap=0 where id='".$_SESSION['userid']."'");
        echo "<script>
    alert('알림 해지 완료!');
    history.back();
	</script>";
} else  if(!($chk3 = 1)){

    mysqli_query($conn,"UPDATE member SET noti_vol=0 where id='".$_SESSION['userid']."'");
        echo "<script>
    alert('알림 해지 완료!');
    history.back();
	</script>";
}

echo "<script>
        alert('알림 설정이 완료되었습니다');
        history.back();
</script>";
?>