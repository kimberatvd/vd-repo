<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> // <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="initial-scale=1">

  <link rel="shortcut icon" href="/assets/images/favicon.ico" />

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/mobile-styles.css') ?>

<!-- google analytics code 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56829152-1', 'auto');
  ga('send', 'pageview');
</script>-->

  
</head>

<body>
<?php include_once("assets/analyticstracking.php") ?>

<div class="wrapper">


<header>

<!--[if IE 8]>
    <p>It looks like you're using IE8! Trust us, everything looks much better in a newer browser.<br/><br/></p>
<![endif]-->

<!--hamburger for mobile--><a href="#" class="hamburger"></a>

    
<!--logo-->
  <div class="logo">
    <a href="<?php echo url('/') ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="230" alt="<?php echo html($site->title()) ?>" class="logo"/></a>
  </div>

  <div class="first">
    <ul>
      <li>view work</li>
      <li><a href="#" onclick="return false">by category</a>
        <?php snippet('bycat') ?>
      </li>
    <ul><br/>

    <ul>
      <li>view work</li>
      <li><a href="#" onclick="return false">by project type</a>
      <?php snippet('bytype') ?>
      </li>
    <ul>
  </div>

  <div class="second">
    <ul>
      <li>view work</li>
      <li><a href="#" onclick="return false">by category</a>
        <?php snippet('bycat') ?>
      </li>
    <ul>
  </div>

  <div class="third">
    <ul>
    <li>view work</li>
    <li><a href="#" onclick="return false">by project type</a>
      <?php snippet('bytype') ?>
    </li>
    <ul>
  </div>

  <div class="fourth">
    <?php snippet('menu') ?>
  </div>

</header>

<div class="clear"></div>

