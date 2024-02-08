<!--Author: Template Stock
Author URL: http://templatestock.co
-->

<!DOCTYPE html>
<html>

<head>
    <title>Ivan Maksimov Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1200);
        });
    });
    </script>
</head>

<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') { // Check if the User coming from a request
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // simple validation if you insert an email
  $msg = filter_var($_POST["msg"], FILTER_SANITIZE_STRING); // simple validation if you insert a string

  // mail function in php look like this  (mail(To, subject, Message, Headers, Parameters))
  $headers = "FROM : " . $email . "\r\n";
  $myEmail = "ivan_kratovo@hotmail.com";
  if (mail($myEmail, "message coming from the contact form", $msg, $headers)) {
    echo "sent";
  } else {
    echo "error";
  }
}
?>
    <div class="header" id="head">
        <div class="container">
            <div class="header-top">
                <div class="logo">

                </div>
                <div class="top-menu">
                    <span class="menu"> </span>
                    <ul>
                        <nav class="cl-effect-5">
                            <li><a class="active" href="index.html"><span data-hover="Home">home</span></a></li>
                            <li><a href="#about" class="scroll"><span data-hover="about">about</span></a></li>
                            <li><a href="#work" class="scroll"><span data-hover="work"><span>work</span></a></li>

                            <li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
                        </nav>
                    </ul>
                </div>
                <!--script-nav-->
                <script>
                $("span.menu").click(function() {
                    $(".top-menu ul").slideToggle("slow", function() {});
                });
                </script>
                <div class="clearfix"></div>
            </div>
            <div class="index-banner">
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner_center">
                                    <h1>hello world,</h1>
                                    <h2>i am <span>full stack web developer</span></h2>
                                    <h2>from Austria</h2>
                                </div>
                            </div>
                        </article>
                        <article style="position: relative; width: 100%; opacity: 1;">
                            <div class="banner-wrap">
                                <div class="banner_center">
                                    <h1>Ivan Maksimov</h1>
                                    <h2>student at <span>Codefactory</span></h2>
                                    <h2>Vienna</h2>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner_center">
                                    <h1>Here you can</h1>
                                    <h2>find all <span>about</span></h2>
                                    <h2>me</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                $('.example1').wmuSlider();
                </script>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="about-section" id="about" id="about">
            <div class="container">
                <div class="about-header">
                    <h3>about</h3>
                    <div class="about-imag">
                        <img src="images/ivan.jpg" alt="" />
                    </div>
                    <div class="about-text">
                        <p>I am a Full stack developer</p>
                        <p>Fast load times and lag free interaction, my highest priority.</p>
                        <p>My layouts will work on any device, big or small.</p>
                        <p>Strong preference for easy to use, intuitive UX/UI.</p>
                        <p>Websites don't have to be static, I love making pages come to life.</p>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-sectiongrids">
                    <div class="col-md-6 about-leftgrid">
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>HTML</h4>
                                </div>
                                <div class="percentage">
                                    <p>99%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:99%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>CSS</h4>
                                </div>
                                <div class="percentage">
                                    <p>95%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:95%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Logo Design</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>JavaScript</h4>
                                </div>
                                <div class="percentage">
                                    <p>87%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:87%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Mongodb</h4>
                                </div>
                                <div class="percentage">
                                    <p>85%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:85%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Postman</h4>
                                </div>
                                <div class="percentage">
                                    <p>80%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:80%"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 about-rightgrid">
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Angular</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>PHP</h4>
                                </div>
                                <div class="percentage">
                                    <p>96%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:96%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>SQL</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>AJAX & API</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>React</h4>
                                </div>
                                <div class="percentage">
                                    <p>80%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:80%"> </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="arrow1">
                    <a href="#work" class="scroll"><img src="images/arrow1.png" alt="" /></a>
                </div>
            </div>
        </div>
        <!-- about-section-ends -->
        <div class="works-section" id="work" id="work">
            <div class="works-header">
                <h3>projects</h3>
                <p>Here are some of the projects i did as student at codefactory</p>
            </div>
            <div class="portfolio-section-bottom-row" id="portfolio">
                <div class="container">

                    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true // 100% fit in a container
                        });
                    });
                    </script>
                    <link rel="stylesheet" href="css/swipebox.css">
                    <script src="js/jquery.swipebox.min.js"></script>
                    <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                    </script>
                    <!-- Portfolio Ends Here -->
                    <div class="sap_tabs">
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>

                                <div class="clearfix"></div>
                            </ul>
                            <div id="portfoliolist">
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="http://maksimov.codefactory.live/carShopBasic/"
                                                    title="Simple Car shop" target="_blank">
                                                    <img src="images/carshop.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="http://maksimov.codefactory.live/game/"
                                                    title="Simple Game Dices" target="_blank">
                                                    <img src="images/gamejs.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/food-blog/" title="Food blog" target="_blank">
                                                    <img src="images/foodblog.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/weekly-planner/" title="Image Title"
                                                    target="_blank">
                                                    <img src="images/planner.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="http://maksimov.codefactory.live/pet-adoption/"
                                                    title="Pet Adoption" target="_blank">
                                                    <img src="images/petadopt.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="http://maksimov.codefactory.live/pet-shop/" title="Pet Shop"
                                                    target="_blank">
                                                    <img src="images/petshop.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="#" title="Restaurant with shoping cart function"
                                                    target="_blank">
                                                    <img src="images/ristorante.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/free-practice--shopping-cart-main/index.html"
                                                    title="Shoping Cart Functionality" target="_blank">
                                                    <img src="images/cart.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/world-music-festival/" title="World music festival"
                                                    target="_blank">
                                                    <img src="images/music.png" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/auto-text-effects-anim/index.html"
                                                    title="Auto text animation" target="_blank">
                                                    <img src="/projects/auto-text-effects-anim/Screenshot_20230123_020622.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/bg-img-scroll-effect/index.html"
                                                    title="background image scroll effect" target="_blank">
                                                    <img src="/projects/bg-img-scroll-effect/Screenshot_20230123_020951.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/blured-background-popup/index.html"
                                                    title="Blured background popup" target="_blank">
                                                    <img src="/projects/blured-background-popup/Screenshot_20230123_021250.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/button-ripple-efect/index.html"
                                                    title="Button ripple effect" target="_blank">
                                                    <img src="/projects/button-ripple-efect/Screenshot_20230123_022057.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/countdown/index.html" title="Countdown"
                                                    target="_blank">
                                                    <img src="/projects/countdown/Screenshot_20230123_022408.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/dark-mode-togle/index.html" title="Dark mode togle"
                                                    target="_blank">
                                                    <img src="/projects/dark-mode-togle/Screenshot_20230123_022546.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/digital clock/index.html" title="Digital clock"
                                                    target="_blank">
                                                    <img src="/projects/digital clock/Screenshot_20230123_023753.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/digital-color-generator/index.html"
                                                    title="Digital color generator" target="_blank">
                                                    <img src="/projects/digital-color-generator/Screenshot_20230123_023444.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/drum-kits/index.html" title="Drum kits"
                                                    target="_blank">
                                                    <img src="/projects/drum-kits/Screenshot_20230123_024021.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/emoji-ratings/index.html" title="Emoji ratings"
                                                    target="_blank">
                                                    <img src="/projects/emoji-ratings/Screenshot_20230123_024240.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/Heart-trail-Animation/index.html"
                                                    title="Heart trail animation" target="_blank">
                                                    <img src="/projects/Heart-trail-Animation/Screenshot_20230123_010126.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/imsge-slider/index.html" title="Image slider"
                                                    target="_blank">
                                                    <img src="/projects/imsge-slider/Screenshot_20230123_024725.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/multyplyapp/index.html" title="Multyplyapp"
                                                    target="_blank">
                                                    <img src="/projects/multyplyapp/Screenshot_20230123_025102.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/random-photos/index.html" title="Random photos"
                                                    target="_blank">
                                                    <img src="/projects/random-photos/Screenshot_20230123_025507.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/real-time-charater-counter/index.html"
                                                    title="Real time charater counter" target="_blank">
                                                    <img src="/projects/real-time-charater-counter/Screenshot_20230123_030157.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/rotating-image-gallery/index.html"
                                                    title="Rotating image galery" target="_blank">
                                                    <img src="/projects/rotating-image-gallery/Screenshot_20230123_030421.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/Sidebar-project/index.html" title="Sidebar project"
                                                    target="_blank">
                                                    <img src="/projects/Sidebar-project/Screenshot_20230123_020043.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/sticky-navbar/index.html" title="Sticky navbar"
                                                    target="_blank">
                                                    <img src="/projects/sticky-navbar/Screenshot_20230123_031038.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/tabs-section/index.html" title="Tabs section"
                                                    target="_blank">
                                                    <img src="/projects/tabs-section/Screenshot_20230123_031302.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="./projects/video-trailer-popup/" title="Video trailer popup"
                                                    target="_blank">
                                                    <img src="/projects/video-trailer-popup/Screenshot_20230123_031556.png"
                                                        class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="arrow">
                            <a href="#services" class="scroll"><img src="images/arrow.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio-section-ends -->


        </div>
        <div class="footer-section" id="contact" id="contact">
            <div class="container">
                <div class="contact-header">
                    <h3> contact</h3>

                </div>
                <div class="social-icon">
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <a href="#"><i class="icon3"></i></a>
                    <a href="#"><i class="icon4"></i></a>
                    <a href="#"><i class="icon5"></i></a>
                    <a href="#"><i class="icon6"></i></a>
                    <a href="#"><i class="icon7"></i></a>
                    <a href="#"><i class="icon8"></i></a>
                </div>

                <div class="contact">
                    <form method="post" action="https://formsubmit.co/maksimov.ivan@hotmail.com">
                        <div class="col-md-4 contactgrid">
                            <input type="text" name="name" class="text" value=" name" required
                                onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
                        </div>
                        <div class="col-md-4 contactgrid">
                            <input type="email" name="email" required class="text" value="email"
                                onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
                        </div>
                        <div class="col-md-4 contactgrid">
                            <input type="text" class="text" value="phone" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'phone';}">
                        </div>
                        <div class="col-md-8 contactgrid1">
                            <textarea onfocus="if(this.value == 'Your Message') this.value='';"
                                onblur="if(this.value == '') this.value='Your Message';">Your Message</textarea>
                        </div>
                        <div class="col-md-4  contactgrid2">
                            <input type="submit" value="send message">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="footer-bottom">

                    <p>&copy; 2022 Ivan Maksimov . All rights Reserved</p>

                </div>
                <script type="text/javascript">
                $(document).ready(function() {
                    /*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/

                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });
                </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            </div>

        </div>
    </div>
    <script src="script.js"></script>

</body>

</html>