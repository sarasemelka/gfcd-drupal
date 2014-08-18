<div class="block <?php print $block->css_class; ?>">
  <?php if ($block->subject): ?>
  <h3 class="block-title"><?php print $block->subject ?></h3>
  <?php endif;?> 
  <?php print $content; ?>
</div>