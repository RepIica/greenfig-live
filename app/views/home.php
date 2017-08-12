<?php require VIEW_ROOT . '/templates/header.php'; ?>
<div class="row section2">
	<div class="row">
		<!--<img src="images/bagel-coffee.png" class="bg img-responsive">-->
		<div class="col-md-12">				
			<p id="savor">Savor the Moment<br><span>Remember the Taste</span></p>
			<div class="col-sm-5 col-sm-offset-1 morefig" id="left">
				Since Fall 2011 The Green Fig Bakery Cafe has treated our customers to our unique selection of European coffees, organic teas, gourmet artisan sandwiches, vegan and vegetarian sandwiches, an irresistible selection of salads, and baked goods. Most of our ingredients are products from our own kitchen such as, our hand-rolled bagels, our ROSO coffee beans, ROSO gluten free balsamic glaze (vegan friendly), and much more!
			</div>
			<div class="col-sm-5 morefig">
				Indulge the rest of your senses with a vibrant and colorful atmosphere, vintage artwork, or the serenade of the guitar. Our tasty meals travel on a two floor dumbwaiter for your convenience. On weekends we show movies for your enjoyment or you may sit down and reminisce to the tunes of the 70’s and 80’s and some world friendly jazz. If you're in work mode, our reliable wifi can help you with that too.
			</div>
		</div>
	</div>
	<a href="https://www.facebook.com/Green-Fig-Bakery-Cafe-161680030540050/posts/?ref=page_internal">
		<div class="row specials"><div class="col-md-6 col-md-offset-3">Check out our weekly specials</div></div>
	</a>
	<div class="col-md-12"><div class="nav_divide full"></div></div>
</div><!--End row-->
<div class="row">
	<div class="col-md-12 nopad"><div id="map"></div></div>
</div>

<div id="menu">
    <div id="menubox">
	    <div class="row">
	    	<div class="col-xs-12 text-center"><h1>Menu</h1></div>
	    </div>
    	<hr id="menu-hr">
    	<?php if (empty($menu)): ?>
    		<p>Sorry, menu coming soon!</p>
    	<?php else: 

    		// set intial category
    		$curr_label = "";

    		//declares function to reference last element without affecting internal array pointer
    		function endc($array) { 
    			end($array); 
    			return ($array['name']); 
    		} 
			function endk($array) { 
    			end($array); 
    			return key($array); 
    		}
			
    		$last = endc($menuList);// sets last element of itemsByBrand
    		// $lastItem = endc($last);
    		$lastlabel = endk($itemsByBrand);
    		$lastItem = explode('|', $lastlabel);// gets primary label from sublabel
    		//echo e("last is $last");
    		
    	?>
    		<p><?php //echo e("lastitem is $lastItem[0]"); ?></p>
   			<?php foreach($itemsByBrand as $item => $menu): 
    			// $firstDate = reset($check_dates);
				// $lastDate = end($check_dates);
    		?>
    			<?php
    				// initialize boolean to determine if we must nest accordians
    				$is_sub = false;

    				// get the current category
    				$label = explode('|', $item);

    				// 
    				if (count($label) > 1) {
    					$item = $label[1];
    				}
    			?>
    			
    			<?php if ($curr_label != $label[0] && $curr_label != ""): ?>
					</div>  <!--/panel of sublabel-->
    			<?php endif; ?>


    			<?php if ($label[0] != $item && $curr_label != $label[0]): //if label is sublabel of current label
					$curr_label = $label[0];
					$is_sub = true; //label is sublabel
					if ($curr_label == $lastItem[0]){
						echo '<div id="menubox" style="padding-top: 0px;">';
					}
    			?>
	    			<button class="accordion">
	    				<div class="row">
	    					<div class="col-md-8 col-sm-7" id="item">
	    						<?php echo $label[0]; ?>
							</div>
	    				</div>
	    			</button>
    			<?php endif; ?><!--/if label is sublabel of current label-->

    			<?php if ($item=='The Bar'|$item=='The Herbal Garden'): ?><!--if labels w/ drink sizes-->
	    			<button class="accordion nopad">
	    				<div class="row">
	    					<div class="col-md-8 col-sm-7" id="itemwsize">
	    						<?php echo $item; ?>
							</div>
							<div class="col-md-4 col-sm-5 drinks">
								<p>
									<span class="hot">(HOT)</span>
									<span class="iced">(ICED)</span>
								</p>
								<div>
									<p class="sizes">10oz</p>
									<p class="sizes">16oz</p>
									<p class="sizes">16oz</p>
									<p class="sizes">24oz</p>	
								</div>
							</div>							
	    				</div>			
	    			</button>
	    		<?php else: ?><!--else label doesn't need drink sizes-->		    		
		    		<?php if ($is_sub): ?> <!-- if label is sublabel -->
		    			<div class="panel" style="margin:auto;">	
	    			<?php endif; ?> <!-- /if label is sublabel -->
		    			<button class="accordion">
		    				<div class="row">    								
		    					<div class="col-md-8 col-sm-7" id="item">
		    						<?php echo e($item); ?>
								</div>
		    				</div>			
		    			</button>	    			
				<?php endif; ?> <!--/if labels w/ drink sizes-->

    			<div class="panel" style="margin:auto;">
    			  	<?php foreach($menu as $menuList): ?>
    					<div class="row">

    						<div class="col-md-8 col-sm-7 name">
    							<h4><?php echo e($menuList['name']); ?></h4>
    						</div>

							<?php if (($menuList['price2'])==0.00): ?>
					    		<div class="col-md-4 col-sm-5">
	    							<h5><?php echo e($menuList['price']); ?></h5>
	    						</div>
					    	<?php else:?>
					    		<div class="col-md-4 col-sm-5">	    							
    								<?php if (($menuList['price'])==2.22): ?>
    									<h5 class="double"><?php echo 'DOUBLE'; ?></h5>
    								<?php else: ?>
    									<h5 class="prices"><?php echo e($menuList['price']); ?></h5>
    								<?php endif; ?>
    								<?php if (($menuList['price2'])==2.22): ?>
    									<h5 class="double"><?php echo 'DOUBLE'; ?></h5>
    								<?php else: ?>
    									<h5 class="prices"><?php echo e($menuList['price2']); ?></h5>
    								<?php endif; ?>
    								<?php if (($menuList['price3'])==2.22): ?>
    									<h5 class="double"><?php echo 'DOUBLE'; ?></h5>
    								<?php else: ?>
    									<h5 class="prices"><?php echo e($menuList['price3']); ?></h5>
    								<?php endif; ?>
    								<?php if (($menuList['price4'])==2.22): ?>
    									<h5 class="double"><?php echo 'DOUBLE'; ?></h5>
    								<?php else: ?>
    									<h5 class="prices"><?php echo e($menuList['price4']); ?></h5>
    								<?php endif; ?>
	    						</div>

					    	<?php endif; ?>

    					</div> <!--/row for name and price-->

    					<div class="row">
    						<div class="col-md-8 col-sm-7 dsc">
    							<p><?php echo e($menuList['dsc']); ?></p>
    						</div>
    					</div> <!--/row for description-->

						<?php if ($menuList['name']==$last): ?>
							</div>
						<?php endif ?>

    				<?php endforeach; ?> <!--/foreach $menu as $menuList-->
    			</div> <!--/panel dropdown-->

    		<?php endforeach; ?> <!--/foreach $itemsByBrand as $item => $menu-->
    	<?php endif; ?> <!--/if empty $menu-->
    	<?php //echo "curr_label is $curr_label" ?>
    </div> <!--/menubox-->
