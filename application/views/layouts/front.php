<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Digital Resume::Profile</title>
    <!--css link-->
        <link href="<?php echo base_url() ?>css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/gallery.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/aboutus.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/profile.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/contact.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/resume.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <!--css link END-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'/>
    <script src="<?php echo base_url() ?>js/cufon-yui.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/myriad-pro.cufonfonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/Open_Sans_italic_700.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/Open_Sans_Semibold_italic_600.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/Open_Sans_400.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/cufon-replace.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/cufon-replace-resume1.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/Aller_700.font.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600italic' rel='stylesheet' type='text/css'/>
 </head>
<body>
<header>
    <div id="main_header">
        <div id="logo"><a href="<?php echo base_url();?>index.php/index/index"><img src="<?php echo base_url() ?>images/logo.png" alt="Logo"/></a></div>
        <div id="top_right">
            <div class="top_nav">
                <?php
                $check = 0;
                if($check){
                ?>
                <ul>
                    <li id="msgs"><a href="javascript:void(0);">10</a></li>
                    <li id="spacess"></li>
                    <li><a href="javascript:void(0);" >Jahidur Rahman&nbsp;</a></li>
                    <li class="noline"><a href="#">&nbsp;&nbsp;<img class="top_sp" src="<?php echo base_url() ?>images/oo.png" alt=""/></a></li>
                </ul>
                <?php } else {?>
                <ul>
                    <li><a href="javascript:void(0);">Live Chat</a></li>
                    <li ><a href="javascript:void(0);" class="active">Upgrade</a></li>
                    <li><a href="javascript:void(0);" id="btnSignin">Log In</a></li>
                    <li class="noline"><a href="javascript:void(0);" id="btnSignup">Sign Up</a></li>
                </ul>
                <?php } ?>
            </div><!--top_nav-->
        </div><!--top_right-->
        <nav id="head_nav">
            <div class="main_nav">
                <ul>
                    <li ><a href="<?php echo base_url();?>index.php/index/aboutus" id="last">Help &amp; Support&nbsp;</a></li>
                    <li><a href="#">Blog</a></li>
                    <li ><a href="#">Resume Templates</a></li>
                    <li><a href="<?php echo base_url();?>index.php/index/index" class="active">Home</a></li>
                </ul>
            </div><!--top_nav-->
        </nav><!--head_nav-->
    </div><!--main_header-->
</header><!--header-->

<div class="login_signup" id="signup_form" style="display:none">
    <h2 style="margin: 10px 0px 0px 5px; font-size: 20px; color: white; border-radius: 10px;">Sign Up</h2>
    <div class="main_login" style="margin-top: -45px; background:  url(<?php echo base_url();?>/images/ss_03.jpg) repeat-x;">
        <form class="login_now" style="padding-top: 33px; padding-bottom:33px;">
            <div class="field_login_top" ><span>digitalresume.me/</span><input class="field_login" type="text" placeholder="your name"/></div>
            <input class="field_login" type="text" placeholder="Email"/>
            <input class="field_login" type="text" placeholder="Password"/>
            <input class="field_login" type="text" placeholder="Confirm Password"/>
            <input type="submit"  value="" id="sub_mit_now"/>
            <div class="orr"><img  src="<?php echo base_url() ?>images/orr_03.jpg" alt="OR"/></div>
            <div class="left_soci"><a href="#"><img src="<?php echo base_url() ?>images/sci1.png" alt="fb" /></a></div>
            <div class="right_soci"><a href="#"><img src="<?php echo base_url() ?>images/sci2.jpg" alt="fb" /></a></div>
            <div class="left_soci"><a href="#"><img src="<?php echo base_url() ?>images/sci3.jpg" alt="fb" /></a></div>
            <div class="right_soci"><a href="#"><img src="<?php echo base_url() ?>images/sci4.jpg" alt="fb" /></a></div>
            <div class="center_soci"><a href="#"><img src="<?php echo base_url() ?>images/sci5.jpg" alt="fb" /></a></div>
        </form><!--login_now-->
    </div><!--main_login-->
</div><!--login_signup-->

