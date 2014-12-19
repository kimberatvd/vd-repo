<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">

    <article>

        <h1><?php echo html($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>


<div style="clear:both;"></div>
    
  </article>

</section>

<?php snippet('footer') ?>