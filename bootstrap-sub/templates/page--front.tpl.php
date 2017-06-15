<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<div id="main-header" class="container-fluid">
   <div class="container">
<!-- <header id="navbar" role="banner" class="<?php //print $navbar_classes; ?>"> -->
  <!-- <div class="<?php //print $container_class; ?>" -->
      <!-- <div class="pageHeader"> -->
    <!-- <div class="navbar-header"> -->
     <?php if ($logo): ?>
        <a id="header-logo" class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <!-- <img src="<?php //print $logo; ?>" alt="<?php //print t('Home'); ?>" /> -->
        </a>
      <?php endif; ?>

        <div class="pull-right hidden-md hidden-lg menu-options">
            <a href="https://login.five9.com">
                <div class="item" id="mobile-login-item">
                    <div class="icon login-icon"></div>
                    <p>Login</p>
                </div>
            </a>
            <div class="item" id="mobile-contact-item">
                <div class="icon phone-icon"></div>
                <p>Contact</p>
            </div>
            <div class="item" id="mobile-menu-item">
                <div class="icon menu-icon"></div>
                <p>Menu</p>
            </div>
        </div>
        <div class="contact-container col-xs-12">
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <div class="item">
                        <div class="icon phone-icon"></div>
                        <a href="tel:+18005538159">1-800-553-8159</a>
                    </div>
                    <div class="item">
                        <div class="icon email-icon"></div>
                        <a href="mailto:info@five9.com">info@five9.com</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="item">
                        <div class="icon twitter-icon"></div>
                        <a href="http://www.twitter.com/five9">@five9</a>
                    </div>
                    <div class="item">
                        <div class="icon location-icon"></div>
                        <a href="https://goo.gl/maps/GdE7XnsmgcJ2">4000 Executive Parkway<br />Suite 400<br />San Ramon, CA 94583</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="pull-right">
                        <div class="top-info">
                            <div class="contact-info">
                                <div class="title-contact">
                                    <p>Contact Us:</p>
                                </div>
                                <div class="contact phone-contact">
                                    <div class="icon phone-icon"></div>
                                    <a href="tel:+18005538159">1-800-553-8159</a>
                                </div>
                                <div class="contact email-contact">
                                    <div class="icon email-icon"></div>
                                    <a href="mailto:info@five9.com">Email</a>
                                </div>
                                <div class="contact chat-contact">
                                    <!-- <div class="icon chat-icon"></div>
                                    <p>Chat with Sales</p> -->
                                </div>
                            </div>
                            <div class="search-container">
                                <input type="search" class="search-box" id="query" name="q" placeholder="Search" value="" />
                                <div class="search-icon"></div>
                            </div>
                            <div class="login-container">
                                    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
                                        <nav role="navigation">
                                          <?php if (!empty($secondary_nav)): ?>
                                          <div class="btn btn-login">
                                          <div class="user-icon"></div>
                                            <?php print render($secondary_nav); ?>
                                          </div>
                                          
                                          <?php endif; ?>
                                          <?php if (!empty($page['navigation'])): ?>
                                          <div class="btn btn-login">
                                          <div class="user-icon"></div>
                                            <?php print render($page['navigation']); ?>
                                          </div>
                                          
                                          <?php endif; ?>
                                        </nav>
                                    <?php endif; ?>
                            </div>
                        </div>
      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    <!-- </div> -->

  </div>
<!-- </header>  -->



<div class="main-nav pull-right hidden-xs hidden-sm">
      <div class="hidden-md hidden-lg" id="close-menu">
        <span class="glyphicon glyphicon-remove"></span>
      </div>
        <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
        <?php endif; ?>
</div>

</div>
</div>
 <div>
<main class="container-fluid wrapper <?php print $container_class; ?>">
      
<!-- <section<?php //print $content_column_class; ?> -->
    <?php if (!empty($page['highlighted'])): ?>
      <section class="hero container-fluid">
         <div class="container">
          <div class="row">
              <?php print render($page['highlighted']); ?>
            </div>
          </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_first'])): ?>
      <section class="highlights container-fluid">
          <div class="container">
            <div class="row">
              <?php print render($page['sidebar_first']); ?>
            </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

    <?php if (!empty($page['bottom_first'])): ?>
      <section class="why-choose-five9 container-fluid">
          <div class="container">
            <div class="row">
              <?php print render($page['bottom_first']); ?>
            </div>
        </div>
      </section><!-- /#document -->
    <?php endif; ?>
     <?php if (!empty($page['bottom_second'])): ?>
      <section class="closing-cta container-fluid">
          <div class="container">
            <div class="row">
              <?php print render($page['bottom_second']); ?>
            </div>
        </div>
      </section><!-- /#document -->
    <?php endif; ?>

</main>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="<?php print $container_class; ?>">
    <div class="row">
      <div class="container copyright-info">
        <?php print render($page['footer']); ?>
        <a href="#main-header">
          <section class="col-xs-12" id="return-to-top">
              <h2>Return to Top</h2>
          </section>
        </a>
      </div>
  </div>
  </footer>

<?php endif; ?>
