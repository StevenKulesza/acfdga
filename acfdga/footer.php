<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if (!is_page(array ('contact','home'))) : ?>
	<?php /* get_template_part( 'partials/call', 'to-action' ); */ ?>
<?php endif; ?>
	
	<footer class="site-footer" id="colophon">
		
		<div class="container text-center">
			<div class="row">
			  <div class="col-8 offset-2 col-md-4 offset-md-4">
				  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'themeslug_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' style="margin-bottom: 2rem;" /></a>
				  
				  <p><a href="#loc1-modal" class="modal-trigger" data-toggle="modal" title="Click to Get Customized Directions"><?php echo get_theme_mod( 'themeslug_address_street' ); ?> <?php echo get_theme_mod( 'themeslug_address_city' ); ?>, <?php echo get_theme_mod( 'themeslug_address_state' ); ?> <?php echo get_theme_mod( 'themeslug_address_zip' ); ?></a><br />
			<strong>Phone:</strong> <?php echo get_theme_mod( 'themeslug_phone' ); ?></p>
				  
				  <form action="<?php bloginfo('url'); ?>" method="get" style="margin-bottom: 2rem;">
						<div class="input-group input-group-sm">
							<label class="sr-only" for="s">Search Box</label>
							<input id="s" type="text" name="s" class="form-control" placeholder="Search for...">
						      <span class="input-group-btn">
						        <button class="btn btn-secondary" type="button"><i class="fa fa-search fa-inverse"></i></button>
						      </span>
						</div><!-- /.input-group -->
					</form>
			  </div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/2017-award.png" alt="2017 Talk Awards" style="margin-bottom: 1rem;" />
				</div>
				<div class="col-lg-4">
					<h4 class="widget-title">About Us</h4>
					<p><?php echo get_theme_mod( 'themeslug_footer_about_text' ); ?></p>
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/aba.jpg" alt="Alpharetta Business Association" />
				</div>
				<div class="col-lg-4 text-lg-right">
					<?php dynamic_sidebar( 'footerfull' ); ?>
				</div>
			</div>
			
			<div id="footer-credits" class="row">
					<div class="col-sm-7 text-center text-md-left">
						<p>
						<?php if (get_theme_mod ( 'themeslug_show_priv') == 'value1'  ) : ?>
							<a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> | 
						<?php endif; ?>
						<?php if (get_theme_mod ( 'themeslug_show_disclaimer') == 'value1'  ) : ?>
							<a href="<?php bloginfo('url'); ?>/disclaimer">Disclaimer</a> | 
						<?php endif; ?>
						<?php if (get_theme_mod ( 'themeslug_show_sitemap') == 'value1'  ) : ?>
							<a href="<?php bloginfo('url'); ?>/site-map">Sitemap</a>
						<?php endif; ?>
						</p>
					</div><!-- /col-sm-7 -->
					
					<div class="col-sm-5 text-center text-md-right">
						<?php if (get_theme_mod ( 'themeslug_powered_type') == 'value1'  ) : ?>
							<p id="powered"><img src="http://www.killershark.me/images/shark-icon.svg" onerror="this.onerror=null; this.src='http://www.killershark.me/images/shark-icon.png'"> Powered by <a href="http://www.killershark.me" target="_blank">Killer Shark</a></p>
						<?php else : ?>
							<p><a href="<?php echo get_theme_mod( 'themeslug_powered_wl_a' ); ?>" target="_blank"><?php echo get_theme_mod( 'themeslug_powered_wl_text' ); ?></a></p>
						<?php endif; ?>
					</div><!-- /col-sm-5 -->
				</div>
		
		</div><!-- /.container -->
		
		<?php if (get_theme_mod ( 'themeslug_show_addl_disclaimer') == 'value1'  ) : ?>
			<div class="container text-center">
				<hr />
				<div class="row">
					<div class="col-12">
						<p><small><em><?php echo get_theme_mod( 'themeslug_disclaimer' ); ?></em></small></p>
					</div>
				</div>
			</div><!-- /.container -->
		<?php endif; ?>
	
	</footer><!-- #colophon -->
</div><!-- /#main-content -->

