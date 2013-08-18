<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->lang->line('site_title');?></title>
    <link href="<?php echo base_url() ?>styles/style.css" rel="stylesheet" type="text/css" />

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
                    $( this ).find('.loginButton' ).click();
                }
            });

            $('.loginButton').click(function(){
                $('#login').submit();
            });

            $('#logoContainer').click(function(){
                var url = $('#baseUrl').val();
                window.location.href = url;
            });

        });
    </script>
</head>

<body>

<header id="header_position">
    <section id="position_center">
        <figcaption id="headder_left">
            <figure id="logo">
                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" /></a>
            </figure>
        </figcaption>
        <figcaption id="headder_right">
            <?php
                if (!empty($message) && ($message!="Your session expired.")) {
                    $style = "class='errorMsg' style='display: block;'";
                } else {
                    $style = "style='display: none;'";
                }
            ?>
            <h3 <?php echo $style;?>><?php echo $message;?></h3>
            <div class="ligin_section">
                <form id="login" method="post" action="<?php echo base_url();?>home/loginCheck">
                    <ul>
                        <li><input type="text" class="fields" tabindex="1" title="" placeholder="<?php echo $this->lang->line('login_username_label');?>" id="userId" name="userId"/><label><input id="remember" name="remember" class="" type="checkbox" value="1" style="border: 0px !important; margin: 0px  !important; width: 13px !important; height: 13px !important;"/>&nbsp;<?php echo $this->lang->line('login_remember_label');?></label> </li>
                        <li><input type="password" class="fields" tabindex="2" title="" placeholder="<?php echo $this->lang->line('login_password_label');?>" id="password" name="password" /><label style="padding-top: 5px !important; margin-bottom: 5px !important;"><a href="<?php echo base_url() ?>home/forgotPass"><?php echo $this->lang->line('forgot_pass_text');?></a></label></li>
                        <label><input type="image" name="submit" src="<?php echo base_url() ?>images/button1.png" style="margin-top: 0px !important;"/></label>
                    </ul>
                </form>
            </div>
        </figcaption>
    </section>
</header>

