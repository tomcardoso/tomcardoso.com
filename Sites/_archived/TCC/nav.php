	<div class="header">
	<div class="header-inner">
		<div class="row"> <!-- NAV -->
			<div class="span12">
				<div class="logo pull-left"><a href="http://www.testicularcancercanada.ca"><img src="/img/logo_nav.png" alt=""></a></div>
				<div class="nav pull-right">
				
					<?php
						function get_current($name) {
							if (strpos($_SERVER['REQUEST_URI'], $name) !== false) {
								echo 'class="navbutton arrow"'; }
							else { 
								echo 'class="navbutton"'; }
						}
					?>

					<a <?php get_current('index') ?> href="/index">Home</a>
					<a <?php get_current('testicular') ?> href="/testicularcancer">Testicular Cancer</a>
					<a <?php get_current('stories') ?> href="/stories">Stories</a>
					<a <?php get_current('whoweare') ?> href="/whoweare">Who We Are</a>
					<a <?php get_current('blog') ?> href="/blog">Blog</a>
					<a class="navbutton donate" href="/donate" onClick="_gaq.push(['_trackEvent', 'DONATE', 'BUTTON CLICK']);">Donate</a>
					<!-- <a class="navbutton donate shoplocket-checkout" data-shoplocket-product-token="A3QBe" href="" onClick="_gaq.push(['_trackEvent', 'DONATE', 'BUTTON CLICK']);">Donate</a> -->
				</div>
			</div>
		</div> <!-- NAV -->