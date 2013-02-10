<p class="tag">Service	</p>

<h1 class="title"><?php print render($title); ?></h1>
<?php include 'sites/all/themes/hlm_theme/templates/includes/sidebarleft.php' ?>
<div id="maincontent" class="wide"><?php print render($content['body']); ?></div>
<div id="sidebar-right">
	<?php include 'sites/all/themes/hlm_theme/templates/includes/contactbox.php' ?>
	<?php print render(block_get_blocks_by_region('rightsidebar1')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar2')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar3')); ?>
</div>
<?php include 'sites/all/themes/hlm_theme/templates/includes/relateditems.php' ?>