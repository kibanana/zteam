<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

$sql = mysqli_query($conn, "SELECT * FROM member WHERE id='$userid'");
$member = mysqli_fetch_array($sql);
?>

<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

$sql = mysqli_query($conn, "SELECT * FROM member WHERE id='$userid'");
$member = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=”UTF-8″>
<title>Title of the document</title>
    <style>
        body {
            color: #555;
            background: #eeeeee;
            margin:0;
            padding: 0;
            box-sizing: border-box;}

        h1 {
            padding: 50px 0;
            font-weight: 400;
            text-align: center;}

        p {
            margin: 0 0 20px;
            line-height: 1.5;}

        .main {
            min-width: 320px;
            max-width: 800px;
            padding: 50px;
            margin: 0 auto;
            background: #ffffff;}

        section {
            display: none;
            padding: 20px 0 0;
            border-top: 1px solid #ddd;}

        /*라디오버튼 숨김*/
          input[type=radio]{
              display: none;}

        label {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 15px 25px;
            font-weight: 600;
            text-align: center;
            color: #bbb;
            border: 1px solid transparent;}

        label:hover {
            color: #2e9cdf;
            cursor: pointer;}

        /*input 클릭시, label 스타일*/
        input:checked + label {
              color: #555;
              border: 1px solid #ddd;
              border-top: 2px solid #2e9cdf;
              border-bottom: 1px solid #ffffff;}

        #tab8:checked ~ #content8,
        #tab9:checked ~ #content9{
            display: block;}

		table.type09 {
		    border-collapse: collapse;
		    text-align: left;
		    line-height: 1.5;

		}
		table.type09 thead th {
		    padding: 10px;
		    font-weight: bold;
		    vertical-align: top;
		    color: #369;
		    border-bottom: 3px solid #036;
		}
		table.type09 tbody th {
		    width: 150px;
		    padding: 10px;
		    font-weight: bold;
		    vertical-align: top;
		    border-bottom: 1px solid #ccc;
		    background: #f3f6f7;
		}
		table.type09 td {
		    width: 350px;
		    padding: 10px;
		    vertical-align: top;
		    border-bottom: 1px solid #ccc;
		}
    </style>
</head>

<body>
	<?php
                    $result_list = mysqli_query($conn, "SELECT num, id_recv, topic, title, apply_chk from apply_study_design where id_apply='$userid'
                                                        UNION
                                                        SELECT num, id_recv, topic, title, apply_chk from apply_study_develop where id_apply='$userid'
                                                        UNION
                                                        SELECT num, id_recv, topic, title, apply_chk from apply_study_etc where id_apply='$userid'");
                    $scale = 10;
                    $total_record = mysqli_num_rows($result_list); //전체 글 수

                    $result_list2 = mysqli_query($conn, "SELECT num, id_recv, topic, title, apply_chk from apply_contest_design where id_apply='$userid'
                                                        UNION
                                                        SELECT num, id_recv, topic, title, apply_chk from apply_contest_develop where id_apply='$userid'
                                                        UNION
                                                        SELECT num, id_recv, topic, title, apply_chk from apply_contest_etc where id_apply='$userid'
                                                        UNION
                                                        SELECT num, id_recv, topic, title, apply_chk from apply_contest_idea where id_apply='$userid'");
                    $scale2 = 10;
                    $total_record2 = mysqli_num_rows($result_list2); //전체 글 수

                    //study_develop
                      if($total_record % $scale==0)
                      $total_page = $total_record/$scale;
                      else
                      $total_page = floor($total_record/$scale)+1;

                      if(!$page) $page = 1;

                      $start2 = ($page2-1) * $scale2;

                      if($total_record2 % $scale2==0)
                      $total_page2 = $total_record2/$scale2;
                      else
                      $total_page2 = floor($total_record2/$scale2)+1;

                      if(!$page2) $page2 = 1;

                      $start2 = ($page2-1) * $scale2;
                  ?>

<div>
	<input id="tab8" type="radio" name="tabs" checked> <!--디폴트 메뉴-->
    <label for="tab8">스터디</label>

    <input id="tab9" type="radio" name="tabs">
    <label for="tab9">공모전</label>

    <section id="content8">
<form action="list_del.php" method="post" name="f1">
<div class="col-sm-12 m-top-50">
    <table  class="type09" style="width: 100%; font-size: 13px;">
     <input type="hidden" name="gb">
    <thead>
      <tr>
        <th width="5%"></th>
        <th width="20%">신청한 사람</th>
        <th width="10%">주제</th>
        <th width="35%">내용</th>
        <th width="10%">신청 확인</th>
      </tr>
    </thead>
    <tbody>
    <?php
      for($i = $start; $i < $start+$scale && $i < $total_record; $i++){
        mysqli_data_seek($result_list, $i); //가져올 레코드로 위치(포인터) 이동
        $study = mysqli_fetch_array($result_list); //하나의 레코드 가져오기
        $s_num = $study['num'];
        $s_topic = $study['topic'];
        $s_title = $study['title'];
        $s_idrecv = $study['id_recv'];
        $s_apply_chk = $study['apply_chk'];

        if($s_apply_chk=='0') {
          $s_apply_chk='□';
        }else{
          $s_apply_chk = '■';
        }
    ?>
    <tr>
      <td><?php echo $s_num ?></td>
      <td><?php echo $s_idrecv ?></td>
      <td><?php echo $s_topic ?></td>
      <td><?php echo $s_title ?></td>
      <td><?php echo $s_apply_chk ?></td>
    </tr>


    <?php
        } //for문
    ?>
    </tbody>
    </table>
</div>
</form>
    </section>

    <section id="content9">
<form action="list_del.php" method="post" name="f1">
<div class="col-sm-12 m-top-50">
    <table  class="type09" style="width: 100%; font-size: 13px;">
     <input type="hidden" name="gb">
    <thead>
      <tr>
        <th width="5%"></th>
        <th width="20%">신청한 사람</th>
        <th width="10%">주제</th>
        <th width="35%">내용</th>
        <th width="10%">신청 확인</th>
      </tr>
    </thead>
    <tbody>
    <?php
      for($i2 = $start2; $i2 < $start2+$scale2 && $i2 < $total_record2; $i2++){
        mysqli_data_seek($result_list2, $i2); //가져올 레코드로 위치(포인터) 이동
        $contest = mysqli_fetch_array($result_list2); //하나의 레코드 가져오기
        $c_num = $contest['num'];
        $c_topic = $contest['topic'];
        $c_title = $contest['title'];
        $c_idrecv = $contest['id_recv'];
        $c_apply_chk = $contest['apply_chk'];

        if($c_apply_chk=='0') {
          $c_apply_chk='□';
        }else{
          $c_apply_chk = '■';
        }
    ?>
    <tr>
      <td><?php echo $c_num ?></td>
      <td><?php echo $c_idrecv ?></td>
      <td><?php echo $c_topic ?></td>
      <td><?php echo $c_title ?></td>
      <td><?php echo $c_apply_chk ?></td>
    </tr>

    <?php
        } //for문
    ?>
    </tbody>
    </table>
</div>
</form>
    </section>
</body>

</html>
