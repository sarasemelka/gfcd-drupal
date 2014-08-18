<?php /* Photos & Videos Template */ ?>

<section class="hero">
  <div class="wrapper">
    <?php if(!drupal_is_front_page()) : ?>
    <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($content['field_hero']);  ?>
  </div>
</section>

<section id="main" class="main">
  <div class="wrapper">
         
      <div class="body">
        <?php print render($content); ?>
      </div>

      <?php
        $block = module_invoke('views', 'block_view', 'events-block_1');
        print render($block['content']);
      ?>
    
  </div>
</section>


<?php // dpm($node2); ?> 