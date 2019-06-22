<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

if($kind=1){
mysqli_query($conn,"UPDATE apply_contest_design SET apply_chk=1 WHERE num=$num");
}
if($kind=2){
mysqli_query($conn,"UPDATE apply_contest_develop SET apply_chk=1 WHERE num=$num");
}
if($kind=3){
mysqli_query($conn,"UPDATE apply_contest_etc SET apply_chk=1 WHERE num=$num");
}
if($kind=4){
mysqli_query($conn,"UPDATE apply_contest_idea SET apply_chk=1 WHERE num=$num");
}
if($kind=5){
mysqli_query($conn,"UPDATE apply_study_design SET apply_chk=1 WHERE num=$num");
}
if($kind=6){
mysqli_query($conn,"UPDATE apply_study_develop SET apply_chk=1 WHERE num=$num");
}
if($kind=7){
mysqli_query($conn,"UPDATE apply_study_etc SET apply_chk=1 WHERE num=$num");
}

echo
"
<script>
    alert('정보가 변경되었습니다!');
    history.back();
</script>
";
mysqli_close($conn);
?>
