<!-- begin GLOBAL -->
<div id="global">

  <!-- begin HEADER -->
  <header id="site-header" role="banner" class="clearfix">
    <?php if ($logo): ?>
      <a href="<?php print check_url($front_page); ?>" class="logo"><img src="<?php print check_url($logo); ?>" alt="<?php print $site_name; ?>" /></a>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <h3 class="site-slogan"><?php print check_plain($site_slogan); ?></h3>
    <?php endif; ?>
    
    <?php print render($page['header']); ?>
    
  </header>
  <!-- end HEADER -->
	
  <!-- begin MIDDLE -->
  <div id="middle" class="clearfix">
        
    <?php if ($page['sidebar_first']): ?>
    <!-- begin SIDEBAR FIRST -->
    <aside id="sidebar-first" role="complementary">
      <?php print render($page['sidebar_first']); ?>
    </aside>
    <!-- end SIDEBAR FIRST -->
	  <?php endif; ?>
		
    <!-- begin MIDDLE CONTENT -->
    <div id="middle-content" role="main">  
      <?php print $messages; ?>
      <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
        <nav class="tabs"><?php print render($tabs); ?></nav>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content_top']); ?>
  	  <?php print render($page['content']); ?>
  	  <?php print render($page['content_bottom']); ?>
	  </div>
    <!-- end MIDDLE CONTENT -->
		
	  <?php if ($page['sidebar_second']): ?>
	  <!-- begin SIDEBAR SECOND -->
	  <aside id="sidebar-second" role="complementary">
      <?php print render($page['sidebar_second']); ?>
    </aside>
    <!-- end SIDEBAR SECOND -->
    <?php endif; ?>
        
  </div>
  <!-- end MIDDLE -->
    
  <?php if ($page['footer']): ?>
  <!-- begin FOOTER -->
  <footer id="site-footer" role="contentinfo" class="clearfix">
    <?php print render($page['footer']); ?>
  </footer>
  <!-- end FOOTER -->
  <?php endif; ?>
    
</div>
<!-- end GLOBAL --> 	
