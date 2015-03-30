<?php include('partials/header.php'); ?>
<?php include('partials/nav.php'); ?>
		<!-- Begin BitSharesX intro -->
		<section id="section1">
		
			<div class="summary bitsharesx-intro">
	
				<div class="container">
	
					<!-- Content -->
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1" >
							<h3 data-scroll-reveal="enter left and move 50px over 1.2s"><img src="http://playtalk.org/play_logo.png"  width="110"/></h3>
							<hr data-scroll-reveal>
							<p data-scroll-reveal><?=$translate[ $lang ][ "btsxintro" ]?>
							<a target="_blank" href="http://dacplay.org/" ><?=$translate[ $lang ][ "btsxurl" ]?></a></p>
							<a  href="#" data-toggle="modal" data-target="#walletModal" class="btn btn-default bolt-button-dark">
								<?=$translate[ $lang ][ "download_wallets" ]?> &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
								
							</a>
						</div>
						
					</div>
	
				</div>
<!--	<center>
		<p>
		<a class="btn btn-default  btn-success" href="bts:d.dacsun/approve" style="border-radius: 0px;margin-top: 64px;"><span class="ion-ios7-heart"></span> <?=$translate[ $lang ][ "delegate" ]?></a>
		</p>
	</center>-->
			</div>
	
		</section>

		 <!-- Modal -->	
		          						<div class="modal fade download" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
		          				           						  	 	 	   
		          						  	<div class="modal-dialog">
		          						  	<center> 
		          						
		          						  	
		          						              				            <a style="font-size: 72px;" type="button" class=" btn text-center" data-dismiss="modal" aria-hidden="true"><i class="ion-ios7-close-empty"></i></a>
		          						              				  		   
		          						  
		          						    	<div class="modal-content">
		          						      		<div class="modal-header">
		          						      		 <h1 style="font-size: 36px;margin-top: 18px;"><?=$translate[ $lang ][ "modal_title" ]?></h1>  
		          						      		
		          						     		</div><!-- end .modal-header -->
		          						      		<div class="modal-body">
		                                         						      			<div class="row">
		                                         						      			<div class="col-lg-6">
		          						      			<a href="#" class=" btn btn-default bolt-button-dark" style=""><?=$translate[ $lang ][ "btsx_32bit" ]?> <span class="ion-social-windows"  style="font-size: 18px;"></span></a>
		          						      			</div>
		          						      			<div class="col-lg-6">
		          						      			<a href="/binaries/pls/PLAY-0.0.2-x64.exe" class="btn btn-default bolt-button-dark" ><?=$translate[ $lang ][ "btsx_64bit" ]?> <span class="ion-social-windows" style="font-size: 18px;"></span></a>
		          						      			</div>
		          						      			<div class="col-lg-12">
		          						      			<a href="/binaries/pls/PLAY-0.0.2.dmg" class="btn btn-default bolt-button-dark" ><?=$translate[ $lang ][ "btsx_osx" ]?> <span class="ion-social-apple" style="font-size: 18px;"></span></a>
		          						      			</div>
		          						      			</div>
		          						      				          						      			   </div>  
		          						      				          						      			  <div class="col-lg-12">
		          						      				          						      			   <center>
		          						      				          						      			   <p style="color: #FFF; font-size: 16px;padding-top: 24px;"><?=$translate[ $lang ][ "btsx_linux1" ]?>pls/0.0.2<?=$translate[ $lang ][ "btsx_linux2" ]?></p></center>
		          						      				          						      			   <code style="font-size: 11px;">git clone https://github.com/dacsunlimited/dac_play.git</code><br>
		          						      				          						      			   <code style="font-size: 11px;">git checkout pls/0.0.2</code>
		          						      				          						      			   </div>
		          						      				          						      			   
		          						      </div><!-- end .modal-body -->
		
		          						    	</div><!-- end .modal-content -->
		          						  	</div><!-- end .modal-dialog -->
		          						  	</center>
		          						</div><!-- end #model -->
		          
		
		<!-- End BitSharesX intro -->
	

	
	

	<!-- Begin Summary -->
	<section id="section2">
	
		<div class="summary">

			<div class="container">

				<!-- Content -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s"><?=$translate[ $lang ][ "dactitle" ]?></h3>
						<hr data-scroll-reveal>
						<p data-scroll-reveal><?=$translate[ $lang ][ "daccontent" ]?></p>
						<!--<a data-scroll-reveal="enter right and move 50px over 1.2s" href="#" data-id="section5" class="btn btn-default bolt-button-dark scroll-link">
							<?=$translate[ $lang ][ "ourdacs_btn" ]?> &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
						</a>-->
					</div>
				</div>


