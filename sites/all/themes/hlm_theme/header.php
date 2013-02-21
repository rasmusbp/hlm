<?php
?>
	<div id="pre-wrapper">
		<div id="header">
			<div class="logo"><a href="/"><img src="/sites/all/themes/hlm_theme/assets/logo.png"></a></div>
			<div class="contact-info" alt="Kontakt HLM"><p class="phone">+45 32125115</p><p class="email"><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#111;&#110;&#116;&#97;&#107;&#116;&#64;&#104;&#108;&#109;&#46;&#97;&#115;">&#107;&#111;&#110;&#116;&#97;&#107;&#116;&#64;&#104;&#108;&#109;&#46;&#97;&#115;</a></p></div>
		</div>
		<div id="wrapper">
			<div id="nav">
				<ul>
					<li><a class="nav-projects" href="#"><h2>Projekter</h2><p>Hvor har HLM arbejdet.</p></a></li>
					<li><a class="nav-services" href="#"><h2>Services</h2><p>Hvad kan HLM arbejde med.</p></a></li>
					<li><a class="nav-news" href="?q=nyheder"><h2>Nyheder</h2><p>Seneste nyt om HLM.</p></a></li>
					<li><a class="nav-about" href="#"><h2>Om HLM</h2><p>Hvem er folkene bag HLM.</p></a></li>	
				</ul>
			</div>
			<div id="minipages">
				<div class="mp-projects">
					<div class="header"><h2>Projekter</h2><p>Hvor har HLM arbejdet.</p></div>
					<div class="content">
						<div class="col-1">
							<p class="intro">
								Vi udvikler os løbende med de projekterne vi deltagerer i. Her kan ses projekter der har udviklet vores faglige kompetencer og har gjort os til dem vi er i dag.
							</p>
								
						</div>
						<div class="col-2">	
							<h3>Hvor har vi arbejdet?</h3>
							<p>Klik på projekterne herunder for at læse mere</p>
							<table class="team-table" width="100%" border="0">
							<?php print render(block_get_blocks_by_region('project_menu')); ?>
							</table>
						</div>
						<div class="col-3">
							<h3>Referenceliste</h3>
							<?php print render(block_get_blocks_by_region('references')); ?>
							<p><a href="http://www.hlm.as/site/referenceliste" class="all_ref">se fuld referenceliste</a></p>
						</div>
					</div>
						
				</div>
				<div class="mp-services">
					<div class="header"><h2>Services</h2><p>HLM arbejder med følgende.</p></div>
					<div class="content">
					<div class="col-1">
							<p class="intro">
								Vi arbejder kun med teknisk landmåling, derfor er vi også det foretrukne landmålingsfirma hos ingeniører og entreprenører.
							</p>
					</div>
					<div class="col-2">	
						<h3>Byggeri og anlæg</h3>
						<p>Vælg netop jeres arbejdsområde</p>
							<?php print render(block_get_blocks_by_region('service_menu')); ?>
					</div>
					<div class="col-3">
						<h3>3D Maskinstyring</h3>
						<div class="logos3dmaskinstyring">
							<ul>
								<li>
									<a href="http://www.scanlaser.dk" target="_blank">
										<img src="/sites/all/themes/hlm_theme/assets/scanlaser-logo.png" width="185px" height="83px" alt="Scanlaser logo"/>
									</a>
								</li>
								<li>
									<a href="http://www.trimble.com" target="_blank">
										<img src="/sites/all/themes/hlm_theme/assets/trimble-logo.png" width="185px" height="57px" alt="Trimble logo"/>
									</a>
								</li>
								<li>
									<a href="http://www.topcon.com" target="_blank">
										<img src="/sites/all/themes/hlm_theme/assets/topcon-logo.png" width="185px" height="50px" alt="Topcon logo"/>
									</a>
								</li>
							</ul>
						</div>
						<p class="desc">
							Vi arbejder for mange ingeniører og entreprenører firmaer som bruger maskinstyring, 
						</p>
						<a class="more_btn" href="/site/standard/3d-maskinstyring" alt="Læs om 3D maskinstyring">3D maskinstyring</a> 
					</div>
					</div>
				</div>
				<div class="mp-about">
					<div class="header"><h2>Om HLM</h2><p>Hvem er folkene bag HLM.</p></div>
					<div class="content">
					<div class="col-1">
					<p class="intro">
						Vi gør det enkelt at skabe nye og innovative løsninger uden meromkostninger. Hos HLM tænker vi os om, før vi handler.
					</p>
					</div>
					<div class="col-2">
						<h3>Om HLM</h3>
							<p class="miniabout">Samarbejde og enkel kommunikation er et af hovedelementerne i et succesfuldt projekt. Vi ønsker at være en samarbejdspartner, som tilfører projektet veluddannet personale og udstyr med den nyeste teknologi, som kan løse opgaver ud fra projektets præmisser og vores tekniske erfaring.</p>
							<p><a href="/site/om-hlm" class="more_btn">læs mere</a></p>
					</div>
					<div class="col-3">
							<h3>Kontakt os...</h3>
							<?php print render(block_get_blocks_by_region('team_list')); ?>
							<p><a href="/site/om-hlm" class="all_staff">se alle medarbejderne</a></p>
					</div>
					</div>
				</div>
			</div>