</div> <!--/menu-->



<script>
	//Menu accordion
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].onclick = function(){
	        this.classList.toggle("active");
	        this.nextElementSibling.classList.toggle("show");
	    };
	};
</script>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>

<style>
	#menu{
		margin:auto auto auto;
		background: rgb(170, 196, 182)
	}
	#menubox > .row{
		font-family: Roboto-Thin;
		color: rgb(120, 161, 137);
		text-transform: uppercase;	
	}
	#menubox{
		max-width: 1000px;
		width:100%;
		margin:auto;
		padding: 20px 20px 0px 20px;
		text-align:center;
		background: white;
	}
	.hot{
		padding-right: 75px;
		padding-left: 64px;
	}
	.drinks{
		margin-top: 10px;
		display: none;
	}
	.drinks > div{
		margin-top: -8px; text-align: center;
	}

	button.accordion {
		background:rgba(255,255,255,0);
		color: #444;
		cursor: pointer;
		padding: 18px;
		width: 100%;
		border: none;
		text-align: left;
		outline: none;
		transition: 0.4s;
	}
	button.nopad{padding: 0px 18px}
	
	#item,#itemwsize{
		font-family: Roboto;
		font-size: 20px;
		color: #333;
		letter-spacing: 2px; 
	}
	#itemwsize{
		padding:18px 15px;
	}
	button.accordion.active, button.accordion:hover {
		background: rgb(170, 196, 182)
	}
	button.accordion.active{

	}
	div.panel {
		padding: 0 18px;
		background-color: white;
		max-height: 0;
		overflow: hidden;
		transition: 0.6s ease-in-out;
		opacity: 0;
		border:none;
	}
	div.panel.show {
		opacity: 1;
		max-height: 9000px;  
	}
	h4,h5, {
		font-family: Julius, inherit;
		line-height: 1.1;
		color: #4d4d4d;
	}
	.prices{height: 19px;}
	.prices,.sizes,.double{
		display: inline-block;
		padding-right: 12px;
		padding-left: 12px;
		margin-right: 0;
	}
	.double{ 
		padding-left: 5px;
		padding-right: 5px;
		font-size: 10px; 
	}
	.sizes{
		margin: 0;
		color: #4d4d4d;
		padding-right: 10px;
		padding-left: 10px; 
	}	
	div>.sizes:nth-child(3){padding-right: 11px;}
	.dsc{
		color: rgb(105, 150, 124);
		font-family: Roboto;
	}
	@media (max-width:992px){
	  .dsc, .name{
	  	text-align: left;
	  }
	}
	@media (max-width:768px){
	  .col-sm-5, .drinks>div{
	  	text-align: left;
	  }
	  .drinks{
	  	margin: 0px;
	  }
	  .hot{
	  	padding-right: 70px;
	  	padding-left: 37px;
	  }
	  .sizes{
	  	padding: 0px 11px;
	  }
	}
	@font-face {
	    font-family: Roboto;
	    src: url(../fonts/Roboto-Regular.ttf);
	}
	@font-face {
	    font-family: Roboto-Thin;
	    src: url(../fonts/Roboto-Thin.ttf);
	}	
	@font-face {
	    font-family: Roboto-Light;
	    src: url(../fonts/Roboto-Light.ttf);
	}
	@font-face {
	    font-family: Julius;
	    src: url(../fonts/JuliusSansOne-Regular.ttf);
	}
	@font-face {
	    font-family: Ventura;
	    src: url(../fonts/ventura_times.ttf);
	}
</style>