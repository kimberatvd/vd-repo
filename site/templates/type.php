<?php snippet('header') ?>
<?php snippet('submenu') ?>

<section class="content">
     <h1><?php echo html($page->title()) ?></h1>   
  <div id="container">

    <?php 
    $work = $pages->find('work');
    $title = $page->title();?>

    <?php foreach($work->children()->visible()->filterBy('type', '*=', $title) as $project): ?>  


    <?php 
    if ($project->images()->filterBy('title', '*=', 'thumb')->first()->width() == '240' && $project->images()->filterBy('title', '*=', 'thumb')->first()->height() == '164') {
    $thumbsize = 'onebyone';
    } else if ($project->images()->filterBy('title', '*=', 'thumb')->first()->width() == '240' && $project->images()->filterBy('title', '*=', 'thumb')->first()->height() == '330') {
     $thumbsize = 'onebytwo';
    } else if ($project->images()->filterBy('title', '*=', 'thumb')->first()->width() == '482') {
    $thumbsize = 'twobytwo';
    } else {
    $thumbsize = 'twobythree';
    } ?>
    
    <a href="<?php echo $project->url() ?>"><div class="thumb <?php echo $thumbsize ?>" data-content="<?php echo $project->title() ?>">
        <img src="<?php echo $project->images()->filterBy('title', '*=', 'thumb')->first()->url() ?>" class="<?php echo $thumbsize ?>"  alt="$project->images()->filterBy('title', '*=', 'thumb')->first()->caption()"/>
    </div></a>

    <?php endforeach ?>

    
</div>
<div style="clear:both;display:block"></div>
</section>



<?php snippet('footer') ?>