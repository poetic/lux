<div id="page-wrapper">
  <div id="header" class='reverse nav-wrapper'><div class='limiter clearfix'>
      <?php if (isset($logo)): ?>
      <div class="logo">
        <a href="<?php print $front_page; ?>"><img src="<?php print $logo?>" /></a>
      </div>
      <?php endif; ?>
    <?php if ($site_name): ?><div class='site-name'><?php print $site_name ?></div><?php endif; ?>
  </div></div><!-- /header -->

  <div id='navigation' class='reverse'><div class='limiter clearfix'>
    <?php if ($breadcrumb) print $breadcrumb; ?>
    <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
    <?php endif; ?>
  </div></div>

  <?php if ($messages): ?>
  <div id="console" class='reverse'><div class='limiter clearfix'>
   <?php if ($messages): print $messages; endif; ?>
  </div></div>
  <?php endif; ?>

  <div id='header-region'><div class='limiter clearfix'>
    <?php print render($page['header']); ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h2 class='page-title'><?php print $title ?></h2><?php endif; ?>
    <?php print render($title_suffix); ?>
  </div></div>

  <div id='page' class='card'><div class='limiter clearfix'>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <div id='main'>
      <div class='page-content'>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
        <?php print render($page['content_bottom']); ?>
        <?php print $feed_icons ?>
      </div>
    </div><!-- /main -->
    <?php
      $sidebar = render($page['sidebar_first']) . render($page['sidebar_second']); ?>
    <?php if (!empty($sidebar)): ?>
      <div id="right" class="sidebar"><?php print $sidebar; ?></div>
    <?php endif; ?>

  </div></div>

  <div id="footer" class='reverse'><div class='limiter'>
    <?php print render($page['footer']); ?>
    <?php if ($secondary_menu): ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline')))); ?>
    <?php endif; ?>
  </div></div>

</div> <!-- /#page-wrapper -->
