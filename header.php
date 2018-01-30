<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/app.ie.min.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body class="fs-grid">
  <div id="wrapper">
    <header id="nav" class="header">
      <div class="fs-row">
        <menu id="nav-main" class="fs-cell fs-all-full">
          <a href="/" id="nav-logo" class="btn--logo btn--nav btn--first"><?php bloginfo('name' );?></a>
          <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
        </menu>
      </div>
    </header>


