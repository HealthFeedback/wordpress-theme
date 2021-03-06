<?php if ( ! is_page_template( 'template-campaign.php' ) ) { ?>
<footer class="content-info" role="contentinfo" id="content-info">
  <div class="container">
	<div class="row">
	  	<h3>health feedback </h3>
	  	<hr/>
	  	<div class="col-sm-3 col-xs-6">
	  		<img
          style="padding-top: -0.2em;" max-width="400px"
          src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/healthfeedback_logo_white.png">
	  	</div>
	  	<div class="col-sm-3 col-xs-6">
	  		<h4>COMMUNITY</h4>   
            <p class="small"><a href="/community/">Reviewers</a></p>
            <p class="small"><a href="https://sciencefeedback.co/community-standards/">Community standards</a></p>
            <p class="small"><a href="/for-scientists/">Apply to become a reviewer</a></p>
	  	</div>
	  	<div class="col-sm-3 col-xs-6">
	  		<h4>ORGANIZATION</h4>
            <p class="small"><a href="https://sciencefeedback.co/about/">About</a></p>
            <p class="small"><a href="/process/">Our method to evaluate articles</a></p>
            <p class="small"><a href="https://sciencefeedback.co/claim-reviews-framework/">Our method to evaluate claims</a></p> 
            <!--  
            <p class="small"><a href="/contact-us/">Submit an item to review</a></p>
            <p class="small"><a href="/partners-funders-donors/">Partners and funders</a></p>
            -->
	  	</div>
	  	<div class="col-sm-3 col-xs-6">
			<h4 >GET IN TOUCH</h4>
			<p class="small"><a href="/contact-us/">Contact us</a></p>
            <h4 class="spaceup05">FOLLOW US</h4>
            <div class="social-footer">
                <a href="https://www.facebook.com/HealthFeedback/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/HealthFeedback" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
	  	</div>
  	</div>
  </div>
</footer>
<?php } ?>
