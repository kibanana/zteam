<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

if($chk = 0){
if($kind=1){
mysqli_query($conn,"DELETE apply_contest_design WHERE num=$num");
}
if($kind=2){
mysqli_query($conn,"DELETE apply_contest_develop WHERE num=$num");
}
if($kind=3){
mysqli_query($conn,"DELETE apply_contest_etc WHERE num=$num");
}
if($kind=4){
mysqli_query($conn,"DELETE apply_contest_idea WHERE num=$num");
}
if($kind=5){
mysqli_query($conn,"DELETE apply_study_design WHERE num=$num");
}
if($kind=6){
mysqli_query($conn,"DELETE apply_study_develop WHERE num=$num");
}
if($kind=7){
mysqli_query($conn,"DELETE apply_study_etc WHERE num=$num");
}

echo
"
<script>
    alert('정보가 삭제되었습니다!!');
    history.back();
</script>
";
} else{
  echo
  "
  <script>
      alert('이미 신청이 완료된 게시글이어서 삭제가 불가능 합니다!!');
      history.back();
  </script>
  ";
}
mysqli_close($conn);
?>
