	<!-- Begin Navigation -->
	<div class="navbar">

		<div class="container">

			<div class="navbar-header">

				<!-- Brand --><div class="logo-wrapper">
				<a href="javascript:void(0);" class="navbar-brand scroll-top">
				
											<h6  class="ion-ios7-sunny-outline logo-icon"><small><img class="logo-typo" src="img/logo.svg" /></small></h6>
						
				</a>
        </div> 
				<!-- Mobile Navigation -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="ion-navicon toggle-icon"></span>
				</button>

			</div>

			<!-- Main Navigation -->
			<nav class="navbar-collapse collapse navHeaderCollapse" id="myScrollSpy" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#section1" data-id="section1" class="scroll-link"><?=$translate[ $lang ][ "btsx" ]?></a></li>
					<li><a href="#section2" data-id="section2" class="scroll-link"><?=$translate[ $lang ][ "dac?" ]?></a></li>
					<li><a href="#section3" data-id="section3" class="scroll-link"><?=$translate[ $lang ][ "about" ]?></a></li>
<!--					<li><a href="#section4" data-id="section4" class="scroll-link"><?=$translate[ $lang ][ "dacs" ]?></a></li>-->
					<li><a href="#section5" data-id="section5" class="scroll-link"><?=$translate[ $lang ][ "contact" ]?></a></li>
				<li>	<a href="https://github.com/dacsunlimited/BitSharesX/" class="" target="_blank"><i class="ion-beaker"></i></a></li>
				<li>
				<?php
				 foreach ($languages as $l) {
				if ($lang!=$l) echo '<a style="" href="?lang=' . $l . '" >' . $translate[ $l ][ $l ] . '</a>';
				 }
				?>  
				</li>
				</ul>
			</nav>

		</div>

	</div>
	<!-- End Navigation -->
	