<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->lang->line('site_title');?></title>
    <link href="<?php echo base_url() ?>styles/style.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url();?>js/watermarkify/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/watermarkify/watermarkify.0.6.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".fields").watermarkify();
        });
    </script>
</head>

<body class="error_page">

<header id="header_position">
    <section id="position_center">
        <figcaption id="headder_left">
            <figure id="logo">
                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" /></a>
            </figure>
        </figcaption>
        <figcaption id="headder_right">
            <div class="ligin_section">
                <!--<form action="">
                <ul>
                <li><input type="text" class="fields" title="Username"/><label><a href=""><img src="images/cross.png" /> </a> Muista minut</label> </li>
                <li><input type="password" class="fields" title="Password"/><label>Unhtuiko salasana?</label></li>
                </ul>
                <label><input type="image" name="submit" src="images/button.png" /></label>
                </form>-->
            </div>
        </figcaption>
    </section>
</header>
<section id="main_content">
    <section id="position_center">
        <article>
            <div class="sidebar">
                <ul><li>
                    <hgroup><h1>Hups.Jok#n meni piel33n.</h1></hgroup>
                    <p>Tämä ei tainnut olla etsimäsi sivu...</p>
                    <p>Jokun juttu hajosi. todennäköisesti vika ei ole teissä vään meissä.</p>
                    <p>Jos et pääse muutaman yrityksen jälkeen haluamallesi sivulle, niin laita meille postia ja tutkimme mikä meni pieleen.</p>
                    <p>Varaope tiimi,<br />info@varaope.fi</p>
                </li>
                </ul>
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