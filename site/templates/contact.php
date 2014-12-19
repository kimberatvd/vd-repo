<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content contact">

    <article>
    <div class="three-col float" style="margin-bottom:20px;">
      <?php echo kirbytext($page->contact()) ?>
      <?php echo kirbytext($page->directions()) ?>
    </div>

    <div class="two-col float last-child">
      <?php echo kirbytext($page->employment()) ?>
    </div>


<div style="clear:both;"></div>
    
  </article>

</section>

<?php snippet('footer') ?>