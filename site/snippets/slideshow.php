<?php if($page->images()->count() > 2) :?>

	<div class="project">
  <div id="slides">
    
    <a href="#" class="slidesjs-previous slidesjs-navigation"><div class="previous-arrow"></div></a> 
    <a href="#" class="slidesjs-next slidesjs-navigation"><div class="next-arrow"></div></a>

    <?php if($page->hasImages()): ?> 
    <?php foreach($page->images()->filterBy('title', '!=', 'thumb') as $image): ?>
        <img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
    <?php endforeach ?>
    <?php endif ?>

  </div>
	</div>

<?php endif ?>


<?php if($page->images()->count() <= 2) :?>
	<div class="project news">
	    <?php if($page->hasImages()): ?> 
	    <?php foreach($page->images()->filterBy('title', '!=', 'thumb') as $image): ?>
	        <img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
	    <?php endforeach ?>
	    <?php endif ?>
	</div>
<?php endif ?>


<?php echo vimeo('http://vimeo.com/'.$page->video(), 1210, 681) ?>