<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">
    <article>

<?php snippet('slideshow') ?>

      <h1><?php echo html($page->title()) ?></h1>
      <?php echo kirbytext($page->text()) ?>

        <?php snippet('thumbnails') ?>
  <div class="clear"></div>
  </article>

</section>

<?php snippet('footer') ?>