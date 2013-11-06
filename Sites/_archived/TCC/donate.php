<!DOCTYPE html>
<html lang="en">

<?php 

$pageTitle = 'Donate &middot; Testicular Cancer Canada';
include_once('header.php'); 

?>

	</div> <!-- HEADER-INNER -->
</div> <!-- HEADER -->

<div class="container">
	<div class="container-inner">
	
		<div class="row">
			<div class="span10 offset1">
		
				<div class="container-legal">
					
					<div class="donate">
						<h2>100% to Programs</h2>
						<hr>
						<p>When you donate to Testicular Cancer Canada, you&rsquo;re not only helping to fight the most prevalent cancer among young men; you&rsquo;re also signing on to a future where no man loses his life to testicular cancer.</p>
						<p class="subhead">Four ways to donate to Testicular Cancer Canada</p>

						<!-- <p><span>1)</span> Online using <a class="shoplocket-checkout" data-shoplocket-product-token="A3QBe" onClick="_gaq.push(['_trackEvent', 'DONATE', 'SHOPLOCKET CLICK']);" href="" ><img src="img/shoplocket.png" /></a></p> -->
						
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

						<span>1)</span> Online using
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="Y223SPH84VEZC">
						<input src="img/paypal.png" name="submit" width="81" type="image" border="0" height="22" onClick="_gaq.push(['_trackEvent', 'DONATE', 'PAYPAL CLICK']);">
						</form>						
						<p><span>2)</span> Email to <a href="mailto:donate@testicularcancercanada.ca">donate@testicularcancercanada.ca</a></p>
						<p><span>3)</span> Phone at 519-894-0134</p>
						<p><span>4)</span> Mail at 45058-310 Fairway Rd; Kitchener, ON N2C 1X0</p>
						<p class="subhead">Sponsorship and Major Gifts</p>
						<p>To make a larger donation to Testicular Cancer Canada, either as a sponsor or in memoriam, please email <a href="mailto:donate@testicularcancercanada.ca">donate@testicularcancercanada.ca</a>.</p>
						<p class="subhead">Host an event</p>
						<p>Events are a significant source of support for Testicular Cancer Canada. To organize an event in your area please email <a href="mailto:hello@testicularcancercanada.ca">hello@testicularcancercanada.ca</a> with your event&rsquo;s details.</p>
						<p>In exchange for organizing an event, Testicular Cancer Canada will supply resources and, where possible, a guest speaker at larger events.</p>	
					</div>
						
				</div> <!-- /CONTAINER-LEGAL -->
				
			</div>
			
			<div class="span1">
			</div>
		
		</div> <!-- /ROW -->
		
	</div> <!-- /CONTAINER-INNER -->
</div> <!-- /CONTAINER -->

<?php include_once('footer.php'); ?>

</body>
</html>