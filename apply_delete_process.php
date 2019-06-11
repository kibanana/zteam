<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";
?>

<script>
let a = confirm("정말 삭제하시겠습니까?")
if (!a) {
    histroy.go(-1);
    return ;
}
</script>

<?php
    $regist_day = date("Y-m-d");

   if($big=="study"){
        if($kind=="develop"){
            $apply_sql = "DELETE FROM `apply_study_develop` WHERE num=$num AND id_apply=$userid";
        } else if($kind=="design"){
            $apply_sql = "DELETE FROM `apply_study_design` WHERE num=$num AND id_apply=$userid";
        } else if($kind=="etc"){
            $apply_sql = "DELETE FROM `apply_study_etc` WHERE num=$num AND id_apply=$userid";
        }  
   } 

   if($big=="contest"){
        if($kind=="develop"){
            $apply_sql = "DELETE FROM `apply_contest_develop` WHERE num=$num AND id_apply=$userid";
        } else if($kind=="design"){
            $apply_sql = "DELETE FROM `apply_contest_design` WHERE num=$num AND id_apply=$userid";
        } else if($kind=="etc"){
            $apply_sql = "DELETE FROM `apply_contest_etc` WHERE num=$num AND id_apply=$userid";
        } else if($kind=="idea"){
            $apply_sql = "DELETE FROM `apply_contest_idea` WHERE num=$num AND id_apply=$userid";
        }
   }

   mysqli_query($conn, $apply_sql);

   if($big=="study") {
        echo "
        <script>
        location.href = 'study_list.php?num=$num&page=$page&kind=$kind';
        </script>
        ";
    } else if($big=="contest"){
        echo "
        <script>
        location.href = 'contest_list.php?num=$num&page=$page&kind=$kind';
        </script>
        ";
    }
   
   ?>