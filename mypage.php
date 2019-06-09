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

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script>

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

                        <div class="col-sm-12" id="con02_sub">
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
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-letter"></i>
                                    </div>
                                </div>
                                <span class="title">신청 관리</span>
                                <span class="content">내가 한 신청, 받은 신청 관리</span>
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

                                <form class="form_write" method="post" action="member_update.php" style="margin-top: 40px;">
                                    <label>
                                        아이디
                                        <input type="text" name="userid" value="<?php echo $_SESSION['userid'];?>" disabled readonly>
                                    </label>

                                    <label>
                                        이름
                                        <input type="text" name="name" value="<?php echo $member['name']; ?>">
                                    </label>
                                    
                                    <label>
                                        학번
                                        <input type="text" name="s_num" value="<?php echo $member['s_num']; ?>">
                                    </label>
                                    
                                    <label>흥미있는 기술 / 공부주제</label>
                                    <input type="text" name="interest1" placeholder="1" value="<?php echo $member['interest1']; ?>" style="display: inline-block; width: 30%;">
                                    <input type="text" name="interest2" placeholder="2" value="<?php echo $member['interest2']; ?>" style="display: inline-block; width: 30%;">
                                    <input type="text" name="interest3" placeholder="3" value="<?php echo $member['interest3']; ?>" style="display: inline-block; width: 30%;">
                
                                    <label>
                                        자기소개
                                        <textarea name="profile"><?php echo $member['profile']; ?></textarea>
                                    </label>

                                    <button type="button" class="form-control btn btn-primary">개인정보 변경</button>
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

                                    <button type="button" class="form-control btn btn-primary">비밀번호 변경</button>
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