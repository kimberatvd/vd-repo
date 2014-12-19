<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">

    <article>
        <?php echo kirbytext($page->results()) ?>
        <?php echo kirbytext($page->about()) ?>

        <div class="project">
        <div id="slides">
            
        <a href="#" class="slidesjs-previous slidesjs-navigation"><div class="previous-arrow"></div></a> 
        <a href="#" class="slidesjs-next slidesjs-navigation"><div class="next-arrow"></div></a>

        <?php if($page->hasImages()): ?> 
        <?php foreach($page->images() as $image): ?>
            <img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
        <?php endforeach ?>

        <?php endif ?>



        </div>
    </div>

        <?php echo kirbytext($page->bios()) ?>
        <?php echo kirbytext($page->awards()) ?>


<div style="clear:both;"></div>
    
  </article>

</section>

<?php snippet('footer') ?>