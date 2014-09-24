		<!-- section -->
		<section  class="home-marquee">
            <div class="marquee-list">
                <?php echo get_field('main_marquee_list', 4); ?>
            </div>
            <div class="arrow-right"></div>
            <img src="<?php echo get_field("main_image", 4); ?>">

		</section>
		<!-- /section -->
        <div class="orange-panel">
            <div class="contact-quote"><span class="line-one">CONTACT US FOR YOUR</span><br><span class="line-two">FREE ESTIMATE</span><img src="<?php echo get_template_directory_uri(); ?>/img/contact-arrow.png"></div>
            <div class="contact-btn"><a class="contact-btn-link" href="#mc-start-link">GET STARTED</a></div>
        </div>