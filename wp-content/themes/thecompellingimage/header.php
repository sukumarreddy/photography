<?php 
//ob_start();
//print_r($_POST);
//exit();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title();?></title>
<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/source/css/main.css" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<script type="text/javascript"> 
var $jQFlip=jQuery.noConflict(true);
$jQFlip(document).ready(function(){
$jQFlip("ul.product-categories li a").append('<span class="indicator"></span>');
  $jQFlip(".pdtdes_dis a.red_txt_normal").click(function(){
	$jQFlip(this).hide();
	$jQFlip(this).prev(".show").hide();	
	$jQFlip(this).next('.pdtdes_hdn').show();
  });
  $jQFlip(".pdtdes_dis .show").click(function(){
	$jQFlip(this).hide();
	$jQFlip(this).next(".red_txt_normal").hide();	
	$jQFlip(this).next(".red_txt_normal").next('.pdtdes_hdn').show();	
  });
  $jQFlip(".pdtdes_hdn a.grey_txt_normal").click(function(){
	$jQFlip(this).parent(".pdtdes_hdn").hide();
	$jQFlip(this).parent(".pdtdes_hdn").prev(".red_txt_normal").show();
	$jQFlip(this).parent(".pdtdes_hdn").prev(".red_txt_normal").prev(".show").show();
  });
  //instructors page functionality
   $jQFlip("ul#instructors li a.photography-select").addClass('active');
   $jQFlip('.photography-sect').show();
   $jQFlip('.multimedia-sect').hide();
   $jQFlip("ul#instructors li a.photography-select").click(function(){
	$jQFlip("ul#instructors li a").removeClass('active');
	$jQFlip(this).addClass('active');
	$jQFlip('.multimedia-sect').hide();
	$jQFlip('.photography-sect').show();
  });
  $jQFlip("ul#instructors li a.multimedia-select").click(function(){
  	$jQFlip("ul#instructors li a").removeClass('active');
	$jQFlip(this).addClass('active');
	$jQFlip('.multimedia-sect').show();
	$jQFlip('.photography-sect').hide();
  });
  //career page functionality
  $jQFlip("ul#career li a.instructor-select").addClass('active');
  $jQFlip('.instructor-sect').show();
  $jQFlip('.management-sect').hide();
  $jQFlip("ul#career li a.instructor-select").click(function(){
	$jQFlip("ul#career li a").removeClass('active');
	$jQFlip(this).addClass('active');
	$jQFlip('.management-sect').hide();
	$jQFlip('.instructor-sect').show();
  });
  $jQFlip("ul#career li a.management-select").click(function(){
  	$jQFlip("ul#career li a").removeClass('active');
	$jQFlip(this).addClass('active');
	$jQFlip('.management-sect').show();
	$jQFlip('.instructor-sect').hide();
  });
});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/source/js/colorbox/jquery.colorbox-min.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/source/js/colorbox/colorbox.css" />
<script type="text/javascript">
var $jQColor=jQuery.noConflict(true);
$jQColor(document).ready(function(){
	$jQColor(".popupvideo").colorbox({iframe:true, innerWidth:300, innerHeight:170});
});
</script>
</head>
<body>
<div class="wrapper">
<div id="header_row">
<div id="header">
<div id="logo"><a href="/">Logo</a></div>
	<ul class="social_menu clearfix">
	<li><a id="yt"></a></li><li><a id="fb"></a></li><li><a id="tw"></a></li><li><a id="in"></a></li>
	</ul>
	<ul class="right_menu">
		
	
	
	<?php $direct=get_site_url();
		//echo $direct;
		if(is_user_logged_in())
      	{
      	?>
      		<li><a href="<?php echo $direct;?>/?page_id=10" class="font_tahoma">View Orders</a></li>
      		<li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
      	<?php	
      	}	
      	else
      	{
      		?>
      		<li><a href="<?php echo $direct;?>?page_id=7" class="font_tahoma">Sign Up</a></li>
      		<li><a href="<?php echo $direct;?>?page_id=7" class="font_tahoma">Login</a></li>
      		<?php
      	}	
	?>
	
	
	<li><a href="<?php echo $direct;?>?page_id=49" class="font_tahoma">Contact</a></li>
	</ul>

<?php /* ?>	
<?php   if ( function_exists(dynamic_sidebar('Header Right Section')) ) :
            dynamic_sidebar('Header Right Section');
             endif; ?>	

<?php */ ?>
</div>	
</div>
<div class="menu_row">
<div class="menu_row_inner">
<?php wp_nav_menu(array('main_nav' => 'main nav menu')); ?>  
<div class="search_container">
<form action="<?php echo bloginfo('url'); ?>" class="search-form" method="get" role="search">
	<input type="text" name="s" class="txt_search">
	<input type="submit" class="btn_search">
</form>
</div>
</div>
</div>
<?php putRevSlider("banner","homepage") ?> 
<div class="line"></div>