<?php /* Event Template */ ?>
<?php // dpm($node); ?> 
<section id="main" class="main event-page">
  <div class="wrapper">
  
    <div class="event-profile">
         
      <div class="event-body body">
        <h1 class="page-title"><?php print $title; ?></h1>
        <p class="event-location"><?php print $node->field_location[LANGUAGE_NONE][0]['value']; ?></p>
        <?php print render($content); ?>
      </div>
      
      <?php
        $field = field_get_items('node', $node, 'field_video');
        if ($field):
      ?>
      <div class="event-video">
        <?php print $node->field_video[LANGUAGE_NONE][0]['value']; ?>
      </div>
      <?php endif; ?>
      
    </div>
    
  </div>
</section>

<section class="event-photos">
  <?php
    $block = module_invoke('views', 'block_view', 'events-block_2');
    print render($block['content']);
  ?>
</section>