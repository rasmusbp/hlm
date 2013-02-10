<?php include 'header.php' ?>
		<div class="content plain-content">
	<div id="sidebar-left" class="archive">
		<?php print render(block_get_blocks_by_region('archive')); ?>
	</div>

		<div id="maincontent" class="news-overview">
			<?php
				$viewName = 'nyhedsoversigt';
				$displayName = 'overviewpage';
				print views_embed_view($viewName, $displayName);
			?>
		</div>
	<div id="sidebar-right">
	<?php include 'sites/all/themes/hlm_theme/templates/includes/contactbox.php' ?>
	<?php print render(block_get_blocks_by_region('rightsidebar1')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar2')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar3')); ?>
</div>
			
<?php include 'footer.php' ?>
</div>
	            
	        	
