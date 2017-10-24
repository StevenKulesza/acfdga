<div class="navbar-header">

	<div class="container">
	
			<div class="row align-items-center">
				
					<?php if (get_theme_mod('themeslug_logo_size') == 'value1') { ?>
						<div class="col-3 hidden-lg-up">
					<?php } elseif (get_theme_mod('themeslug_logo_size') == 'value2') { ?>
						<div class="col-3 hidden-lg-up">
					<?php } elseif (get_theme_mod('themeslug_logo_size') == 'value3') { ?>
						<div class="col-2 hidden-lg-up">
					<?php } ?>
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button class="c-hamburger c-hamburger--htx" type="button" data-toggle="collapse-side" data-target=".collapse" data-target-2="#main-content" aria-controls="navbarNav" aria-expanded="false"
							aria-label="Toggle navigation">
							<span>toggle menu</span>
						</button>
				
					</div>
					
						<div class="col-6 col-lg-4 offset-lg-4">
							
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
							
							<?php if ( get_theme_mod( 'themeslug_logo_mobile' ) ) : ?>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'themeslug_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="logo" class="hidden-sm-down"></a>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'themeslug_logo_mobile' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="logo" class="hidden-md-up"></a>
							<?php else : ?>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo get_theme_mod( 'themeslug_logo' ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' id="logo"</a>
							<?php endif; ?>
								</div><!-- /.col-lg-10- -->
							</div><!-- /.row -->
							
						</div>
			
				<?php if (get_theme_mod('themeslug_logo_size') == 'value1') { ?>
					<div class="col-3 text-right hidden-lg-up">
				<?php } elseif (get_theme_mod('themeslug_logo_size') == 'value2') { ?>
					<div class="col-3 text-right hidden-lg-up">
				<?php } elseif (get_theme_mod('themeslug_logo_size') == 'value3') { ?>
					<div class="col-2 text-right hidden-lg-up">
				<?php } ?>	
				
					<a href="tel:<?php echo get_theme_mod( 'themeslug_phone' ); ?>" class="mobile-phone-button btn-round pull-right"><span><i class="fa fa-phone fa-2x"></i></span></a>
				</div>
				
			</div><!-- /.row -->
	</div><!-- /.container -->
	
	<div id="navWrapper">
		<div class="container nav-container">
			<div class="row nav-row">
				<?php get_template_part( 'partials/nav', 'mega-menu'); ?>
			</div>
		</div><!-- /.container -->
	</div><!-- /#navWrapper -->
	
</div><!-- /.navbar-header -->