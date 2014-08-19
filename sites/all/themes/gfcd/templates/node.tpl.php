<?php /* Page Template */ ?>
<section id="main" class="main">
  <div class="wrapper">

    <section class="page-content">
    
      <h1 class="page-title"><?php print $title; ?></h1>
      
      <div class="body">
        <?php print render($content); ?>
      </div>
    
    </section>
    
    <aside class="sidebar sidebar-right">
      <?php print render(block_get_blocks_by_region('sidebar_right')); ?>
    </aside>

  </div>
</section>