</div>
		</div>

	</section>
	<!-- End Summary -->

	<!-- Begin News -->
	<section id="section7" style="display: none;">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Stay tuned!</h3>
					<hr>
					<p>Hot Announcements here!</p>
				</div>
			</div>


			<!-- News Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">
			    <li class="item branding col-xs-4 no-padding">
			    	<a data-toggle="modal" href="news/news-1.html" data-target="#myModal">
						<img src="img/news/thumbs/news1.jpg" alt="..." />
						<span class="portfolio-hover">
						  <span>
						  	<span class="portfolio-title">BitSharesX now live</span><br>
						  	<span class="portfolio-category">2014-07-07</span>
						  </span>
						</span>
					</a>
			    </li>
			    
			    <li class="item print col-xs-4 no-padding">
			    	<a data-toggle="modal" href="news/news-3.html" data-target="#myModal">
						<img src="img/news/thumbs/news3.jpg" alt="..." />
						<span class="portfolio-hover">
						  <span>
						  	<span class="portfolio-title">DACSun launched</span><br>
						  	<span class="portfolio-category">2014-07-07</span>
						  </span>
						</span>
					</a>
			    </li>
			   <li class="item web col-xs-4 no-padding">
			   	<a data-toggle="modal" href="news/news-2.html" data-target="#myModal">
			   	<img src="img/news/thumbs/news2.jpg" alt="..." />
			   	<span class="portfolio-hover">
			   	  <span>
			   	  	<span class="portfolio-title">TITAN launched</span><br>
			   	  	<span class="portfolio-category">2014-07-07</span>
			   	  </span>
			   	</span>
			   </a>
			   </li>
			  </ul>
			</div>

		</div>

	</section>
	<!-- End News -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body"></div>
	        </div> <!-- /.modal-content -->
	    </div> <!-- /.modal-dialog -->
	</div> <!-- /.modal -->

		<!-- Begin About DACsun -->
	<section id="section3">

		<div class="about">

			<div class="container">
				<div class="row">


					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3><?=$translate[ $lang ][ "title_about" ]?></h3>
						<hr>
					</div>

					<!-- Who We Are-->
					<div data-scroll-reveal="enter top and move 50px over 1.2s" class="col-sm-12">
						<center><h5><?=$translate[ $lang ][ "whoweare" ]?></h5>
						<p><?=$translate[ $lang ][ "whoweare_desc" ]?></p></center>
					</div> 


					<!-- Vision -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-12">
							<center><h5><?=$translate[ $lang ][ "vision_title" ]?></h5>
						<p><?=$translate[ $lang ][ "vision_desc" ]?></p></center>
					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End About DACsun -->




	<!-- Begin DAC listing  -->
