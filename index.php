<?php 
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    include "dbconn.php";
    include "setting.php";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!--Designerd by: http://bootstrapthemes.co-->
    <head>
        <meta charset="utf-8">
        <title>즐팀 : 메인 페이지</title>
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
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">

        <div class="culmn">
            <!--Home page style-->

				<?php include "header.php"; ?>

            <!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="home_text">
                                <h1 class="text-white">Let's be <br /> the better DEVELOPER / DESIGNER!</h1>
                            </div>

                            <?php if(!isset($userid)) { ?>
                            <div class="home_btns m-top-40">
                                <a href="signin.php" target="_self" class="btn btn-primary m-top-20">
                                SIGN IN
                                </a>
                                <a href="signup.php" target="_self" class="btn btn-default m-top-20">
                                SIGN UP
                                </a>
                            </div>
                            <?php }?>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="about" class="about roomy-100">
                
                <div class="container">
                    <div class="row">
                        <div class="about_bottom_content">
                       
                        	<div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                	<div class="ab_head">
                                        <div class="ab_head_icon">
                                        	<i class="icofont icofont-question"></i>
                                        </div>
                                    </div>
                                    
                                    	<h5 class="m-top-30">즐팀이란?</h5>
                                    
                                    <div class="separator_small"></div>
                                    <p class="view_content m-top-20">
                                    	입학한지 얼마 되지 않은 신입생 여러분들도 스터디나 공모전을 함께 할 팀을 부담없이 만들 수 있는 공간입니다. <br />
                                        	즐팀의 가입자는 누구나 모집글을 작성하고 모집글에 신청 및 문의(쪽지)를 할 수 있습니다. </p>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-4" >
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-heart"></i>
                                        </div>
                                    </div>
                                    
                                        <h5 class="m-top-30">즐팀만의 장점은?</h5>
                                        
                                    <div class="separator_small"></div>
                                    <p class="view_content m-top-20">
                                                                                    전공 관련 팀만을 만드는 것이 아니므로 과, 동아리 상관없이 교류할 수 있습니다. <br />
                                                                                    교육과정에 없는 전공 분야도 공부함으로써 전공에 대한 시야가 넓어지며 
                                                                                    독학을 통해 스스로 성장하는 법을 익힐 수 있습니다.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-gears"></i>
                                        </div>
                                    </div>
                                    
                                        <h5 class="m-top-30">신청은 어떻게 하는 걸까요?</h5>
                                        
                                    <div class="separator_small"></div>
                                    <p class="view_content m-top-20">
                                    	한 계정당 글 작성과 신청 수를 제한하고 신청 시 신청자의 정보를 포함하여  <br />
                             			모든 학생이 공평하게 기회를 가질 수 있도록 합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off About section -->

            <hr>

            <!--Skill Sections-->
            <section id="skill" class="skill roomy-100">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <div class="skill_bottom_content text-center">
                            <div class="col-md-3 col-sm-6" style="margin-bottom: 50px;">
                                <div class="skill_bottom_item">
                                    <h4 class="statistic-counter">50</h4>
                                    <div class="separator_small"></div>
                                    <h6><em>가입자 수</em></h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6" style="margin-bottom: 50px;">
                                <div class="skill_bottom_item">
                                    <h4 class="statistic-counter">50</h4>
                                    <div class="separator_small"></div>
                                    <h6><em>총 모집글</em></h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="skill_bottom_item">
                                    <h4 class="statistic-counter">45</h4>
                                    <div class="separator_small"></div>
                                    <h6><em>총 신청수</em></h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="skill_bottom_item">
                                    <h4 class="statistic-counter">95</h4>
                                    <div class="separator_small"></div>
                                    <h6><em>모임 수</em></h6>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Skill section -->
            
            <hr style="margin-bottom: 0;">

            <!--Pricing Section-->
            <section id="pricing" class="pricing lightbg">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing roomy-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>RECENT BOARD</h2>
                                	<div class="separator_auto"></div>
                                    <p>
                                    	현재 진행중인 스터디 모집 중 가장 최근의 것을 알려드립니다!
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="pricing_item sm-m-top-30">
                                    <div class="pricing_head p-top-20 p-bottom-100 text-center">
                                        <h5 class="text-uppercase">TOP 2</h5>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <p class="view_content text-white">Develop</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-bottom-40" style="padding-top: 60px">
                                        <ul>
                                            <li><i class="fa fa-eye text-primary"></i> 조회수 : 59</li>
                                            <li><i class="fa fa-check text-primary"></i> 신청 : 5 / 3</li>
                                        </ul>
                                        <div class="pricing_btn text-center m-top-40">
                                            <a href="" class="btn btn-primary">글 읽어보기</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-4 -->
                            
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="pricing_item sm-m-top-30">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-20 p-bottom-100 text-center">
                                        <h5 class="text-uppercase">TOP 1&nbsp;&nbsp;<i class="icofont icofont-crown" style="color: #efdc05;"></i></h5>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <p class="view_content text-white">Design</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-bottom-40" style="padding-top: 60px">
                                        <ul>
                                            <li><i class="fa fa-eye text-primary"></i> 조회수 : 59</li>
                                            <li><i class="fa fa-check text-primary"></i> 신청 : 5 / 3</li>
                                        </ul>
                                        <div class="pricing_btn text-center m-top-40">
                                            <a href="" class="btn btn-primary">글 읽어보기</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4 col-sm-12">
                                <div class="pricing_item sm-m-top-30">
                                    <div class="pricing_head p-top-20 p-bottom-100 text-center">
                                        <h5 class="text-uppercase">TOP 3</h5>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <p class="view_content text-white">etc</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-bottom-40" style="padding-top: 60px">
                                        <ul>
                                            <li><i class="fa fa-eye text-primary"></i> 조회수 : 59</li>
                                            <li><i class="fa fa-check text-primary"></i> 신청 : 5 / 3</li>
                                        </ul>
                                        <div class="pricing_btn text-center m-top-40">
                                            <a href="" class="btn btn-primary">글 읽어보기</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-4 -->

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Pricing section -->
            
            
            <?php include "footer.php"; ?>

        </div>

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
