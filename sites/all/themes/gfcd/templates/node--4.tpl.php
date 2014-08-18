<?php /* Tools & Tips Template */ ?>

<section class="hero">
  <div class="wrapper">
    <h1 class="page-title"><?php print $title; ?></h1>
    <?php print render($content['field_hero']);  ?>
  </div>
</section>

<nav class="sub-nav">
  <a href="#main">Organize Your Dance</a>
  <a href="#toolkit">Advocacy Toolkit</a>
</nav>

<section id="main" class="main">
  <div class="wrapper">
         
      <div class="body">
        <?php print render($content); ?>
      </div>
    
  </div>
</section>

<?php
  $nid = 9;
  $node2 = node_load($nid);
  node_view($node2);
?>
<section id="toolkit" class="toolkit">
  <div class="wrapper">

  <div class="body">
    <h2><?php print $node2->title; ?></h2>
    <?php print $node2->body['und'][0]['value']; ?>
  </div>
  
  </div>
</section>

<?php // dpm($node2); ?> 