<!--	<section id="section4">

		<div class="services summary ">

			<div class="container">

				<div class="row">




					<!-- DAC Title --*>
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3><?=$translate[ $lang ][ "dac_list_title" ]?></h3>
						<hr>
						<p><?=$translate[ $lang ][ "dac_list_subtitle" ]?></p>
					</div>

					<div class="col-lg-8 col-lg-offset-2" style="text-align: center;">

						<!-- Nav --*> 
						<ul class="nav nav-tabs" style="display:inline-block;">
						  <li class="active">
							  	<a href="#bank" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-arrow-graph-up-right services-icon"></span>
							  			<p><?=$translate[ $lang ][ "dac_bank" ]?></p>
							  		</div>
							  	</a>
						  </li>
						  <li >
						    	<a href="#dns" data-toggle="tab">
						    		<div class="services-icon-holder">
						    			<span class="ion-ios7-monitor services-icon"></span>
						    			<p><?=$translate[ $lang ][ "dac_domain" ]?></p>
						    		</div>
						    	</a>
						  </li>
						  <li>
							  	<a href="#game" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-game-controller-a services-icon"></span>
							  			<p><?=$translate[ $lang ][ "dac_game" ]?></p>  
							  		</div>
							  	</a>
						  </li>
						  <li>
							  	<a href="#cloud" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-cloud services-icon"></span>
							  			<p><?=$translate[ $lang ][ "dac_funding" ]?></p>
							  		</div>
							  	</a>
						  </li>
						  <li>
						    	<a href="#voting" data-toggle="tab">
						    		<div class="services-icon-holder">
						    			<span class="ion-compose services-icon"></span>
						    			<p><?=$translate[ $lang ][ "dac_voting" ]?></p>
						    		</div>
						    	</a>
						  </li>
						  <li>
							  	<a href="#music" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-music-note services-icon"></span>
							  			<p><?=$translate[ $lang ][ "dac_music" ]?></p>
							  		</div>
							  	</a>
						  </li>
						  <li>
							  	<a href="#insurance" data-toggle="tab">
							  		<div class="services-icon-holder">
							  			<span class="ion-umbrella services-icon"></span>
							  			<p><?=$translate[ $lang ][ "dac_insurance" ]?></p>
							  		</div>
							  	</a>
						  </li>
						 
						</ul>

					</div>

					<!-- DAC Content --*>
					<div class="col-lg-8 col-lg-offset-2">
						<div class="tab-content">
						  <div class="tab-pane fade active in" id="bank"><?=$translate[ $lang ][ "dac_bank_desc" ]?></div>
						  <div class="tab-pane fade" id="dns"><?=$translate[ $lang ][ "dac_domain_desc" ]?></div>
						  <div class="tab-pane fade" id="game"><?=$translate[ $lang ][ "dac_game_desc" ]?></div>
						  <div class="tab-pane fade" id="cloud"><?=$translate[ $lang ][ "dac_funding_desc" ]?></div>
						  <div class="tab-pane fade" id="voting"><?=$translate[ $lang ][ "dac_voting_desc" ]?></div>	  
						  <div class="tab-pane fade" id="music"><?=$translate[ $lang ][ "dac_music_desc" ]?></div>
						  <div class="tab-pane fade" id="insurance"><?=$translate[ $lang ][ "dac_insurance_desc" ]?></div>  
					</div>

				</div>

			</div>

		</div>

	</section>-->
	<!-- End DAC listings -->

	<!-- Begin Quote -->
	<div class="quote" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".quote-content">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">
				<!-- Form -->
				<!-- Begin MailChimp Signup Form -->
				
						<div id="mc_embed_signup" data-scroll-reveal="enter top and move 50px over 1.5s" >
						<form action="//invictus.us3.list-manage.com/subscribe/post?u=ac6976e87d9e9f0eac4bbf19c&amp;id=d34079ef72" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							
							<input class="form-control" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;"><input type="text" name="b_ac6976e87d9e9f0eac4bbf19c_d34079ef72" tabindex="-1" value=""></div>
						    <div class="clear"><input data-scroll-reveal="enter bottom and move 50px over 1s" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default bolt-button-send bolt-quote-name"></div>
						 
						</form>
						</div>
						
						<!--End mc_embed_signup-->
				
							
					
				</div>

			</div>

		</div>

	</div>
	<!-- End Quote -->

	<!-- Begin Contact -->
	<section id="section5">

		<div class="contact">

			<div class="container">

				<!-- Page Title -->
				<div class="col-lg-10 col-lg-offset-1 page-title">
					<h3><?=$translate[ $lang ][ "contact_title" ]?></h3>
					<hr>
				</div>

				<!-- Address -->
				<div class="col-md-5 col-md-offset-1">
					<p class="contact-info">
						<em><?=$translate[ $lang ][ "contact_info" ]?></em>
					</p>
				</div>

				<!-- Phone Number -->
				<div class="col-md-2">
					<p class="contact-info"><?=$translate[ $lang ][ "contact_phone" ]?></p>
				</div>

				<!-- Email -->
				<div class="col-md-3">
					<p class="contact-info-email"><a href="mailto:info@dacsunlimited.com"><strong>info[at]dacsunlimited.com</strong></a></p>
				</div>
			</div>

		</div>

	</section>
	<!-- End Contact -->


<!-- Begin Call to Action / Jobs -->
	<div class="cta">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<p>
						<?=$translate[ $lang ][ "jobs" ]?>
					</p>
				</div>
				<div class="col-lg-2">
					<a href="mailto:info@dacsunlimited.com" data-id="section6" class="btn btn-default bolt-button-cta scroll-link">
						<?=$translate[ $lang ][ "contact_btn" ]?>
					</a>
				</div>
				<div class="col-lg-4">
					<p>
					<?=$translate[ $lang ][ "hiring" ]?>
					</p>
				</div>
			</div>

		</div>

	</div>
	<!-- End Call to Action -->




	<!-- Begin Footer -->
	<footer id="footer">

		<div class="container">
			
			<!-- Copyright And Social -->
			<div class="col-sm-5">
				<p class="copyright no-margin"><?=$translate[ $lang ][ "copyright" ]?></p>
			</div>

			<!-- Go To Top -->
			<div class="col-sm-3 text-center">
				<p class="no-margin" style="text-align: center"><span class="ion-ios7-arrow-up up-icon scroll-top" style="display: inline-block;"></span></p>
			</div>

			<!-- Love -->
			<div class="col-sm-4 made-with-love">
				<p class="no-margin"><?=$translate[ $lang ][ "made_with_love" ]?></p>
			</div>

		</div>

	</footer>
	<!-- End Footer --> 

	<!-- Javascript Files -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/portfolio.js"></script>
	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/ticker.js"></script>
	<script type="text/javascript" src="js/modal-fix.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/start-skrollr.js"></script>	
	<script type="text/javascript" src="js/scrollReveal.js"></script>
	<script type="text/javascript">
		window.scrollReveal = new scrollReveal();
		//activate scrollReveal.js
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-53814821-2', 'auto');
	  ga('send', 'pageview');
	
	</script>
</body>
</html>
