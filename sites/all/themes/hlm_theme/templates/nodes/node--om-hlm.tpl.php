<div id="subnav" class="about-subnav top">
	<ul>
		<li><a class="teamlink" href="#">Teamet bag HLM</a></li>
		<li><a class="aboutlink" href="#">Om HLM</a></li>
		<li><a class="clientlink" href="#">Vores kunder</a></li>
	</ul>
</div>

<div class="content">
	<h1>Hos HLM er effektivitet, tillid og problemløsning de vigtigste elementer i hverdagen</h1>
	<div class="target" style="position: relative;"><span id="teamtarget"></span></div>
	<h2>Teamet bag HLM</h2>
	<div class="teamlist">
		<?php print render(block_get_blocks_by_region('team')); ?>
	</div>
	<div class="target" style="position: relative;"><span id="abouttarget"></span></div>
	<h2>Om HLM</h2>
	<div class="about-col1">
		<h3>Firmaet</h3>
			<?php print render($content['field_company']); ?>
	</div>
	<div class="about-col2">
		<h3>Filosofien</h3>
			<?php print render($content['field_philo']); ?>
	</div>
	</div>
	<div class="target clear" style="position: relative;"><span id="clienttarget"></span><a name="clients"></a></div>
	<h2>Vores kunder</h2>
		<?php print render(block_get_blocks_by_region('clients')); ?>
	</div>