<div id="bar-hello" class="bar">
<div class="container">
  
  <div class="row">
    <div class="col-md-4 col-lg-5 text-center text-lg-left">
      <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i></span> 
      
      <a href="<?php echo get_theme_mod( 'themeslug_bar_hello_url' ); ?>">
      <span class="hidden-md-down">11 REASONS TO CHOOSE ADVANCED COSMETIC & FAMILY DENTISTRY</span>
      <span class="hidden-lg-up">11 REASONS TO CHOOSE US</span>
      </a>&nbsp;&nbsp;
  
      <?php if (get_theme_mod ( 'themeslug_bar_hello_btn_text') ) : ?>
        <a href="<?php echo get_theme_mod( 'themeslug_bar_hello_url' ); ?>" class="btn btn-primary btn-sm"><?php echo get_theme_mod( 'themeslug_bar_hello_btn_text' ); ?> <i class="fa fa-angle-right"></i></a>
      <?php endif; ?>
    </div>
    
    <div class="col-md-4 col-lg-2 text-center hidden-sm-down">
    <a href="https://www.healthgrades.com/dentist/dr-brett-silverman-ymp6y" target="_blank" class="social-icon heatlthgrades" title="Healthgrades reviews">
      <span class="fa-stack fa-lg" style="color: #292b2c;">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
      </span>
    </a>
    <a href="<?php echo get_theme_mod( 'themeslug_gplus' ); ?>" target="_blank" class="social-icon gplus" title="Google reviews">
      <span class="fa-stack fa-lg" style="color: #292b2c;">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
      </span>
    </a>
    <a href="<?php echo get_theme_mod( 'themeslug_facebook' ); ?>" target="_blank" class="social-icon fb" title="Facebook reviews">
      <span class="fa-stack fa-lg" style="color: #292b2c;">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
      </span>
    </a>
    </div>
    
    <div class="col-md-4 col-lg-5 text-center text-lg-right hidden-sm-down">
      <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-map-marker fa-stack-1x fa-inverse"></i></span> 
      
      <a href="#loc1-modal" class="modal-trigger" data-toggle="modal" title="Click to Get Customized Directions">
        <span class="hidden-md-down"><?php echo get_theme_mod( 'themeslug_address_street' ); ?> <?php echo get_theme_mod( 'themeslug_address_city' ); ?>, <?php echo get_theme_mod( 'themeslug_address_state' ); ?> <?php echo get_theme_mod( 'themeslug_address_zip' ); ?></span>
        <span class="hidden-lg-up">Directions</span>
      </a>
    </div>
  </div>

</div>
</div><!-- /#hello-bar -->