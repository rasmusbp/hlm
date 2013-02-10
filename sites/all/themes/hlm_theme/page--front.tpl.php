<?php include 'header.php' ?>
<script type="text/javascript" src="http://hlm.as/site/sites/all/themes/hlm_theme/js/frontslider.js"></script>
<?php print render($tabs); ?>
			<div class="contents-wrap">			
				<?php print render(block_get_blocks_by_region('frontslider')); ?>
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
			<div id="footer">
				<div class="clients"><a href="/site/om-hlm#clients/"><img src='http://hlm.as/site/sites/all/themes/hlm_theme/assets/client-footer-front.png' width='928px' height='56px'></a></div> 
					<address>HLM | Teknisk Landmåling / Hovedkontor: Damhusdalen 39b, 2610 Rødovre / Administration: Skolevej 16, 4490 Jerslev / T: +45 3212 5115</address>
			</div>
	</div>			