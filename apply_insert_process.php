<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";
?>

<?php
    $regist_day = date("Y-m-d");
    
   if($big=="study"){
        if($kind=="develop"){
            $apply_sql = "INSERT INTO `apply_study_develop`(`num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `portfolio`, `want`, `apply_chk`) "; 
        } else if($kind=="design"){
            $apply_sql = "INSERT INTO `apply_study_design`(`num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `portfolio`, `want`, `apply_chk`) "; 
        } else if($kind=="etc"){
            $apply_sql = "INSERT INTO `apply_study_etc`(`num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `portfolio`, `want`, `apply_chk`) "; 
        }  
        $apply_sql .= "
        VALUES ('$num_recv', '$id_apply', '$id_recv', '$name_apply', '$name_recv', '$topic', '$title', '$regist_day', '$portfolio', '$want', '0')
        ";
   } 

   if($big=="contest"){
        if($kind=="develop"){
            $apply_sql = "INSERT INTO `apply_contest_develop`(`num`, `num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `part`, `portfolio`, `want`, `apply_chk`) ";
        } else if($kind=="design"){
            $apply_sql = "INSERT INTO `apply_contest_design`(`num`, `num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `part`, `portfolio`, `want`, `apply_chk`) ";
        } else if($kind=="etc"){
            $apply_sql = "INSERT INTO `apply_contest_etc`(`num`, `num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `part`, `portfolio`, `want`, `apply_chk`) ";
        } else if($kind=="idea"){
            $apply_sql = "INSERT INTO `apply_contest_idea`(`num`, `num_recv`, `id_apply`, `id_recv`, `name_apply`, `name_recv`, `topic`, `title`, `apply_day`, `part`, `portfolio`, `want`, `apply_chk`) ";
        }
        $apply_sql .= "
        VALUES ('$num_recv', '$id_apply', '$id_recv', '$name_apply', '$name_recv', '$topic', '$title', '$regist_day', '$part', '$portfolio', '$want', '0')
        ";
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
