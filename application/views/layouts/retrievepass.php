<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->lang->line('site_title');?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>styles/global.css" />
    <style>
        body{
            height: auto;
            background-color: #E9E9E9;
        }
        #container{
            overflow: hidden;
            overflow-style: auto;
        }

        form{
            color: #6F6F6F;
            font-family: Verdana;
            font-size: 14px;
        }

        #logoContainer{
            background: url("../../../images/varaope-logo-2.png") no-repeat transparent;
            height: 86px;
            width: 256px;
            text-align: center;
            margin: 0px auto;
            margin-top: 130px;
            cursor: pointer;
        }

        #formContainer{
            text-align: center;
            margin: 0px auto;
            margin-top: 30px;
            color: #979797;
        }

        input[type="text"], input[type="password"]{
            border: 2px solid #D3D3D3;
            height: 22px;
            min-height: 22px;
            width: 250px;
            min-width: 250px;
        }

        input[type="checkbox"]{
            margin: 0px auto;
            border: 2px solid #D3D3D3;
        }

        .retrieveButton{
            background: url("../../../images/retrievepng.png") no-repeat transparent;
            height: 29px;
            width: 115px;
            cursor: pointer;
        }

        .errorMsg{
            color: red;
        }
    </style>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('form' ).bind('keypress', function(e){
                if ( e.keyCode == 13 ) {
                    $( this ).find('.retrieveButton' ).click();
                }
            });

            $('.retrieveButton').click(function(){
                $('#retrievePass').submit();
            });

            $('#logoContainer').click(function(){
                var url = $('#baseUrl').val();
                window.location.href = url;
            });
        });
    </script>
</head>
<body>
<div id="container">
    <div style="width: 26%; float: left;  height: 600px; min-height: 100%;">&nbsp;</div>
    <div style="width: 46%; float: left; height: 600px; min-height: 100%;">
        <div id="logoContainer"></div>
        <input type="hidden" name="baseUrl" id="baseUrl" value="<?php echo base_url();?>"/>
        <div id="formContainer">
            <?php if (isset($message)) { ?>
            <h3 class="errorMsg"><?php echo $message;?></h3>
            <?php } ?>
            <form id="retrievePass" method="post" action="<?php echo base_url();?>home/retrievePassword">
                <table cellpadding="4" cellspacing="4" width="100%" align="center">
                    <tr>
                        <td colspan="2" align="center">
                            <?php echo $this->lang->line('retrieve_enter_pass');?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="35%" style="vertical-align: text-top;">
                            <label class="" for="newpass"><?php echo $this->lang->line('new_password');?></label>
                        </td>
                        <td align="left" width="65%">
                            <input id="newpass" name="new_password" class="" type="password" maxlength="255" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="35%" style="vertical-align: text-top;">
                            <label class="" for="confpass"><?php echo $this->lang->line('confirm_password');?></label>
                        </td>
                        <td align="left" width="65%">
                            <input id="confpass" name="confirm_password" class="" type="password" maxlength="255" value=""/>
                            <input name="hash" type="hidden" value="<?php echo $hash; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"  align="center">
                            <div class="retrieveButton"></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div style="width: 27%; float: right; height: 600px; min-height: 100%;">&nbsp;</div>
</div>
</body>
</html>
