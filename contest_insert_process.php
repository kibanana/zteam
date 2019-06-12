<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";
?>

<?php
$regist_day = date("Y-m-d");
$str_regist_day = strtotime($regist_day);
$str_write_end_day_day = strtotime($write_end_day);
$str_modify_end_day = strtotime($modify_end_day);

if($write_end_day > $str_regist_day) {
    echo("
        <script>
        window.alert('신청 마감일은 오늘부터여야 합니다!');
        location.href = 'contest_list.php?num=$num&page=$page&kind=$kind';
        </script>
    ");
    exit;
}

if($modify_end_day > $str_regist_day) {
    echo("
        <script>
        window.alert('신청 마감일은 오늘부터여야 합니다!');
        location.href = 'contest_list.php?num=$num&page=$page&kind=$kind';
        </script>
    ");
    exit;
}

if($mode=="modify") {
    if($kind=="develop"){
        $modify_sql="UPDATE contest_develop SET topic='$modify_topic', part='$modify_part', title='$modify_title', content='$modify_content', want_num='$modify_want_num', end_day='$modify_end_day' WHERE num='$num'";
    } else if($kind=="design"){
        $modify_sql="UPDATE contest_design SET topic='$modify_topic', part='$modify_part', title='$modify_title', content='$modify_content', want_num='$modify_want_num', end_day='$modify_end_day' WHERE num='$num'";
    } else if($kind=="etc"){
        $modify_sql="UPDATE contest_etc SET topic='$modify_topic', part='$modify_part', title='$modify_title', content='$modify_content', want_num='$modify_want_num', end_day='$modify_end_day' WHERE num='$num'";
    } else if($kind=="idea"){
        $modify_sql="UPDATE contest_idea SET topic='$modify_topic', part='$modify_part', title='$modify_title', content='$modify_content', want_num='$modify_want_num', end_day='$modify_end_day' WHERE num='$num'";
    }
    mysqli_query($conn, $modify_sql);

} else {
    if($kind=="develop"){
        $insert_sql = "INSERT INTO contest_develop (id, name, topic, part, title, content, want_num, apply_num, start_day, end_day, hit) ";
    } else if($kind=="design"){
        $insert_sql = "INSERT INTO contest_design (id, name, topic, part, title, content, want_num, apply_num, start_day, end_day, hit) ";
    } else if($kind=="etc"){
        $insert_sql = "INSERT INTO contest_etc (id, name, topic, part, title, content, want_num, apply_num, start_day, end_day, hit) ";
    } else if($kind=="idea"){
        $insert_sql = "INSERT INTO contest_idea (id, name, topic, part, title, content, want_num, apply_num, start_day, end_day, hit) ";
    }

    $insert_sql .= "VALUES('$userid', '$username', '$write_topic', '$write_part', '$write_title', '$write_content', '$write_want_num', 0, '$regist_day', '$write_end_day', 0)";
    mysqli_query($conn, $insert_sql);
    
    $list_result = mysqli_query($conn, "SELECT * FROM member WHERE id='$userid'");
    $list_row = mysqli_fetch_array($list_result);
    $list_num = $list_row[list_num];
    $list_num = $list_num + 1;
    
    $list_sql = "UPDATE member SET list_num='$list_num' WHERE id='$userid'";
    mysqli_query($conn, $list_sql);


    $add_result = mysqli_query($conn, "SELECT c_list FROM counting");
    $add_row = mysqli_fetch_array($add_result);
    $add_num = $add_row[0];
    $add_num = $add_num + 1;

    $add_sql = "UPDATE counting SET c_list='$add_num'";
    mysqli_query($conn, $add_sql);


    // recent table에 insert
    $recent_insert_result = mysqli_query($conn, "INSERT INTO `recent`(`big`, `kind`, `list_num`) VALUES ('$big', '$kind', '$num')");
    
    // recent table 레코드 개수 - 3개 아래면 삭제하지 않기 위함
    $result_num = mysqli_query($conn, "SELECT * FROM recent");
    $num = mysqli_num_rows($result_num);

    if($num > 3) { // 3개 이상이면 가장 오래된 거 하나는 삭제함
        $recent_min_num_result =  mysqli_query($conn, "SELECT MIN(num) FROM recent");
        $min = $recent_min_num_result[0];
        $recent_insert_result = mysqli_query($conn, "DELETE FROM `recent` WHERE num=$min");
    }

}

mysqli_close($conn);

echo "
    <script>
    location.href = 'contest_list.php?num=$num&page=$page&kind=$kind';
    </script>
";
?>