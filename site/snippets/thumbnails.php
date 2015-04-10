  <div id="container" class="thumbnails">
    
    <?php if ($page->title() == "home") :?>
    <div class="thumb hometext twobythree stamp">
        Visual Dialogue creates and activates brands through strategy, messaging, and design. For over 25 years, we’ve helped our clients tackle their marketing challenges through branding, websites, advertising, publications, and packaging. We’re ready to take on your challenge.

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