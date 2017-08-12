<?php require VIEW_ROOT . '/templates/header.php'; ?>

</div><!--end container-fluid-->
<style>
	#bgbread{
		display: none;
	}
</style>
<div class="row" style="">
	<div class="col-xs-12 text-center" id="galleryhead" ><h1>Gallery</h1></div>
</div>
<!-- Fun stuff
<div class="row">
	<div class="col-md-12 nopad bg-danger" style="padding: 180px 0px; text-transform: uppercase;">
		<h1 class="text-center">Error! Restricted Area</h1>
	</div><!- -col-md-12- ->
</div><!- -/row-->
	<?php if (empty($multiupload)): ?>
		<p>Sorry, nothing in the gallery at the moment. Images coming soon!</p>
	<?php else: ?>
		<div class="swiper-container gallery-top">
	        <div class="swiper-wrapper">
		        <?php foreach($multiupload as $item): ?>
		            <div class="swiper-slide" style="background-image:url(<?php echo BASE_URL; ?>/uploads/<?php echo e($item['name']); ?>)"></div>
		        <?php endforeach; ?>	    
	        </div>
		        <!-- Add Arrows -->	        	        
	        <div class="swiper-button-next swiper-button-white"></div>
		    <div class="swiper-button-prev swiper-button-white"></div>
	    </div>    
	    <div class="swiper-container gallery-thumbs">
	        <div class="swiper-wrapper">
       			<?php foreach($multiupload as $item): ?>
	            	<div class="swiper-slide" style="background-image:url(<?php echo BASE_URL; ?>/uploads/<?php echo e($item['name']); ?>)"></div>
     			<?php endforeach; ?>
	        </div>
	    </div>
		    
	<?php endif; ?>
<div class="container-fluid">
<?php require VIEW_ROOT . '/templates/footer.php'; ?>