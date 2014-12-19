<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content client">

    <article>
        <h1><?php echo kirbytext($page->title()) ?></h1>
        <div class="two-col float">
        <?php echo kirbytext($page->clients1()) ?>
        </div>
        <div class="two-col float">
        <?php echo kirbytext($page->clients2()) ?>
        </div>
<div style="clear:both;"></div>
    
  </article>

</section>

<?php snippet('footer') ?>