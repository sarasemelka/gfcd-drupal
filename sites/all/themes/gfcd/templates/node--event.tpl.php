<?php /* Event Template */ ?>
<section id="main" class="main">
  <div class="wrapper">
         
      <div class="body">
        <h1 class="page-title"><?php print $title; ?></h1>
        <p class="location"><?php print $node->field_location[LANGUAGE_NONE][0]['value']; ?></p>
        <?php print render($content); ?>
      </div>
      
      <?php
      print $node->field_video[LANGUAGE_NONE][0]['value'];
      print $node->field_photos[LANGUAGE_NONE][0]['value'];

      
      // Get the field collection items.
      $fc_fields = field_get_items('node', $node, 'field_photos');
      
      // Extract the field collection item ids
      $ids = array();
      foreach ($fc_fields as $fc_field) {
        $ids[] = $fc_field['value'];
      }
      
      // Load up the field collection items
      $items = field_collection_item_load_multiple($ids);
      
      // Loop through the items and extract field values
      foreach ($items as $item) {
        $image_fields = field_get_items('field_collection_item', $item, 'field_image');
        $image = array_shift($image_fields);
        $image_style_path = image_style_url('event-thumb', $image['uri']);
        $image_path = $image['filename'];
        print '<img src="' . $image_style_path . $image_path . '">';
      }

      $wrapper = entity_metadata_wrapper('node', $node);
      dpm($wrapper->getPropertyInfo());
      
      ?>
    
  </div>
</section>

<?php dpm($node); ?> 