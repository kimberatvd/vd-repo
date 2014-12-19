<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">

    <article>
        <?php echo kirbytext($page->results()) ?>
    </article>
    <article>
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
</article>
<article>
    <?php foreach($page->children() as $bio): ?>
    <div class="bio-section float">
        <img src="<?php echo $bio->images()->first()->url() ?>" class="bio-photo float" />
        <div class="three-col float last-child">
            <h1><?php echo html($bio->title()) ?></h1>
            <?php echo kirbytext($bio->bio()) ?>
        </div> 
    </div><!--bio section-->
    <div style="clear:both;"></div>
    <?php endforeach ?>
</article>
<article>

        <?php echo kirbytext($page->awards()) ?>
</article>

<div style="clear:both;"></div>
    
  </article>

</section>

<?php snippet('footer') ?>