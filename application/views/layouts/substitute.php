<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->lang->line('site_title');?></title>
    <link href='http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url();?>styles/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>styles/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>styles/lightbox.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.lightbox_me.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){		
			$("#btn-slide-one").click(function(){
				$("#panel-one").slideToggle("slow");
                if($(this).hasClass('up')){
                    $(this).removeClass('up');
                    $(this).addClass('down');
                } else {
                    $(this).removeClass('down');
                    $(this).addClass('up');
                }
                return false;
			});		 
		});
		
		$(document).ready(function(){		
			$("#btn-slide-two").click(function(){
				$("#panel-two").slideToggle("slow");
                if($(this).hasClass('up')){
                    $(this).removeClass('up');
                    $(this).addClass('down');
                } else {
                    $(this).removeClass('down');
                    $(this).addClass('up');
                }
                return false;
			});		 
		});
		
		$(document).ready(function(){		
			$("#btn-slide-three").click(function(){
				$("#panel-three").slideToggle("slow");
                if($(this).hasClass('up')){
                    $(this).removeClass('up');
                    $(this).addClass('down');
                } else {
                    $(this).removeClass('down');
                    $(this).addClass('up');
                }
                return false;
			});		 
		});
		
		$(document).ready(function(){		
			$("#btn-slide-four").click(function(){
				$("#panel-four").slideToggle("slow");
                if($(this).hasClass('up')){
                    $(this).removeClass('up');
                    $(this).addClass('down');
                } else {
                    $(this).removeClass('down');
                    $(this).addClass('up');
                }
                return false;
			});		 
		});

		function open_me(me){
			$(me).parent().parent().next().slideToggle("slow");
			$(me).toggleClass("active"); 
			return false;
			}
    </script>

	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    
</head>
<body>
	
	<div class="extra">
        <!--==============================header=================================-->
        <?php
            $session = $this->session->userdata('logged_in');

            if ($session) {
                $vacancies = array(
                    'searchVancancies'
                );
                $substitute = array(
                    'mysubstitution'
                );
                $credit = array(
                    'myCredit'
                );
                $account = array(
                            'index',
                            'updateAccount'
                        );

                $currentUrl = $this->uri->segment(3);

                if (isset($currentUrl) && !empty($currentUrl)) {
                    $method = $this->uri->segment(3);
                } else {
                    $method = 'index';
                }

                if (in_array($method, $vacancies)) {
                    $menu = 'vacancies';
                } else if (in_array($method, $substitute)) {
                    $menu = 'substitutes';
                } else if (in_array($method, $credit)) {
                    $menu = 'credit';
                } else if (in_array($method, $account)) {
                    $menu = 'account';
                } else {
                    $menu = 'account';
                }
            }
        ?>
        <header>
        	<div class="logo-part">
            	<figure>
            		<a href="#"><img src="<?php echo base_url();?>images/admin-logo.png" width="110" height="36" align="middle" alt="logo"></a>
                </figure>
                <?php if ($session) { ?>
                <div class="header-menu">
                    <nav>
                        <ul>
                            <li><a href="<?php echo base_url();?>subs/substitute/searchVancancies" <?php if ($menu == 'vacancies') { ?> class="active" <?php } ?>><?php echo $this->lang->line('sub_search_vacancies');?></a></li>
                            <li><a href="<?php echo base_url();?>subs/substitute/mysubstitution" <?php if ($menu == 'substitutes') { ?> class="active" <?php } ?>><?php echo $this->lang->line('sub_my_substitutions');?></a></li>
                            <li><a href="<?php echo base_url();?>subs/substitute/myCredit" <?php if ($menu == 'credit') { ?> class="active" <?php } ?>><?php echo $this->lang->line('sub_my_credit');?></a></li>
                            <li><a href="<?php echo base_url();?>subs/substitute/myAccount" <?php if ($menu == 'account') { ?> class="active" <?php } ?>><?php echo $this->lang->line('sub_my_account');?></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="logout-menu">
                	<a href="<?php echo base_url();?>subs/login/logout"><?php echo $this->lang->line('logout');?></a>
                </div>
                <?php } ?>
            </div>
        </header>

        <!--==============================content================================-->
  		<div class="inner">
  			
            <div class="main">
                <div class="main-content">

                    <?php echo $content_for_layout; ?>
				</div>
            </div>
            <div class="block"></div>
            
        </div><!-----inner-------->
    </div>
	<!--==============================footer=================================-->
    <footer>
    	
    </footer>
   
</body>
</html>
