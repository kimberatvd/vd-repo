<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> // <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="initial-scale=1">

  <?php echo css('assets/styles/styles.css') ?>
</head>

<body>
<div class="wrapper">


<header>

<!--hamburger for mobile--><a href="#" class="hamburger"></a>

    
<!--logo-->
  <div class="float one-col logo">
    <a href="<?php echo url('/') ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="230" alt="<?php echo html($site->title()) ?>" class="logo"/></a>
  </div>

  <!-- column 1 -->
  <div class="one-col float empty">
    <div class="view-work">
      <ul>
        <li class="upper">VIEW WORK</li>
        <li class="upper"><a href="#" onclick="return false">By Project Type</a>
          <ul class="navtext lower">
            <li><a href="/type/identity">Identity</a></li>
            <li><a href="/type/publications">Publications</a></li>
            <li><a href="/type/websites">Websites</a></li>
            <li><a href="/type/advertising">Advertising</a></li>
            <li><a href="/type/packaging">Packaging</a></li>
            <li><a href="/type/other">Other</a></li>
          </ul> 
        </li>
      </ul> 
      <br/>  

      <ul>
        <li class="upper">VIEW WORK</li>
        <li class="upper"><a href="#" onclick="return false">By Category</a>
          <ul class="navtext lower">
            <li><a href="/category/arts-nonprofits">Arts &amp; Nonprofits</a></li>
            <li><a href="/category/education">Education</a></li>
            <li><a href="/category/entertainment">Entertainment</a></li>
            <li><a href="/category/health-science">Health &amp; Science</a></li>
            <li><a href="/category/professional-services">Professional Services</a></li>
            <li><a href="/category/hospitality-retail">Hospitality &amp; Retail</a></li>
          </ul>
        </li>
      </ul>    
    </div>
  </div>
  
  <!-- column 2 -->
  <div class="one-col float sort">
  <ul>
    <li class="upper">VIEW WORK</li>
    <li class="upper"><a href="#" onclick="return false">By Project Type</a>
      <ul class="navtext lower">
            <li><a href="/type/identity">Identity</a></li>
            <li><a href="/type/publications">Publications</a></li>
            <li><a href="/type/websites">Websites</a></li>
            <li><a href="/type/advertising">Advertising</a></li>
            <li><a href="/type/packaging">Packaging</a></li>
            <li><a href="/type/other">Other</a></li>
      </ul> 
    </li>
  </ul>            
  </div>
  
  <!-- column 3 -->
  <div class="one-col float sort">
  <ul>
    <li class="upper">VIEW WORK</li>
    <li class="upper"><a href="#" onclick="return false">By Category</a>
      <ul class="navtext lower">
        <li><a href="/category/arts-nonprofits">Arts &amp; Nonprofits</a></li>
        <li><a href="/category/education">Education</a></li>
        <li><a href="/category/entertainment">Entertainment</a></li>
        <li><a href="/category/health-science">Health &amp; Science</a></li>
        <li><a href="/category/professional-services">Professional Services</a></li>
        <li><a href="/category/hospitality-retail">Hospitality &amp; Retail</a></li>
      </ul>
    </li>
  </ul>    
  </div>

  <!-- column 4 -->
  <div class="one-col float last-child">


    <?php snippet('menu') ?>
  </div>

</header>

<div class="rule clear"></div>

