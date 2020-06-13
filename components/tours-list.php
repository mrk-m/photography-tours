<?php

include('components/tours-data.php');

?>

<div class="container mt-4">
	<div class="row row-cols-1 row-cols-md-1">

<?php
for ($i = 0; $i < sizeof($tours); $i++) {
	echo '
		<div class="card mb-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="'.$tours[$i]->image.'" class="card-img-top" alt="'.$tours[$i]->name.'">
				</div>
				<div class="col-md-8">
					<div class="card-body d-flex flex-column h-100 justify-content-center align-items-center">
						<h5 class="card-title mt-3">'.$tours[$i]->name.'</h5>
						<p class="card-text mb-4">'.$tours[$i]->description.'</p>
						<div class="row w-100 limit-width">
							<div class="col-12 col-md-6 mb-2 mb-md-0">
								<a role="button" target="_blank" href="'.$tours[$i]->travel_link.'" class="btn btn-block btn-outline-secondary">Travel Agency Listing</a>
							</div>
							<div class="col-12 col-md-6">
								<a role="button" href="'.$tours[$i]->booking_link.'" class="btn btn-block btn-outline-success">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	';
}
?>

	</div>
</div>