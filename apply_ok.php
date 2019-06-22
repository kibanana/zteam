<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

mysqli_query($conn,"UPDATE apply_study_design SET apply_chk=1 WHERE num=$num");


echo
"
<script>
    alert('정보가 변경되었습니다!');
    history.back();
</script>
";
mysqli_close($conn);
?>
