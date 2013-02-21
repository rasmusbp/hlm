<div class="content plain-content">

<div id="sidebar-left" class="archive">
	<?php print render(block_get_blocks_by_region('archive')); ?>
</div>

<div id="maincontent" class="news-overview">
	<div class="news-img">
		<img src="/sites/default/files/<?php print render($node->field_news_image['und'][0]['filename']); ?>" alt="<?php print render($node->field_news_image['und'][0]['alt']); ?>"/>

	</div>
	<h2><?php print render($title); ?></h2>
	<div class="newscat"><?php print render($node->field_newscat['und'][0]['taxonomy_term']->name); ?></div>
	<div class="date"><?php print render($date); ?></div>
	
	<?php print render($content['body']); ?>
	
</div>

<div id="sidebar-right">
	<?php include 'sites/all/themes/hlm_theme/templates/includes/contactbox.php' ?>
	<?php print render(block_get_blocks_by_region('rightsidebar1')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar2')); ?>
	<?php print render(block_get_blocks_by_region('rightsidebar3')); ?>
</div>