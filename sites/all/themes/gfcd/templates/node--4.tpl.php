<?php /* Tools & Tips Template */ ?>

<section class="hero">
  <div class="wrapper">
    <h1 class="page-title"><?php print $title; ?></h1>
    <?php print render($content['field_hero']);  ?>
  </div>
</section>

<!--
<nav class="sub-nav">
  <a href="#main">Organize Your Dance</a>
  <a href="#toolkit">Advocacy Toolkit</a>
</nav>
-->

<section id="main" class="main">
  <div class="wrapper">
         
      <div class="body">
        <?php print render($content); ?>
      </div>
      
      <div class="organize-steps">
      
        <div class="step">
          <div class="step-number">1</div>
          <?php
            $block = module_invoke('block', 'block_view', '7');
            print render($block['content']);
          ?>
        </div>

        <div class="step">
          <div class="step-number">2</div>
          <?php
            $block = module_invoke('block', 'block_view', '8');
            print render($block['content']);
          ?>
        </div>

        <div class="step">
          <div class="step-number">3</div>
          <?php
            $block = module_invoke('block', 'block_view', '9');
            print render($block['content']);
          ?>
        </div>

        <div class="step">
          <div class="step-number">4</div>
          <?php
            $block = module_invoke('block', 'block_view', '10');
            print render($block['content']);
          ?>
        </div>

        <div class="step">
          <div class="step-number">5</div>
          <?php
            $block = module_invoke('block', 'block_view', '11');
            print render($block['content']);
          ?>
        </div>

        <div class="step">
          <div class="step-number">6</div>
          <?php
            $block = module_invoke('block', 'block_view', '12');
            print render($block['content']);
          ?>
        </div>

        <div class="steps-footer">
          <?php
            $block = module_invoke('block', 'block_view', '13');
            print render($block['content']);
          ?>
        </div>
      
      </div>

    
  </div>
</section>

<?php
  // $nid = 9;
  // $node2 = node_load($nid);
  // node_view($node2);
?>
<!--
<section id="toolkit" class="toolkit">
  <div class="wrapper">

  <div class="body">
    <h2><?php // print $node2->title; ?></h2>
    <?php // print $node2->body['und'][0]['value']; ?>
  </div>
  
  </div>
</section>
-->

<?php // dpm($node2); ?> 