<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";

$sql = mysqli_query($conn, "select * from member where id='$userid'");
$member = mysqli_fetch_array($sql);


?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!--Designerd by: http://bootstrapthemes.co-->
    <head>
        <meta charset="utf-8">
        <title>즐팀 : My Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href=""> <!-- 파비콘 추가 -->

        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/toggle.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script>

        function member_chk(){

            var p_set = document.frm_change;
            
            var name_result = document.getElementById("name_result");
            var num_result = document.getElementById("s_num_result");
            var inters_result = document.getElementById("interest_result");
            var profile_result = document.getElementById("profile_result");  

            alert(name_result.value);
            if(p_set.name.value=="") {
                name_result.innerHTML = "이름을 입력해주세요";
                p_set.name.focus();
            } else if(p_set.s_num.value=="" || !(isNumber(p_set.s_num.value))) {
                name_result.innerHTML = "";
                num_result.innerHTML = "학번을 입력해주세요";
                p_set.s_num.focus();
            } else if(p_set.interest1.value=="") {
                num_result.innerHTML = "";
                inters_result.innerHTML = "흥미 주제들을 입력해주세요";
                p_set.signup_interest1.focus();
            } else if(p_set.interest2.value=="") {
                inters_result.innerHTML = "흥미 주제들을 입력해주세요";
                p_set.interest2.focus();
            } else if(p_set.interest3.value=="") {
                inters_result.innerHTML = "흥미 주제들을 입력해주세요";
                p_set.interest3.focus();
            } else if(p_set.profile.value=="") {
                inters_result.innerHTML = "";
                profile_result.innerHTML = "자기소개를 입력해주세요";
                p_set.profile.focus();
            } else {
                p_set.submit();
            }
        }

            window.onload=startNone;

            function startNone() {
                let start_item1 = document.getElementById('con01_sub');
                let start_item2 = document.getElementById('con02_sub');
                let start_item3 = document.getElementById('con03_sub');
                let start_item4 = document.getElementById('con04_sub');

                start_item1.style.display="none";
                start_item2.style.display="none";
                start_item3.style.display="none";
                start_item4.style.display="none";
            }
            
            function item_chk1() {
                let item1 = document.getElementById('con01_sub');
                if(item1.style.display=="none"){
                    item1.style.display="block";
                } else {
                    item1.style.display="none";
                }
            }

            function item_chk2() {
                let item2 = document.getElementById('con02_sub');
                if(item2.style.display=="none"){
                    item2.style.display="block";
                } else {
                    item2.style.display="none";
                }
            }

            function item_chk3() {
                let item1 = document.getElementById('con03_sub');
                if(item1.style.display=="none"){
                    item1.style.display="block";
                } else {
                    item1.style.display="none";
                }
            }

            function item_chk4() {
                let item1 = document.getElementById('con04_sub');
                if(item1.style.display=="none"){
                    item1.style.display="block";
                } else {
                    item1.style.display="none";
                }
            }
        </script>

        <script>
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                e.target // newly activated tab
                e.relatedTarget // previous active tab
            })
        </script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
    
        <div class="culmn">

			  <?php include "header.php"; ?>

            <div class="container m-top-100">
                <div class="separator_auto"></div>
                  <div class="col-sm-12">
                      <div class="page_title text-center">
                          <h2>My Page</h2>
                          <div class="separator_auto"></div>
                      </div>
                  </div>

                <div class="col-sm-10 col-sm-offset-1">
                    <ul class="mypage">
                        <div class="col-sm-6" id="con01" style="cursor: pointer;" onClick="item_chk1()">
                        <li class="mypage_item">
                                <div class="ab_head" style="display: block;">                                                                                                  
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-letter"></i>
                                    </div>
                                </div>
                                <span class="title">신청 관리</span>
                                <span class="content">내가 한 신청, 받은 신청 관리</span>
                            </li>
                        </div>

                        <div class="col-sm-12" id="con01_sub">
                        <li class="mypage_subitem">
                                <div class="ab_head" style="display: block;">                                                                                                  
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-letter"></i>
                                    </div>
                                </div>
                                <span class="title">신청 관리</span>
                                <span class="content">내가 한 신청, 받은 신청 관리</span>
                            </li>
                        </div>


                        <div class="col-sm-6" id="con02" style="cursor: pointer;" onClick="item_chk2()">
                            <li class="mypage_item">
                                <div class="ab_head" style="display: block;">
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-alarm"></i>
                                    </div>
                                </div>
                                <span class="title">알림 관리</span>
                                <span class="content">내가 받을 알림 관리</span>
                            </li>
                        </div>
                        <script>
                            var check = $("input[type='checkbox']");
                            check.click(function(){
                              $("p").toggle();
                            });
                        </script>
                        <div class="col-sm-12" id="con02_sub">
                        <li class="mypage_subitem">
                                <div class="ab_head" style="display: block;">                                                                                                
                                </div>
                                <span style="font-size: 22px; font-weight: 600; display: block; margin-bottom: 30px;">알림 관리</span>

                                <div role="tabpanel1">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" style="font-size: 16px;">
                                <li role="presentation" class="active"><a href="#sub1_1" aria-controls="sub1_1" role="tab" data-toggle="tab"><span style="color: #efdc05;">알림 설정 변경</span></a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="sub1_1" style="padding-left: 20%; padding-right: 20%;">

                                <form class="form_write" method="post" action="alarm.php" style="margin-top: 40px;">
                                    <p>내가 신청한 공모전 & 스터디 알람 받기</p>
                                    <label class="switch">
                                      <input type="checkbox" id="chk1" name="chk1" value="1"> 
                                      <span class="slider round"></span>
                                    </label>

                                    <p>자신이 올린 게시글에 신청한 사람 알람 받기</p>
                                    <label class="switch">
                                      <input type="checkbox" id="chk2" name="chk2" value="1"> 
                                      <span class="slider round"></span>
                                    </label>

                                    <p>정원 초과가 되었을 때 알람 받기</p>
                                    <label class="switch">
                                      <input type="checkbox" id="chk3" name="chk3" value="1"> 
                                      <span class="slider round"></span>
                                    </label>

                                <button type="submit" class="form-control btn btn-primary">변경 사항 저장</button>
                                </form>
                            </div>
                        </div>
                            </li>
                        </div>


                        <div class="col-sm-6" id="con03" style="cursor: pointer;" onClick="item_chk3()">
                            <li class="mypage_item">
                                <div class="ab_head" style="display: block;">
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-page"></i>
                                    </div>
                                </div>
                                <span class="title">작성글 관리</span>
                                <span class="content">스터디, 공모전 작성글을 각각의 탭으로 관리</span>
                            </li>
                        </div>

                        <div class="col-sm-12" id="con03_sub">
                        <li class="mypage_subitem">
                                <div class="ab_head" style="display: block;">
                                </div>
                               <span style="font-size: 22px; font-weight: 600; display: block; margin-bottom: 30px;">작성글 관리</span>
                                <div role="tabpanel1">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" style="font-size: 16px;">
                                <li role="presentation" class="active"><a href="#write1" aria-controls="write1" role="tab" data-toggle="tab"><span style="color: #efdc05;">스터디</span></a></li>
                                <li role="presentation"><a href="#write2" aria-controls="write2" role="tab" data-toggle="tab"><span style="color: #efdc05;">공모전</span></a></li>
                            </ul>
                            <div role="tabpanel" class="tab-pane fade in active" id="write1" style="padding-left: 20%; padding-right: 20%;">
                                <form class="form_study" method="post" action="" style="margin-top: 40px;">
                            <?php

                      $result_list = mysqli_query($conn, "SELECT * FROM study_design WHERE id='$userid' ORDER BY id DESC");
                      $result_list2 = mysqli_query($conn, "SELECT * FROM study_develop WHERE id='$userid' ORDER BY id DESC");
                      $result_list3 = mysqli_query($conn, "SELECT * FROM study_etc WHERE id='$userid' ORDER BY id DESC");

                      $scale = 10;
                      $total_record = mysqli_num_rows($result_list)+mysqli_num_rows($result_list2)+mysqli_num_rows($result_list3); //전체 글 수
                      
                      if($total_record % $scale==0)
                      $total_page = $total_record/$scale;
                      else
                      $total_page = floor($total_record/$scale)+1;
                      
                      if(!$page) $page = 1;
                      //페이지 번호($page)가 0일 때 페이지 번호를 1로 초기화
                      
                      //표시할 페이지($page)에 따라 $start 계산 => 각각의 페이지의 시작번호
                      $start = ($page-1) * $scale;
                  ?>
                <div class="col-sm-12 m-top-50">
                <table class="table table-bordered table-hover" style="width: 100%; font-size: 13px;">
                <input type="hidden" name="gb">
                <thead>
                  <tr>
                    <th width="15%">주제</th>
                    <th width="15%">제목</th>
                    <th width="70%">소개</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  for($i = $start; $i < $start+$scale && $i < $total_record; $i++){
                    
                    mysqli_data_seek($result_list, $i); //가져올 레코드로 위치(포인터) 이동
                    $recv_row = mysqli_fetch_array($result_list); //하나의 레코드 가져오기
                    mysqli_data_seek($result_list2, $i); //가져올 레코드로 위치(포인터) 이동
                    $recv_row2 = mysqli_fetch_array($result_list2); //하나의 레코드 가져오기
                    mysqli_data_seek($result_list3, $i); //가져올 레코드로 위치(포인터) 이동
                    $recv_row3 = mysqli_fetch_array($result_list3); //하나의 레코드 가져오기

                    //$study_topic = $recv_row['topic'];
                    $study_topic = $recv_row2['topic'];
                    //$study_topic = $recv_row3['topic'];
                    //$study_title = $recv_row['title'];
                    $study_title = $recv_row2['title'];
                    //$study_title = $recv_row3['title'];
                    //$study_content = $recv_row['content'];
                    $study_content = $recv_row2['content'];
                    //$study_content = $recv_row3['content'];
                ?>

                <tr>
                  <td><?php echo $study_topic ?></td>
                  <td><?php echo $study_title ?></td>
                  <td><?php echo $study_content ?></td>
                </tr>

                <?php
                    } //for문
                ?>
                </tbody>
                </table>
                </div>
            </form>
            </div>
                <div role="tabpanel" class="tab-pane fade in active" id="write2" style="padding-left: 20%; padding-right: 20%;">
                    <form class="form_contest" method="post" action="member_update.php" style="margin-top: 40px;">
                <?php

                  $result_list4 = mysqli_query($conn, "SELECT * FROM contest_design WHERE id='$userid' ORDER BY id DESC");
                  $result_list5 = mysqli_query($conn, "SELECT * FROM contest_develop WHERE id='$userid' ORDER BY id DESC");
                  $result_list6 = mysqli_query($conn, "SELECT * FROM contest_etc WHERE id='$userid' ORDER BY id DESC");

                  $scale2 = 10;
                  $total_record2 = mysqli_num_rows($result_list4)+mysqli_num_rows($result_list5)+mysqli_num_rows($result_list6); //전체 글 수
                  
                  if($total_record2 % $scale==0)
                  $total_page = $total_record2/$scale;
                  else
                  $total_page = floor($total_record2/$scale)+1;
                  
                  if(!$page) $page = 1;
                  //페이지 번호($page)가 0일 때 페이지 번호를 1로 초기화
                  
                  //표시할 페이지($page)에 따라 $start 계산 => 각각의 페이지의 시작번호
                  $start = ($page-1) * $scale;
              ?>
            <div class="col-sm-12 m-top-50">
            <table class="table table-bordered table-hover" style="width: 100%; font-size: 13px;">
            <input type="hidden" name="gb">
            <thead>
              <tr>
                <th width="15%">주제</th>
                <th width="15%">제목</th>
                <th width="70%">소개</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              for($i = $start; $i < $start+$scale && $i < $total_record2; $i++){
                
                mysqli_data_seek($result_list4, $i); //가져올 레코드로 위치(포인터) 이동
                $recv_row4 = mysqli_fetch_array($result_list4); //하나의 레코드 가져오기
                mysqli_data_seek($result_list5, $i); //가져올 레코드로 위치(포인터) 이동
                $recv_row5 = mysqli_fetch_array($result_list5); //하나의 레코드 가져오기
                mysqli_data_seek($result_list6, $i); //가져올 레코드로 위치(포인터) 이동
                $recv_row6 = mysqli_fetch_array($result_list6); //하나의 레코드 가져오기

                //$contest_topic = $recv_row4['topic'];
                $contest_topic = $recv_row5['topic'];
                //$contest_topic = $recv_row6['topic'];
                //$contest_title = $recv_row4['title'];
                $contest_title = $recv_row5['title'];
                //$contest_title = $recv_row6['title'];
                //$contest_content = $recv_row4['content'];
                $contest_content = $recv_row5['content'];
                //$contest_content = $recv_row36['content'];
            ?>

            <tr>
              <td><?php echo $contest_topic ?></td>
              <td><?php echo $contest_title ?></td>
              <td><?php echo $contest_content ?></td>
            </tr>

            <?php
                } //for문
            ?>
            </tbody>
            </table>
            </div>
        </form>
                        </div>
                            </li>
                        </div>


                        <div class="col-sm-6" id="con04" style="cursor: pointer;" onClick="item_chk4()">
                            <li class="mypage_item">
                                <div class="ab_head" style="display: block;">
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-automation"></i>
                                    </div>
                                </div>
                                <span class="title">개인정보 관리</span>
                                <span class="content">개인정보 수정, 비밀번호 변경, 회원 탈퇴</span>
                            </li>
                        </div>

                        <div class="col-sm-12" id="con04_sub">
                        <li class="mypage_subitem">
                        
                        <span style="font-size: 22px; font-weight: 600; display: block; margin-bottom: 30px;">개인정보 관리</span>

                        <div role="tabpanel1">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" style="font-size: 16px;">
                                <li role="presentation" class="active"><a href="#sub1_1" aria-controls="sub1_1" role="tab" data-toggle="tab"><span style="color: #efdc05;">개인정보 변경</span></a></li>
                                <li role="presentation"><a href="#sub1_2" aria-controls="sub1_2" role="tab" data-toggle="tab"><span style="color: #efdc05;">비밀번호 변경</span></a></li>
                                <li role="presentation"><a href="#sub1_3" aria-controls="sub1_3" role="tab" data-toggle="tab"><span style="color: #efdc05;">회원 탈퇴</span></a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="sub1_1" style="padding-left: 20%; padding-right: 20%;">

                                <form class="form_write" method="post" action="member_update.php" name="frm_change" style="margin-top: 40px;">
                                    <label>
                                        아이디
                                        <input type="text" name="userid" value="<?php echo $_SESSION['userid'];?>" disabled readonly>
                                    </label>


                                    <label>
                                        이름
                                        <input type="text" name="name" value="<?php echo $member['name']; ?>">
                                    </label>
                                    <span id="name_result" class="fail"></span>

                                    
                                    <label>
                                        학번
                                        <input type="text" name="s_num" value="<?php echo $member['s_num']; ?>">
                                    </label>
                                    <span id="s_num_result" class="fail"></span>
                                    
                                    <label>
                                        <div>흥미있는 기술 / 공부주제</div>
                                    <input type="text" name="interest1" placeholder="1" value="<?php echo $member['interest1']; ?>" style="display: inline-block; width: 30%;">
                                    <input type="text" name="interest2" placeholder="2" value="<?php echo $member['interest2']; ?>" style="display: inline-block; width: 30%;">
                                    <input type="text" name="interest3" placeholder="3" value="<?php echo $member['interest3']; ?>" style="display: inline-block; width: 30%;">
                                </label>
                                        <span id="interest_result" class="fail"></span>
                                    <label>
                                        자기소개
                                        <textarea name="profile"><?php echo $member['profile']; ?></textarea>
                                    </label>
                                        <span id="profile_result" class="fail"></span>
                                    <button type="button" class="form-control btn btn-primary" onClick="member_chk()">개인정보 변경</button>
                                </form> 

                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="sub1_2" style="padding-left: 20%; padding-right: 20%;">

                                <form class="form_write" method="post" action="change_pwd.php" style="margin-top: 40px;">
                                    <label>
                                    기존 비밀번호
                                        <input type="password" ame="pw" placeholder="기존 비밀번호" value="" >
                                    </label>

                                    <label>
                                    새로운 비밀번호
                                        <input type="password" name="pw1" placeholder="새로운 비밀번호" value="">
                                    </label>

                                    <label>
                                    새로운 비밀번호 확인
                                        <input type="password" name="pw2" placeholder="새로운 비밀번호 확인" value="">
                                    </label>

                                    <button type="submit" class="form-control btn btn-primary">비밀번호 변경</button>
                                </form>

                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="sub1_3" style="padding-left: 20%; padding-right: 20%;">

                                <form class="form_write" method="post" action="member_del.php" style="margin-top: 40px;">
                                    <input type="submit" class="form-control btn btn-primary" value="회원 탈퇴" />
                                </form>

                                </div>
                            </div>

                        </div>

                        </li>
                    </ul>
                </div>
            </div>

        </div> <!-- culmn -->  

                          
