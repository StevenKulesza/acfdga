<div id="navbarNav" class="collapse navbar-collapse
	
		<?php if (get_theme_mod('themeslug_nav_main_align') == 'value1') { ?>
			justify-content-start
		<?php } elseif (get_theme_mod('themeslug_nav_main_align') == 'value2') { ?>
			justify-content-center
		<?php } elseif (get_theme_mod('themeslug_nav_main_align') == 'value3') { ?>
			justify-content-end
		<?php } ?>
	
	">
<ul class="nav navbar-nav">
	<li class="nav-item hidden-lg-up"><a class="nav-link" href="<?php bloginfo('url'); ?>">Home</a></li>
	
	<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="<?php bloginfo('url'); ?>/about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
		<div class="dropdown-menu">
			<ul>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/dr-silverman">Meet Dr. Silverman</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/meet-the-team">Meet the Team</a></li>
			</ul>
		</div>
	</li>
	
	<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
		<div class="mega-menu mega-menu-3-col dropdown-menu">
			<div class="row">
				<div class="col-lg-4">
					<ul>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/antibiotic-treatment/">Antibiotic Treatment</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/bruxism-or-teeth-grinding/">Bruxism (Teeth Grinding)</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/porcelain-crowns/">Crowns</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/crown-lengthening/">Crown Lengthening</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/composite-fillings/">Composite Fillings</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/dentures-partials/">Dentures &amp; Partials</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/dental-exams-cleanings/">Dental Exams &amp; Cleanings</a></li>
					    <li><a class="nav-link" href="<?php bloginfo('url'); ?>/dental-implants/">Dental Implants</a></li>
					</ul>
				</div>
				<div class="col-lg-4">
					<ul>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/dental-xrays/">Dental X-Rays</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/porcelain-fixed-bridges/">Fixed Bridges</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/home-care/">Home Care</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/invisalign/">Invisalign</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/oral-cancer-exam/">Oral Cancer Exam</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/orthodontics/">Orthodontics</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/periodontal-disease/">Gum Disease Treatment</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/porcelain-veneers/">Porcelain Veneers</a></li>
					</ul>
				</div>
				<div class="col-lg-4">
					<ul>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/root-canal-therapy/">Root Canal Therapy</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/root-planing-and-scaling/">Root Planing &amp; Scaling</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/sleep-apnea/">Sleep Apnea</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/teeth-whitening/">Teeth Whitening</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/tmj/">TMJ</a></li>
						<li><a class="nav-link" href="<?php bloginfo('url'); ?>/needle-free-dental-anesthesia/">Needle-Free Dental Anesthesia</a></li>
					</ul>
				</div>
			</div>
		</div>
	</li>
	
	<li class="nav-item dropdown split-left"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient Info</a>
		<div class="dropdown-menu">
			<ul>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/360-degree-virtual-office-tour">360 Degree Virtual Office Tour</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/smile-gallery">Smile Gallery</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/patient-forms">Patient Forms</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/financial-options">Financial Options</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/faqs">FAQ's</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/reviews">Patient Reviews</a></li>
				<li><a class="nav-link" href="<?php bloginfo('url'); ?>/video-library">Videos</a></li>
			</ul>
		</div>
	</li>
	
	<li class="nav-item split-right"><a class="nav-link" href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
	<li class="nav-item"><a class="nav-link" href="<?php bloginfo('url'); ?>/contact-us">Contact</a></li>
	
	<?php if (get_theme_mod ( 'themeslug_nav_top_on') == 'value1'  ) : ?>
		<?php get_template_part( 'partials/nav', 'top-mobile'); ?>
	<?php endif; ?>
	
	<?php if (get_theme_mod ( 'themeslug_nav_main_btn_on') == 'value1'  ) : ?>
		<li class="nav-item hidden-sm-down phone-btn"><a class="btn btn-primary
			
			<?php if (get_theme_mod('themeslug_nav_main_btn_size') == 'value1') { ?>
				btn-sm
			<?php } elseif (get_theme_mod('themeslug_nav_main_btn_size') == 'value2') { ?>
				
			<?php } elseif (get_theme_mod('themeslug_nav_main_btn_size') == 'value3') { ?>
				btn-lg
			<?php } ?>
			
			" href="tel:<?php echo get_theme_mod( 'themeslug_phone' ); ?>"><?php echo get_theme_mod( 'themeslug_phone' ); ?></a></li>
	<?php endif; ?>

	
</ul>
</div><!-- /#navbarNav -->