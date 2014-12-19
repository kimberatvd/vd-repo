<nav>
  <ul>
    <?php foreach($pages->visible() AS $p): ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>

    <li class="mobile"><a href="#" onclick="return false" class="mobile-nav">view work by category</a>
			<?php snippet('bycat') ?>
    </li>
    <li class="mobile"><a href="#" onclick="return false" class="mobile-nav">view work by project type</a>
      <?php snippet('bytype') ?>
    </li>
  </ul>
</nav>