<!-- Insert Modal -->
<div class="modal fade" id="modal_note_write" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        
    <!-- Modal content-->
        <div class="modal-content">

        <div class="modal-header">
            <h6 class="modal-title" style="display: inline-block;">쪽지</h6>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> <!-- modal header -->

        <div class="modal-body" style="padding: 50px;">
                <form name="frm_note_write" class="form_write" method="post" action="note_write_process.php">
                    <label>
                        보내는 사람
                    <input type="text" class="form-control" name="write_send" value="<?php echo "$userid" ?>" (<?php echo $username ?>) readonly>
                    </label>

                    <label>
                        받는 사람
                    <input type="text" class="form-control" name="write_recv" >
                    </label>

                    <span id="note_write_double_result" class="fail"></span>
                    
                    <div class="textarea_counter">
                        <label>
                            쪽지 내용
                        <textarea id="textarea" name="write_content" class="note_content" maxlength="70" onkeyup="lengCounter()"></textarea>
                        
                        </label>
                        <span id="note_write_content_result" class="fail"></span>
                    </div>

        </div> <!-- modal body -->

        <div class="modal-footer">
            <div class="col-sm-3 col-sm-offset-9">
                <button onClick="note_write_chk()" class="form-control btn btn-primary">보내기</button>
            </form>
            </div>
        </div> <!-- modal footer -->

    </div> <!-- modal content -->

    </div> <!-- modal-dialog -->
</div> <!-- modal -->

        <!-- JS includes -->
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>