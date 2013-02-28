<?php include 'header.php' ?>
<script type="text/javascript" src="http://hlm.as/site/sites/all/themes/hlm_theme/js/frontslider.js"></script>
<?php print render($tabs); ?>
			<div class="contents-wrap">			
				<?php print render(block_get_blocks_by_region('frontslider')); ?>
			</div>
			<div class="spot">
				<h2 class="spot-header red">Knivskarp overbevisende overskrift</h2>
				<div class="spot-text"><p class="spot-desc">Duis viverra neque eu odio lacinia semper. Sed id lectus lectus. Vivamus hendrerit vehicula ipsum in tincidunt. Morbi porttitor venenatis diam, in sodales odio sagittis eu.</p></div>
				<div class="spot-action"><a href="#" class="btn huge_btn"> Download produktark</a></div>
				<div class="clearfix"></div>
				<span class="l-shadow"></span>
			</div>
			<div id="facts">
				<div class="fact1"><span>21</span><p>specialiserede<br>
				landmålere</p></div>
				<div class="fact2"><span>50</span><p>års faglig<br>
				erfaring</p></div>
				<div class="fact3"><span>100</span><p>procent<br>
				præcision</p></div>
			</div>
			
			<div class="box-wrap">
			<div class="box">
				<?php print render(block_get_blocks_by_region('postscript1')); ?>
				<span class="s-shadow"></span>
			</div>
				<div class="box">
				<h2 class="red">Ledige stillinger</h2>
				<div class="job-box">
				<p class="job-intro">Vi er altid på udkig efter dygtige folk til vores team.</p>
						<?php print render(block_get_blocks_by_region('postscript2')); ?>
				</div>
				<span class="s-shadow"></span>
				</div>
				<div class="box">
					<?php print render(block_get_blocks_by_region('postscript3')); ?>
					<span class="s-shadow"></span>
				</div>
				<?php include 'sites/all/themes/hlm_theme/templates/includes/contactbox.php' ?>
			</div>
	</div>
