<?php /* Home Template */ ?>
<section class="hero">
  <div class="wrapper">
    <?php print render($content['field_hero']);  ?>
    <a class="icon-arrow-down" href="#main"></a>
  </div>
</section>

<section class="song-download">
  <div class="wrapper">
    <?php
    $block = module_invoke('block', 'block_view', '15');
    print render($block['content']);
    ?>
  </div>
</section>

<section id="main" class="main">
  <div class="wrapper">

    <div class="home-info-blocks">

      <div class="col-1-3">
        <div class="icon"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/icon-home-05.svg" alt="Dance4Demand Icon"></div>
        <?php
        $block = module_invoke('block', 'block_view', '1');
        print render($block['content']);
        ?>
      </div>

      <div class="col-1-3">
        <div class="icon"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/icon-home-04.svg" alt="Dance4Demand Icon"></div>
        <?php
        $block = module_invoke('block', 'block_view', '2');
        print render($block['content']);
        ?>
      </div>

      <div class="col-1-3">
        <div class="icon"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/icon-home-03.svg" alt="Dance4Demand Icon"></div>
        <?php
        $block = module_invoke('block', 'block_view', '3');
        print render($block['content']);
        ?>
      </div>

    </div>

  </div>
</section>

<section class="bottom">

  <div class="col-1-2 block-get-involved">
    <h3 class="block-title">Get Involved</h3>
    <ul class="social-links">
      <li><a href="https://twitter.com/natlfccoalition" target="_blank" class="ss-icon ss-social-circle">twitter</a></li>
      <li><a href="https://www.facebook.com/NationalFCCoalition" target="_blank" class="ss-icon ss-social-circle">facebook</a></li>
      <li><a href="https://www.youtube.com/channel/UC049yC9z62wwBuG-DfX9UYg" target="_blank" class="ss-icon ss-social-circle">youtube</a></li>
    </ul>
    <?php
    $block = block_load('block', '19');
    print drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
    ?>
  </div>

  <div class="col-1-2 block-newsletter">
    <?php
    $block = block_load('block', '14');
    print drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
    ?>
  </div>

</section>

<section class="lets-dance">
  <div class="wrapper">
    <?php
    $block = block_load('block', '18');
    print drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
    ?>
  </div>
</section>