<?php if (!is_page('contact')) : ?>
	<?php if (get_theme_mod ( 'themeslug_show_slideout_form') == 'value1'  ) : ?>
		<?php get_template_part( 'partials/slideout', 'question' ); ?>
	<?php endif; ?>
<?php endif; ?>

<?php if (get_theme_mod ( 'themeslug_show_bubble_phone') == 'value1'  ) : ?>		
	<?php get_template_part( 'partials/bubble', 'phone' ); ?>
<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/f122c5b326.js"></script>

<?php echo get_theme_mod('themeslug_google_analytics') ?>

<!-- Animated Menu Icon -->
<script>
  (function() {

    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };

    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      });
    }

  })();
</script>

<!-- Video Modal -->
<link rel='stylesheet' href='https://builtbym.s3.us-east-2.amazonaws.com/lity.min.css' type='text/css' media='all' />
<script type='text/javascript' src='https://builtbym.s3.us-east-2.amazonaws.com/lity.min.js'></script>

<!-- Mobile Slide Out Nav -->
<script>
	jQuery(document).ready(function() {   
            var sideslider = jQuery('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                jQuery(sel).toggleClass('in');
                jQuery(sel2).toggleClass('out');
            });
            var headerHeight = jQuery('#wrapper-navbar').outerHeight();
			jQuery('#navbarNav').css('top', headerHeight + 'px');
        });
</script>

<!--- Slide Out Form -->
<script>
	jQuery(document).ready(function() {
	  // Snuggle bar toggle
	  jQuery('#open-form-btn').click(function(){
	    if (jQuery('#slideout-form').hasClass('slideout-form-opened') != true){
	      jQuery('#slideout-form').animate({left: '+=500'}, 350, function() {
	        jQuery('#slideout-form').toggleClass('slideout-form-opened');
	      });
		} else {
	      jQuery('#slideout-form').animate({left: '-=500'}, 350, function() {
	        jQuery('#slideout-form').removeClass('slideout-form-opened');
	      });
	    }
	  });
	  // Snuggle bar close button
	  jQuery('#close-form-btn').click(function(){
	    jQuery('#slideout-form').animate({left: '-=500'}, 350, function() {
	      jQuery('#slideout-form').removeClass('slideout-form-opened');
	    });
	  });
	});
</script>

<!-- Close Phone Bubble -->
<script>
	jQuery(function() {                    
		jQuery(".close-bubble").click(function() {
			jQuery('#bubble-phone').addClass("hidden-xl-down");
		});
	});
</script>

<!-- Share Buttons -->
<?php if (is_single()) : ?>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/rrssb.css">
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/rrssb.min.js"></script>
<?php endif; ?>

<!-- BoldChat Visitor Monitor HTML v5.00 (Website=Silverman - acfdga.com,ChatButton=Silverman - acfdga.com,ChatInvitation=Silverman - acfdga.com) -->
<script type="text/javascript">
  window._bcvma = window._bcvma || [];
  _bcvma.push(["setAccountID", "342824420564265997"]);
  _bcvma.push(["setParameter", "WebsiteID", "739170569031409556"]);
  _bcvma.push(["setParameter", "InvitationID", "3567573452154203713"]);
  _bcvma.push(["addFloat", {type: "chat", id: "1745402134213693649"}]);
  _bcvma.push(["pageViewed"]);
  var bcLoad = function(){
    if(window.bcLoaded) return; window.bcLoaded = true;
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/342824420564265997/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  };
  if(window.pageViewer && pageViewer.load) pageViewer.load();
  else if(document.readyState=="complete") bcLoad();
  else if(window.addEventListener) window.addEventListener('load', bcLoad, false);
  else window.attachEvent('onload', bcLoad);
</script>
<noscript>
<a href="http://www.boldchat.com" title="Live Support" target="_blank"><img alt="Live Support" src="https://vms.boldchat.com/aid/342824420564265997/bc.vmi?wdid=739170569031409556" border="0" width="1" height="1" /></a>
</noscript>
<!-- /BoldChat Visitor Monitor HTML v5.00 -->

<?php get_template_part( 'partials/footer', 'scripts' ); ?>

</body>

</html>