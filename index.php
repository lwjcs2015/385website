<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>385班级网站</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="assets/revolution_slider/rs-plugin/css/settings.css" media="screen">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Flat<span>Lab</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">首页</a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">班级概况 <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?job=about">班级介绍</a></li>
                                <li><a href="index.php?job=action&thread=classmaster">班主任介绍</a></li>
                                <li><a href="index.php?job=action&thread=teacher">任课老师介绍</a></li>
                                <li><a href="index.php?job=action&thread=classtalk">班主任致辞</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?job=news">班级新闻</a></li>
                        <li><a href="index.php?job=plan">本周工作计划</a></li>
                        <li><a href="index.php?job=classfc">班级风采</a></li>
                        <li><a href="index.php?job=contact">联系我们</a></li>
                        <li><a href="index.php?job=usercenter">用户中心</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
   
   <?php
     $job=$_GET["job"];
	 $thread=$_GET["thread"];
     switch ($job)
	 {
		 case "about":
		   if ($thread==""){include "template/about/index.html";}
		   if ($thread=="classmaster"){include "template/about/classmaster.html";}
		   if ($thread=="teacher"){include "template/about/teacher.html";}
		   if ($thread=="classtalk"){include "template/about/teacher.html";}
		   break;
		 case "news":
		   include "template/news.html";
		   break;
		 case "plan":
		   include "template/plan.html";
		   break;
		 case "classfc":
		   include "template/classfc.html";
	}
   ?>
    
     <!--container end-->

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                <address>
                    <p>友情链接</p>
                    <a href="http://www.wcyz.com/"><p>望城一中</p></a>
                    </address>
                </div>
                <div class="col-lg-5 col-sm-5">
                
                <h1>&nbsp;</h1>
                    <address>
                        <p>Powered By 385</p>
                        <p>技术支持:刘文杰</p>
                    <p>联系电话:13787319525</p>
                        <p>Email: <a href="javascript:;">13787319525@163.com</a></p>
                    </address>
                    <p>本站前端采用Html5+Bootstrap.</p> 
                    <p>为保证最佳浏览效果，请尽量不要使用IE浏览器.</p>
                </div>
                <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                  <h1>分享本站</h1>
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-skype"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>

    <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <script src="js/revulation-slide.js"></script>


  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();



  </script>

  </body>
</html>