<div class="login_signup" id="login_form" style="display:none">
    <h2 style="margin: 10px 0px 0px 5px; font-size: 20px; padding: 5px; color: white; border-radius: 10px;">Sign In</h2>
    <div class="main_login" style="margin-top: -45px; background:  url(<?php echo base_url();?>/images/ss_03.jpg) repeat-x;">
        <form class="login_now" style="padding-top: 33px; padding-bottom:33px;">
            <input class="field_login" type="text" placeholder="Email"/>
            <input class="field_login" type="text" placeholder="Password"/>
            <input type="submit" value="" class="sub_mit_now"/>
            <div class="orr"><img  src="<?php echo base_url() ?>images/orr_03.jpg" alt="OR"/></div>
            <div class="left_soci1"><a  href="#"><img src="<?php echo base_url() ?>images/sci1.png" alt="fb" /></a></div>
            <div class="right_soci1"><a  href="#"><img src="<?php echo base_url() ?>images/sci2.jpg" alt="fb" /></a></div>
            <div class="left_soci1"><a  href="#"><img src="<?php echo base_url() ?>images/sci3.jpg" alt="fb" /></a></div>
            <div class="right_soci1"><a  href="#"><img src="<?php echo base_url() ?>images/sci4.jpg" alt="fb" /></a></div>
            <div class="center_soci"><a  href="#"><img src="<?php echo base_url() ?>images/sci5.jpg" alt="fb" /></a></div>
        </form><!--login_now-->
    </div><!--main_login-->
</div><!--login_signup-->

<script type="text/javascript">
    $('#btnSignin').click(function(){
        $.fancybox({
            'content' : $("#login_form").html(),
            'titleShow'  : true,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
            'width'         : 406,
            'height'        : 410,
            'autoDimensions': false,
            'autoSize'      : false
        });
    });

    $('#btnSignup').click(function(){
        $.fancybox({
            'content' : $("#signup_form").html(),
            'titleShow'  : true,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
            'width'         : 420,
            'height'        : 520,
            'autoDimensions': false,
            'autoSize'      : false
        });
    });
</script>

<section id="container">
        <section id="main_blog">
                <?php echo $content_for_layout; ?>
        </section><!--about_us-->
    <footer>
        <section id="features_blog">
            <div id="main_feature_blog">
                <article id="featured_list">
                    <h5 class="title_texts">Features</h5>
                        <ul class="fea_list">
                            <li>Easy Customization</li>
                            <li>Rich Templates</li>
                            <li>Online presence</li>
                        </ul><!--fea_list-->
                    <a href="javascript:void(0);" class="res_cre_button"><img src="<?php echo base_url() ?>images/create_button.png" alt="Create Resume"/></a>
                </article><!--featured_list-->
                <article id="social_link">
                <h5 class="title_texts">Stay In Touch</h5>
                    <ul class="soial_icons">
                        <li><a href="#"><img  src="<?php echo base_url() ?>images/fb.jpg" alt="facebook"/></a></li>
                        <li><a href="#"><img  src="<?php echo base_url() ?>images/tw.jpg" alt="Twitter"/></a></li>
                        <li><a href="#"><img  src="<?php echo base_url() ?>images/gp.jpg" alt="Google+"/></a></li>
                        <li><a href="#"><img  src="<?php echo base_url() ?>images/li.jpg" alt="Link"/></a></li>
                        <li><a href="#"><img  src="<?php echo base_url() ?>images/yt.jpg" alt="Ytube"/></a></li>
                    </ul><!--soial_icons-->
                </article><!--social_link-->
                <section id="email_blog">
                <h5 class="title_texts">Email Newsletter</h5>
                    <p>Subscribe our newsletter to get exclusive free ebooks on how to sucess in interview</p>
                        <form>
                                <input  class="field"type="text"  placeholder="Full Name"/>
                                <input  class="field" type="text"  placeholder="Email Address"/>
                                <input type="submit" value=" " id="submit" />
                         </form>
                </section><!--email_blog-->
            </div><!--main_feature_blog-->
        </section><!--features_blog-->
        <section id="bottom">
            <div class="main_bottom_sec">
              <span>Digital Resume &copy; 2012 . English (US)</span>
                <ul class="right_bottom_nav">
                    <li><a>Affiliate Program</a></li>
                    <li><a>Privacy Policy</a></li>
                    <li><a>Terms &amp; Conditions</a></li>
                    <li><a href="<?php echo base_url();?>index.php/index/contact">Contact Us</a></li>
                    <li id="lastss"><a>Blog</a></li>
                </ul><!--right_bottom_nav-->
            </div><!--main_bottom_sec-->
        </section>
    </footer><!--footer-->
</section><!--container-->

<script type="text/javascript">
    $('#res_cre_button').click(function(){
        $.fancybox({
            'content' : $("#signup_form").html(),
            'titleShow'  : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
            'width'         : 420,
            'height'        : 520,
            'autoDimensions': false,
            'autoSize'      : false
        });
    });

    $('.res_cre_button').click(function(){
        $.fancybox({
            'content' : $("#signup_form").html(),
            'titleShow'  : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
            'width'         : 420,
            'height'        : 520,
            'autoDimensions': false,
            'autoSize'      : false
        });
    });
</script>
</body>
</html>
