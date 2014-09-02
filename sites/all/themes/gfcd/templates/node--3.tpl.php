<?php /* Home Template */ ?>
<section class="hero">
  <div class="wrapper">
    <?php print render($content['field_hero']);  ?>
    <a class="icon-arrow-down" href="#main"></a>
  </div>
</section>

<section id="main" class="main">
  <div class="wrapper">
         
    <div class="home-info-blocks">
    
      <div class="col-1-3">
<!--         <div class="icon"></div> -->
        <?php
        $block = module_invoke('block', 'block_view', '1');
        print render($block['content']);
        ?>
      </div>

      <div class="col-1-3">
<!--         <div class="icon"></div> -->
        <?php
        $block = module_invoke('block', 'block_view', '2');
        print render($block['content']);
        ?>
      </div>

      <div class="col-1-3">
<!--         <div class="icon"></div> -->
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
        <li><a href="https://twitter.com/natlfccoalition" class="ss-icon ss-social-circle">twitter</a></li>
        <li><a href="https://www.facebook.com/NationalFCCoalition" class="ss-icon ss-social-circle">facebook</a></li>
        <li><a href="https://www.youtube.com/user/globalhealthcatalyst/" class="ss-icon ss-social-circle">youtube</a></li>
      </ul>
      <ul class="hashtags">
        <li>#Dance4Demand</li>
        <li>#GFCD2014</li>
        <li>#femalecondoms</li>
      </ul>
    </div>
    
    <div class="col-1-2 block-newsletter">
      <?php
      $block = block_load('block', '14');
      print drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
      ?>
    </div>

<!--
    <div class="col-1-2 block-newsletter">
      <h3 class="title-block">Newsletter Sign Up</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
      <form action="https://hq-wfc2.wiredforchange.com/save" method="POST" class="form-newsletter">
        <input type="hidden" name="organization_KEY" value="8810"/>
        <input type="hidden" name="object" value="supporter"/>
        <div class="form-item">
          <label for="email">Email</label>
          <input type="text" id="email" name="Email" />
        </div>
        <input type="hidden" name="link" value="groups"/>
        <input type="hidden" name="linkKey" value="8995"/>
        <input type="hidden" name="tag" value="newsletter"/>
        <input type="hidden" name="redirect" value="http://gfcd.elevenelevencreative.com/thank-you.php">
        <button type="Submit" value="Sign up" class="btn grey">Sign Up</button>
      </form>
    </div>
-->
  
</section> 

<section class="lets-dance">
  <div class="wrapper">
    <p>Dance with us on September 16 to demand access to female condoms. <a href="" class="btn dk-orange">Let's Dance!</a></p>
  </div>
</section>
<?php // print render($content); ?>