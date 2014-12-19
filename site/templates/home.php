<?php snippet('header') ?>

<section class="content">

    <article>

<?php if($page->shortnews() != ""): ?> 
  <div class="shortnews">
  <!--<img src="/assets/images/star.png" /><p><?= $page->shortnews() ?> </p>-->
  <?php echo kirbytext($page->shortnews()) ?>
  </div>
  <div class="clear"></div>
<?php endif ?>

<?php snippet('slideshow') ?>

				
<?php if($page->newstitle() != ""): ?> 				
<h2 style="margin-top:15px;">latest news:</h2>
<h1><?php echo html($page->newstitle()) ?></h1>
<?php endif ?>

<?php if($page->text() != ""): ?> 	
<?php echo kirbytext($page->text()) ?>
<?php endif ?>
        <?php snippet('thumbnails') ?>





<div style="clear:both;"></div>
    
  </article>

</section>

<?php snippet('footer') ?>