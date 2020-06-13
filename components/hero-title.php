<!-- Hero image and call to action-->
<div class="hero-image" style="background: url('<?php if(isset($titleImage)) echo $titleImage?>') no-repeat center; min-height: 200px;">
	<div class="d-flex" style="height: 200px;">
		<!-- Text -->
		<div class="container text-center align-self-center p-2">
			<h1 class="hero-title"><?php if (isset($title)) echo $title?></h1>
		</div>
	</div>
</div>