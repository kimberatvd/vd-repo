<?php snippet('header') ?>

<section class="content">
<article>

  <!-- thumbnails-->
  <div id="container" class="thumbnails allpg">
    
    <?php if ($page->title() == "home") :?>
    <div class="thumb hometext twobythree stamp">
        For over 25 years, Visual Dialogue has helped leading organizations connect with their audiences. <br/>We bring together strategy, messaging, and design to create branding, websites, advertising, publications, and packaging. Interested in learning more? <br/>See examples of some of our favorite projects...
    </div>
    <?php endif ?>

    <?php 

    $work = $pages->find('work');
    foreach($work->children()->visible()->shuffle() as $project): ?>  

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



<div style="clear:both;"></div>
</article>
</section>

<?php snippet('footer') ?>