<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">
    <article>
        <div class="project-description">
        <h1><?php echo html($page->title()) ?></h1>

        <?php if(strpos($page->probsol, 'nops') !== false) { ?>
        <div class="float">
            <?php echo kirbytext($page->problem()) ?>
        </div>
        
        <?php } else {?>
        <div class="two-col float">
            <h2>problem</h2>
            <?php echo kirbytext($page->problem()) ?>
        </div>

        <div class="two-col float sol-last">
            <h2>solution</h2>
            <?php echo kirbytext($page->solution()) ?>
        </div>
        <?php snippet('scope') ?>
        <?php } ?>


      </div>

    <div class="project-images">
        <?php if($page->video() != "" && strpos($page->videoloc, 'first') !== false): ?>
        <?php echo vimeo('http://vimeo.com/'.$page->video(), 1210, 681) ?>
        <?php endif ?>

        <?php if($page->hasImages()): ?> 
        <ul class="gallery">
          <?php foreach($page->images()->filterBy('title', '!=', 'thumb') as $image): ?>
          <li><img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->alt() ?>" />
            <?php echo $image->caption() ?></li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>

        <?php if($page->video() != "" && strpos($page->videoloc, 'last') !== false): ?>
        <?php echo vimeo('http://vimeo.com/'.$page->video(), 1210, 681) ?>
        <?php endif ?>
    </div>


    <?php snippet('thumbnails') ?>
    <div class="clear"></div>

 

    
  </article>
</section>


<?php snippet('footer') ?>