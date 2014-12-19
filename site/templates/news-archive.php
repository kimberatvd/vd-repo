<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">
  <h1><?php echo html($page->title()) ?></h1>   
  <div class="newsarchive">

  	

    <?php 
    $news = $pages->find('news');
    ?>

    <?php foreach($news->children() as $year): ?> 

    <p><?php echo kirbytext($year->title()); ?> </p>

	    <?php foreach($year->children()->visible() as $post): ?>
	    <a href="<?php echo $post->url() ?>">
	    <div class="one-col float">
	    <img src="<?php echo $post->images()->find('thumb.jpg')->url() ?>" class="news"/>
	    </div>

	    <div class="three-col float last-child news-blurb">
	   	<h4><?php echo html($post->title()); ?></h4>
	   	<?php echo kirbytext($post->blurb()); ?>
	    </div>
	    </a>
	    <div class="clear"></div>
		<?php endforeach ?>


    <?php endforeach ?>

</div>
<div class="clear"></div>

</section>



<?php snippet('footer') ?>