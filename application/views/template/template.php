<?php
error_reporting(0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?="OPERATION"?> | FINLOGSS &raquo; INFORMATION LOGISTIC SINERGY SYSTEM</title>
	<link href="favicon.png" rel="shortcut icon" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/styles/style.default.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tinybox.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery.validity.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom/general.js"></script>
	<?=$__custom_script?>
	<!--[if IE 9]>
		<link rel="stylesheet" media="screen" href="styles/style.ie9.css"/>
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" media="screen" href="styles/style.ie8.css"/>
	<![endif]-->
</head>

<body class="withvernav">

<div class="bodywrapper">
    <div class="topheader">
		
		<div class="userinfof">
			Welcome&nbsp;&nbsp;<span>Operational</span>
			<span class="separator">|</span> <a class="logout" href="<?=$__CFG_http_apps?>logout.php">Logout</a>
			<!-- &nbsp;<span class="separator">|</span>&nbsp;&nbsp;<?=date("d M Y")?> -->
		</div><!--userinfo-->
	
        <div class="left">
            <h1 class="logo">OPERATION.<span>FINLOGSS</span></h1>
            <br clear="all" />
            <span class="slogan">Information Logistic Sinergy System</span>
            
        </div><!--left-->
        
        <div class="right">
			<ul class="headermenu">
				<li class="current"><a href="index.php"><span class="icon icon-crm"></span>Operation</a></li>
			</ul>    
			
            <div class="userinfodrop">
            	<div class="avatar">
                	<!--a href="#"><img src="<?=$__CFG_http_media?>images/thumbs/avatarbig.png" alt="" /></a-->
                	<a href="#"><img src="<?php echo base_url();?>assets/js/images/thumbs/avatarbig.png" alt="" /></a>
                </div><!--avatar-->
                <div class="userdata">
                	<h4>Operational</h4>
                    <span class="email">operation@email.com</span>
                    <ul>
                    	<li><a href="#">Ubah Profil</a></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
<?php
if(!$__not_show_header):
?>
    <div class="header">
    	
        
    </div><!--header-->
<?php
endif;
?>
    
    <div class="vernav2 iconmenu">
    	<ul>
			<?php $this->load->view('template/navmenu');?>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
    <div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Page Title</h1>
            <span class="pagedesc" style="display:none">Page Desc</span>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
		<?php //$this->load->view($page);?>