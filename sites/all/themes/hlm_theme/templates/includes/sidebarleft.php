<div id="sidebar-left">

		<?php if ($node->type == 'projekt'): ?>
		<?php print render($content['field_facts']); ?>
			<div class="projectdata-wrap">
			<ul class="projectdata">
				<li class="year"><span>År</span> <?php print render($content['field_year']); ?></li>
				<li class="location"><span>Lokation</span> <?php print render($content['field_location']); ?></li>
				<li class="client"><span>Kunder</span> <?php print render($content['field_client']); ?></li>
				<li class="li-shadow"><span class="t-shadow"></span></li>
			</ul>
			
			</div>
		<?php endif; ?>
		
		<?php if ($node->type == 'service'): ?>
		
		<div id="references">
		<p> Ved følgende projekter har denne service været relevant for udførelsen. </p>
		<div class="box">
			<?php print render($content['field_reference']); ?>
			<span class="t-shadow"></span>
		</div>
			
		</div>
		<?php endif; ?>
</div>