<section id="main_content">
    <section id="position_center">

        <article>
            <hgroup> <h1>&nbsp;</span></h1></hgroup>
            <div class="sidebar header-sidebar">
                <ul>

                    <li class="text"><a href="">Lue lisaa...</a></li>
                    <li><a href="<?php echo base_url() ?>subs/login/register"><img src="<?php echo base_url() ?>images/liity.png" /></a></li>
                    <li><a href="<?php echo base_url() ?>schools/schools/index"><img src="<?php echo base_url() ?>images/liity1.png" /></a></li>
                </ul>
            </div>
        </article>
    </section>
    <section id="content-position_center">
        <section class="left-side content-side">
            <h2>Koulu</h2>
            <a href="<?php echo base_url();?>schools/schools/index"><img src="<?php echo base_url() ?>images/liitynyt.png" border="0" /></a>
            <section id="content-con">
                <h1 >Hinta - Avajaistarjous!*</h1>
                <p>Lukuvuosi 2012-2013.<br /><b>100 euroa*</b></p>
                <p>*Tarjous voimassa tammikuun loppuun <br />saakka. Norm. 150-250 euroa.</p>
            </section>
            <section id="content-con">
                <h1 class="green">Varaopeen liittyminen</h1>
                <p>Varaopeen rekisteröityminen vie vain minuutin.  <br />Käyttö ei vaadi koulutusta.</p>
            </section>
            <section id="content-con">
                <h1 class="green">Luo oma suosikkilista</h1>
                <p>Koulunne voi kutsua kaikki tutut sijaiset omalle<br /> suosikkilistalle. Sijaiset suosikkilistalla saavat halutessanne<br /> tiedon uusista sijaisuuksista ennnen muita Varaopen<br /> käyttäjiä.</p>
            </section>
            <section id="content-con">
                <h1 class="green"><i>Nopsa! -sijaisuus</i></h1>
                <p>Kun koulullanne on pikainen tarve sijaiselle voitte Varaopen<br /> kautta luoda Nopsa! -sijaisuuden. Tällöin Varaope lähettää<br /> kaikille suosikkilistanne sijaisille ilmaisen tekstiviestin<br /> avoimena olevasta sijaisuudesta.</p>
            </section>
            <section id="content-con">
                <h1 class="green">Helppokäyttöisyys</h1>
                <p>Sijaisuustarpeen ilmoittaminen on tehty helpoksi. <br /> Kirjauduttuanne Varaopeen täytätte lyhyen <br /> sijaisuusilmoituksen. Ilmoitus tavoittaa nopeasti ison joukon <br /> potentiaalisia sijaisia. Hakemusten saapuessa valitsette <br /> mieleisenne sijaisen.</p>
            </section>
            <section id="content-con">
                <h1 class="green">Nopea palvelu</h1>
                <p>Varaope julkaisee ilmoittamanne sijaisuustarpeen välittömästi<br /> kaikille potentiaalisille sijaisille. Jos haluatte voitte ensin<br /> lähettää sijaisuuden suosikkilistallenne ja vasta sitten muille<br /> Varaopen käyttäjille.</p>
            </section>
            <section id="content-con">
                <h1 class="green">Oikea sijainen oikeaan paikkaan</h1>
                <p>Jokainen Varaopesta löytyvä sijainen on liittyessään<br /> todistanut koulu- tai työtodistuksella olevansa kykenevä<br /> työskentelemään sijaisena. Ilman alaan liittyvää koulutusta tai<br /> kokemusta ei voi liittyä Varaopeen. Voitte halutessanne hakea<br /> sijaisuuteen myös ainoastaan päteviä sijaisia.</p>
            </section>
            <section id="mieleen">
                <a href="<?php echo base_url() ?>schools/schools/index"><img src="<?php echo base_url() ?>images/nythaluna.png" /></a>
                <p>Tuliko mieleen vielä jotain? <a href="javascript:void(0);">Ota yhteyttä Varaopeen.</a></p>
            </section>
        </section>


        <section class="right-side content-side">
            <h2>Sijainen</h2>
            <a href="<?php echo base_url() ?>subs/login/register"><img src="<?php echo base_url() ?>images/liitynyt.png" border="0" /></a>
            <section id="content-con">
                <h1>Hinta - Avajaistarjous!*</h1>
                <p><span class="green"><b>Lyhyt:</b></span> sijaisuuden kesto 1-10 päivää<br /><b>0,00€ / päivä </b></p>
                <p><span class="orange"><b>Pitkä:</b></span> sijaisuuden kesto 10+ päivää<br /><b>0,00€ / sijaisuus</b></p>
                <p>Maksu peritään vain tehdyistä sijaisuuksista. Et siis<br /> maksa sijaisuuksien etsimisestä vaan sijaisuuksista,<br /> jotka olet jo tehnyt.</p>
                <p>*Tarjous voimassa toistaiseksi</p>
            </section>
            <section id="content-con">
                <h1 class="orange">Varaopeen liittyminen</h1>
                <p>Rekisteröityminen Varaopeen on nopeaa. Mukaan tulee liittää todistus<br /> siitä, että opiskelet tai olet valmistunut opettajaksi, tai että olet jo<br /> aikaisemmin tehnyt sijaisuuksia. </p>
            </section>

            <section id="content-con">
                <h1 class="orange">Löydä sijaisuus milloin tahansa</h1>
                <p>Varaopen avulla sijaisuuksien etsiminen haluamillesi lyhyille ja<br /> pitkille ajanjaksoille on tehty mahdollisimman helpoksi ja <br />yksinkertaiseksi. Valitse kalenteristasi sopivat päivät<br />sijaisuuksille ja Varaope hoitaa loput.</p>
            </section>

            <section id="content-con">
                <h1 class="orange">Helppokäyttöisyys</h1>
                <p>Sijaisuuksien etsiminen on helppoa. Määrität itse <br />hakukriteerit, joiden avulla saat täsmälleen haluamasi<br /> sijaisuudet milloin haluat ja mistä haluat. Löydettyäsi sopivan<br /> sijaisuuden haet siihen Varaopen kautta. Kun koulu on <br /> valinnut hakijoista haluamansa sijaisen tulee siitä ilmoitus<br /> Varaope-tilillesi ja sähköpostiisi. Päätöstä odottavia, tulevia,<br /> sekä menneitä sijaisuuksia pääset seuraamaan Varaopen<br /> kautta.
                </p>
            </section>

            <section id="content-con">
                <h1 class="orange">Valinta sijaiseksi</h1>
                <p>Varaopen kautta on haettavissa kolme erilaista sijaisuutta:<br /> <i>Nopsa!, lyhyt ja pitkä.</i><br />
                    <i>Nopsa!</i> -sijaisuuksissa paikan saa hakija, joka varaa sen<br /> ensimmäisenä. Myös lyhyissä sijaisuuksissa paikan saa<br /> helpoimmin nopein hakemuksen lähettäjä. Lyhyissä<br /> sijaisuuksissa koulun täytyy kuitenkin ensin päättää <br />hyväksyykö se sijaisen. Pitkissä sijaisuuksissa <br />työtä voi hakee viisi hakijaa, joista koulu valitsee yhden. <br />Varaope ilmoittaa ”hyvät“ ja ”huonot” uutiset aina kaikille hakijoille.</p>

                <p><br />Sinun henkilökohtaiset tiedot tulevat näkyviin vain kouluille, joiden sijaisuuksiin haet. Tietosi eivät tallennu pysyvästi koulun omiin arkistoihin, vaan näkyvät heille ainoastaan sijaisuuksista päätettäessä.</p>
            </section>

            <section id="content-con">
                <h1 class="orange">Nopsa!-sijaisuus</h1>
                <p>Nopsa! -sijaisuus on erityisen hyödyllinen, kun voit ottaa<br /> vastaan sijaisuuksia lyhyellä varoitusajalla. Koulun<br /> ilmoittaman Nopsa! -sijaisuuden saa sen ensimmäisenä<br /> varannut.</p>
            </section>

            <section id="content-con">
                <h1 class="orange">Koulun suosikkilista</h1>
                <p>IKoulu voi kutsua sinut suosikkilistalleen, jolloin voit nähdä<br /> kyseiseltä koululta sijaisuusehdotuksia ennen muita Varaopen<br /> käyttäjiä. Jos suosikkikoulullasi on tarjolla nopsa! -sijaisuus<br /> saat siitä ilmoituksen tekstiviestitse. Toimi nopeasti ja<br /> päättäväisesti, jolloin sijaisuus on sinun!</p>
            </section>

            <section id="mieleen">
                <a href="<?php echo base_url() ?>subs/login/register"><img src="<?php echo base_url() ?>images/nythaluna.png" /></a>
                <p>Tuliko mieleen vielä jotain? <a href="javascript:void(0);">Ota yhteyttä Varaopeen.</a></p>
            </section>
        </section>
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
