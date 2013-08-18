<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->lang->line('site_title');?></title>
    <!--<link rel="stylesheet" type="text/css" href="<?php /*echo base_url() */?>styles/global.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>styles/style.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.7.1.min.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url() ?>js/watermarkify/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/watermarkify/watermarkify.0.6.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".fields").watermarkify();

            $( 'form' ).bind('keypress', function(e){
                if ( e.keyCode == 13 ) {
                    $( this ).find('.retrieveButton' ).click();
                }
            });

            $('.retrieveButton').click(function(){
                $('#forgotPass').submit();
            });

            $('#logoContainer').click(function(){
                var url = $('#baseUrl').val();
                window.location.href = url;
            });
        });
    </script>
</head>
<body class="forgot_password">

<header id="header_position">
    <section id="position_center">
        <figcaption id="headder_left">
            <figure id="logo">
                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" /></a>
            </figure>
        </figcaption>
        <figcaption id="headder_right">
            <div class="ligin_section">
                <?php if (isset($message) && $message!="Your session expired." && $message!="You haven't entered any Username / Email!") { ?>
                <h3 class="errorMsg"><?php echo $message;?></h3>
                <?php } ?>
                <form id="login" method="post" action="<?php echo base_url();?>home/loginCheck">
                    <ul>
                        <li><input type="text" class="fields" tabindex="1" title="" placeholder="<?php echo $this->lang->line('login_username_label');?>" id="userId" name="userId"/><label><input id="remember" name="remember" class="" type="checkbox" value="1" style="border: 0px !important; margin: 0px  !important; width: 13px !important; height: 13px !important;"/>&nbsp;<?php echo $this->lang->line('login_remember_label');?></label> </li>
                        <li><input type="password" class="fields" tabindex="2" title="" placeholder="<?php echo $this->lang->line('login_password_label');?>" id="password" name="password" /><label style="padding-top: 5px !important; margin-bottom: 5px !important;"><a href="<?php echo base_url() ?>home/forgotPass"><?php echo $this->lang->line('forgot_pass_text');?></a></label></li>
                    </ul>
                    <div style="clear:both"></div>
                    <label><input type="image" name="submit" src="<?php echo base_url() ?>images/button1.png" style="margin-top: 0px !important;"/></label>
                </form>
            </div>
        </figcaption>
    </section>
</header>
<section id="main_content">
    <section id="position_center">
        <article>
            <div class="sidebar">
                <form id="forgotPass" method="post" action="<?php echo base_url();?>home/forgotPass">
                    <ul>
                        <?php if (isset($message) AND $message!="Your session expired.") { ?>
                        <li><h3 class="errorMsg1"><?php echo $message;?></h3></li>
                        <?php } ?>
                        <li><h1>Unohtuiko salasana?</h1></li>
                        <li><p>Ei hätää. Kirjoita tähän sähköpostiosoitteesi ja lähetämme sinulle ohjeet salasanan uusimiseksi.</p></li>
                        <li class="text"><input type="text" name="email" id="email" class="fields" title="" placeholder="Sahkoposti"/></li>
                        <li><input type="image" class="retrieveButton" src="<?php echo base_url() ?>images/button2.png" name="submit" /></li>
                    </ul>
                </form>
            </div>
        </article>
    </section>
</section>
<footer id="position_footer">
    <section id="position_center">
        <figcaption id="footer_left">
            <ul>
                <li><a href="javascript:void(0);">Varaope-tilmi</a></li>
                <li><a href="javascript:void(0);">Yhteytiedot </a></li>
                <li><a href="javascript:void(0);">Reklsteriseloste</a></li>
                <li><a href="javascript:void(0);">Kayttoehdot</a></li>
            </ul>

        </figcaption>
        <figcaption id="footer_right">
            <ul>
                <li><a href="http://twitter.com/Varaope"><img src="<?php echo base_url() ?>images/ticon.png" /></a></li>
                <li><a href="http://www.facebook.com/Varaope"><img src="<?php echo base_url() ?>images/ficon.png" /></a></li>
            </ul>

        </figcaption>
    </section>
</footer>

</body>
</html>