<p class="tag">Projekt</p>
<h1 class="title"><?php print render($title); ?></h1>

	
	<div id="videobox">
	<?php if (empty($content['field_youtube_id']['#items'][0]['value'])) {
			print render($content['field_fallback_img'][0]);
		} else {
		  echo "<div class='video'><a onclick=\"jQuery('#player').tubeplayer('play');\" href='javascript:void(0);'><img class='cover' src='http://hlm.as/site/sites/default/files/project_videos/videocover.png' height='410px' width='960px'/></a>
		  	<div id='player'></div></div>";
		  } ?>
		  
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

<script type="text/javascript" src="http://hlm.as/site/sites/all/themes/hlm_theme/js/jquery.youtubeplayer.js"></script>
<script type="text/javascript">
//--- YouTube player
(function ($) { 
$('.video img').click(function () {
      $('#player').css({'visibility' : 'visible'});
      $(this).animate({'opacity' : 0}, function() {
      			$(this).css({'z-index' : -1})
      		});
            
});

$("#player").tubeplayer({
	width: 960, // the width of the player
	height: 410, // the height of the player
	allowFullScreen: "true", // true by default, allow user to go full screen
	showinfo: false,
	modestbranding: false,
	showRelated: 0,
	loadSWFObject: true,
	preferredQuality: "default",// preferred quality: default, small, medium, large, hd720
	initialVideo: "<?php print render($content['field_youtube_id']['#items'][0]['value']); ?>",
	onPlayerEnded: function(){
			$('.video img').css({'z-index' : 1});
		    $('.video img').animate({'opacity' : 1}, 800);
		    $('#player').css({'visibility' : 'hidden'});
		   }
});
})(jQuery);
</script>