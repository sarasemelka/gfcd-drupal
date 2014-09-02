<header class="header">
  <div class="wrapper">
  
    <div class="logo">
      <a href="/" class="logo-full"><img src="/sites/all/themes/gfcd/assets/images/logo.svg" alt="GFCD"></a>
      <div class="logo-mobile">
        <a href="/" class="logo-mark"><img src="/sites/all/themes/gfcd/assets/images/logo-mark.svg" alt="GFCD"></a>
        <h1 class="mobile-title">GFCD</h1>
      </div>
    </div>
    
    <nav class="main-nav">
      <a href="" class="btn mobile-menu-btn">Menu <span class="icon-menu"><span class="bar"></span><span class="bar"></span><span class="bar"></span></span></a>
      <?php print $main_menu; ?>
    </nav>
  
  </div>
</header>

<?php print $messages; ?>
<?php print render($page['content']); ?>

<footer class="footer">
  <div class="wrapper">
  
    <div class="follow-us">
      <ul class="social-links">
        <li><a href="https://twitter.com/natlfccoalition" class="ss-icon ss-social-circle">twitter</a></li>
        <li><a href="https://www.facebook.com/NationalFCCoalition" class="ss-icon ss-social-circle">facebook</a></li>
        <li><a href="https://www.youtube.com/user/globalhealthcatalyst/" class="ss-icon ss-social-circle">youtube</a></li>
      </ul>
    </div>
          
    <div class="copyright">
      <p>&copy; <?php echo date('Y'); ?> Global Female Condom Day. <a href="http://elevenelevencreative.com/" target="_blank">Web Design</a>: Eleven Eleven Creative</p>
    </div>
  
  </div>
</footer>