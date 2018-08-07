<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<link rel="stylesheet" href="<?php print STYLES_DIR . 'main.min.css'; ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="/assets/app.ie.min.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<?php 
  $menuLocations = get_nav_menu_locations();
  $lMenu = $menuLocations['main-menu'];
  $lNav = wp_get_nav_menu_items($lMenu);
?>

</head>

<body class="fs-grid">
  <div id="wrapper">
    <div id="contents">
