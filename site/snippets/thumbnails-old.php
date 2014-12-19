  <div id="container" class="thumbnails">
    
    <?php if ($page->title() == "home") :?>
    <div class="thumb hometext twobythree">
        We’re an experienced creative agency that helps leading organizations connect with their audience. We bring together strategy, messaging, and design to create branding, advertising, websites, packaging, signage, public art, and publications. Interested in learning more? Examples of some of our most impactful work follows.
    </div>
    <?php endif ?>

    <?php 

    $work = $pages->find('work');
    foreach($work->children() as $project): ?>  

    <?php 
    if ($project->images()->find('thumb.jpg')->width() == '240' && $project->images()->find('thumb.jpg')->height() == '164') {
    $thumbsize = 'onebyone';
    } else if ($project->images()->find('thumb.jpg')->width() == '240' && $project->images()->find('thumb.jpg')->height() == '330') {
     $thumbsize = 'onebytwo';
    } else if ($project->images()->find('thumb.jpg')->width() == '482') {
    $thumbsize = 'twobytwo';
    } else {
    $thumbsize = 'twobythree';
    } ?>
    
    <a href="<?php echo $project->url() ?>"><div class="thumb <?php echo $thumbsize ?>" data-content="<?php echo $project->title() ?>">
        <img src="<?php echo $project->images()->find('thumb.jpg')->url() ?>" class="<?php echo $thumbsize ?>"  />
    </div></a>

    <?php endforeach ?>
</div>