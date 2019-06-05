<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
include "auth.php";
include "dbconn.php";
include "setting.php";
?>

<?php     

    if($kind=="develop"){
        $v_sql = "SELECT * FROM study_develop where num = $num";
    } else if($kind=="design"){
        $v_sql = "SELECT * FROM study_design where num = $num";
    } else if($kind=="etc"){
        $v_sql = "SELECT * FROM study_etc where num = $num";
    }

    $v_result = mysqli_query($conn, $v_sql);
    $row = mysqli_fetch_array($v_result);
    
    $item_num = $row[num];
    $item_id = $row[id];
    $item_name = $row[name];
    $item_topic = str_replace(" ", "&nbsp;", $row[topic]);
    $item_title = $row[title];
    
    $item_content = $row[content];
    $item_content_ori = $item_content;
    
    $item_content = str_replace(" ", "&nbsp;", $item_content);
    $item_content = str_replace("\n", "<br>", $item_content);
    
    $item_want_num = $row[want_num];
    $item_apply_num = $row[apply_num];
    
    $item_start_day = $row[start_day];
    $item_start_day = substr($item_start_day, 0, 10);
    $item_end_day = $row[end_day];
    $item_end_day = substr($item_end_day, 0, 10);
    
    
    $item_hit = $row[hit] + 1;
    
    if($kind=="develop"){
        $hit_sql = "update study_develop set hit=$item_hit where num=$num";
    } else if($kind=="design"){
        $hit_sql = "update study_design set hit=$item_hit where num=$num";
    } else if($kind=="etc"){
        $hit_sql = "update study_etc set hit=$item_hit where num=$num";
    }
    
    mysqli_query($hit_sql);
    
    ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!--Designerd by: http://bootstrapthemes.co-->
    <head>
        <meta charset="utf-8">
        <title><?php echo "즐팀 스터디: $item_title"; ?></title>
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
        function study_modify_chk() {
        var p_set = document.frm_study_modify;
        
        var double_result = document.getElementById("study_modify_double_result");
        var topic_result = document.getElementById("study_modify_topic_result");
        var title_result = document.getElementById("study_modify_title_result");
        var content_result = document.getElementById("study_modify_content_result");

        if(p_set.modify_want_num.value=="") {
            double_result.innerHTML = "값을 입력해주세요";
            p_set.modify_want_num.focus();
        } else if(p_set.modify_topic.value=="") {
            double_result.innerHTML = "";
            topic_result.innerHTML = "주제를 입력해주세요";
            p_set.modify_topic.focus();
        } else if(p_set.modify_title.value=="") {
            topic_result.innerHTML = "";
            title_result.innerHTML = "제목을 입력해주세요";
            p_set.modify_title.focus();
        } else if(p_set.modify_content.value=="") {
            title_result.innerHTML = "";
            content_result.innerHTML = "소개를 입력해주세요";
            p_set.modify_content.focus();
        } else {
            p_set.submit();
        }
    	}
        
        function lengCounter() {
			document.getElementById("counter").innerHTML=document.getElementById("textarea").value.length;
        }

        function text_lengCounter() {
			document.getElementById("text_counter").innerHTML=document.getElementById("text").value.length;
        }

        </script>

        <style type="text/css">
            .article_f span {
                display: block;
                font-size: 20px;
            }
            .articlesub_f {
                clear: both;
                height: 3rem;
                border-style: double;
                border-color: #efdc05;
                border-width: 3px 0 3px 0;
                color: #efdc05;
                padding: 10px 25px;
                margin-bottom: 35px;
            }

            @media (max-width: 576px) {
                .articlesub_f {
                    padding: 3px 25px;
                }
            }

            .articlesub_s {
                padding-bottom: 35px;
                margin-bottom: 30px;
            }
            .articlesub_s span.topic {
                color: #efdc05;
                font-weight: 600;
                font-size: 25px;
            }
            .articlesub_s span.title {
                color: black;
                font-weight: 600;
                font-size: 27px;
            }
            .articlesub_s span.content {
                font-size: 20px;
                margin-top: 40px;
            }

            .articlesub_t {
                border-style: solid;
                border-color: #eee;
                border-width: 0 0 0 1.5px;
                color: black;
                padding: 10px 25px;
            }
            .articlesub_t span {
                display: block;
            }
            .articlesub_t span.title {
                color: black;
                font-weight: 600;
                font-size: 17px;
            }
            .articlesub_t span.content {
                color: black;
                font-size: 17px;
                margin-top: 10px;
                margin-bottom: 30px;
                text-align: center;
                letter-spacing: 2px;
            }

            .article_container {
                padding-top: 30px;
                margin-bottom: 50px; 
                border-style: solid;
                border-color: #eee;
                border-width: 1.5px 0 0 0;
            }
        </style>
        
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
    
        <div class="culmn">
            <!--Home page style-->
        <?php include "header.php"; ?>

        <div class="container">
            <div class="row">
    
                <div class="main_featured m-top-100">
                    <!-- 버튼들 -->
                    <div class="col-sm-12 m-top-50">
                        
                	    <div class="col-sm-3 col-xs-3">
                            <div class="buttons">
                                <a href="study_list.php?kind=<?php echo $kind ?>">
                                <button onClick='not_alert()' class='btn btn-primary'>글목록</button>
                                </a>
                            </div>
                        </div>
                        
                        <?php 
                        if($userid==$item_id){
                        ?>
                        
                        <div class="col-sm-2 col-xs-3 col-xs-offset-1">
                            <div class="buttons">
                                <button class='btn btn-change' data-toggle="modal" data-target="#modal_study_modify">수정</button>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-3">
                            <div class="buttons">
                            <a href="study_delete_process.php?num=<?=$item_num?>&page=<?=$page?>&kind=<?=$kind?>">
                            <button onClick='not_alert()' class='btn btn-change'>삭제</button>
                            </a>
                            </div>
                        </div>

                        <?php
                        } else {
                        ?>
                        <div class="col-sm-3">
                            <button type='button' class='btn btn-primary' data-toggle="modal" data-target="#modal_study_apply">신청</button>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
                
                <?php 
                    $timenow = date("Y-m-d");
                    $diff_date = (strtotime($item_end_day) - strtotime($timenow)) / 86400;
                ?>

                <article class="col-sm-12  m-top-50 article_container">
                    <div class="col-sm-9 article_f">
                        <div class="col-sm-12 articlesub_f">
                            <span style="float: left;">
                                No. <?php echo $item_num ?>
                            </span>

                            <span style="float: right;">
                                <i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;<?php echo $item_hit ?>
                            </span>
                        </div>
                        <div class="col-sm-12 articlesub_s">
                        <span>
                            [<?php echo $item_topic ?>]
                        </span>

                        <span class="title">
                            <?php echo $item_title ?>
                            <?php
                            echo "
                            <span class='badge' style='border-radius: 45%; display: inline; padding: 3px 10px; background: #efdc05; color: white; margin: auto 10px;'>D - $diff_date</span>";
                            ?>
                        </span>

                        <span class="content">
                            <?php echo $item_content ?>
                        </span>
                        </div>
                    </div>
                    
                    <div class="col-sm-2 col-sm-offset-1 articlesub_t">
                        <span class="title">Starter : </span>
                        <span class="content" style="font-size: 15px; text-align: left;">
                            <?php echo $item_id ?> (<?php echo $item_name ?>)
                        </span>

                        <span class="title">신청 : </span>
                        <span class="content">
                        <?php echo "$item_apply_num / $item_want_num" ?>
                        </span>

                        <span class="title">신청 기간 : </span>
                        <span class="content" style="line-height: 0.9;">
                        <?php echo "$item_start_day <br> ~ <br> $item_end_day" ?>
                        </span>

                        
                    </div>
                </article>

                    <?php
                        $num_m = $num - 1;
                        $num_p = $num + 1;

                        if($kind=="develop"){
                            $b_sql = "SELECT * FROM study_develop where num = $num_m";
                        } else if($kind=="design"){
                            $b_sql = "SELECT * FROM study_design where num = $num_m";
                        } else if($kind=="etc"){
                            $b_sql = "SELECT * FROM study_etc where num = $num_m";
                        }
                         
                        if($kind=="develop"){
                            $a_sql = "SELECT * FROM study_develop where num = $num_p";
                        } else if($kind=="design"){
                            $a_sql = "SELECT * FROM study_design where num = $num_p";
                        } else if($kind=="etc"){
                            $a_sql = "SELECT * FROM study_etc where num = $num_p";
                        }

                        $b_result = mysqli_query($b_sql, $conn);
                        if(!is_bool($b_result)){
                            $b_result_num = mysqli_num_rows($b_result);
                            if($b_result_num){
                                echo "<a href='study_view.php?num=$num_m&page=$page&kind=$kind' style='color: #efdc05; font-size: 14px; text-decoration: none; float: left;'>";
                                echo "<span><span>&laquo;</span> 이전 글</span></a>";
                            } 
                        }

                        $a_result = mysqli_query($a_sql, $conn);
                        if(!is_bool($a_result)){
                            $a_result_num = mysqli_num_rows($a_result);
                            if($a_result_num){
                                echo "<a href='study_view.php?num=$num_p&page=$page&kind=$kind' style='color: #efdc05; font-size: 14px; text-decoration: none; float: right;'>";
                                echo "<span>다음 글 <span>&raquo;</span></span></a>";
                            } 
                        }
                        
                    ?>
           </article>
        </div>

        </div> <!-- row -->
        </div> <!-- container -->
            <?php include "footer.php"; ?>
        </div> <!-- culmn -->  

                               
        <!-- Insert Modal -->
        <div class="modal fade" id="modal_study_modify" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                
            <!-- Modal content-->
                <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" style="display: inline-block;">Study - Modify</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> <!-- modal header -->

                <div class="modal-body" style="padding: 50px;">
                        <form name="frm_study_modify" class="form_write" method="post" action="study_insert_process.php?num=<?php echo $num ?>&page=<?php echo $page ?>&kind=<?php echo $kind?>&mode=modify">
                            <label>
                            작성자
                            <input type="text" name="modify_author" value="<?php echo "$userid" ?> (<?php echo "$username"?>)" readonly>
                            </label>
                            
                            <label class="short" class="short" style="display: inline-block;">
                        	필요 인원
                            <input type="number" name="modify_want_num" value="<?php echo $item_want_num ?>">
                            </label>
                            
                            <label class="short" style="display: inline-block; margin-left: 20px;">
                        	신청 마감일
                        	<input type="date" class="short" name="modify_end_day" value="<?php echo $item_end_day ?>">
                            </label>
                            
                            <span id="study_write_double_result" class="fail"></span>
                            
                            <label>
                        	스터디 주제
                            <input type="text" name="modify_topic" value="<?php echo $item_topic ?>">
                            </label>
                            <span id="study_modify_topic_result" class="fail"></span>
                        
                            <div class="textarea_counter">
                            <label>
                            	스터디 제목
                            	<input type="text" id="text" name="modify_title" value="<?php echo $item_title ?>" maxlength="50" onkeyup="text_lengCounter()">
                                <span id="ex_counter" class="counter">( <span id="text_counter" class="counter"></span> / 50 )</span>
                                
                                </label>
                                <span id="study_modify_title_result" class="fail"></span>
                            </div>
                            
                            <div class="textarea_counter">
                                <label>
                                    스터디 소개
                                <textarea id="textarea" name="modify_content" class="signup_profile" maxlength="1500" onkeyup="lengCounter()"><?php echo $item_content_ori ?></textarea>
                                
                                <span id="ex_counter" class="counter">( <span id="counter" class="counter"></span> / 1500 )</span>
                                </label>
                                <span id="study_modify_content_result" class="fail"></span>
                            </div>

                </div> <!-- modal body -->

                <div class="modal-footer">
                    <div class="col-sm-3 col-sm-offset-9">
                        <button type="button" onClick="study_modify_chk()" class="form-control btn btn-primary">저장</button>
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