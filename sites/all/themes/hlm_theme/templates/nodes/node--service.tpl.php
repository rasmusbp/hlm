<p class="tag">Service	</p>

<h1 class="title"><?php print render($title); ?></h1>

<div id="img_box">
	<div class="slider-wrapper theme-default">
	   <div id="slider" class="nivoSlider">
               <?php print render($content['field_slider'][0]); ?>
               <?php print render($content['field_slider'][1]); ?>
               <?php print render($content['field_slider'][2]); ?>
            </div>
		</div>
<span class="l-shadow"></span>
</div>
	
	<?php include 'sites/all/themes/hlm_theme/templates/includes/sidebarleft.php' ?>

<div id="maincontent"><?php print render($content['body']); ?></div>
<div id="sidebar-right">
	<?php include 'sites/all/themes/hlm_theme/templates/includes/contactbox.php' ?>
	<?php print render(block_get_blocks_by_region('rightsidebar1')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar2')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar3')); ?>
</div>
<?php include 'sites/all/themes/hlm_theme/templates/includes/relateditems.php' ?>