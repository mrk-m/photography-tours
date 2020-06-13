<div class="container my-5">

<?php

include('components/tours-data.php');

echo '
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-5">Tour Details</h2>
            <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="'.$tours[$id]->image.'" class="card-img-top" alt="'.$tours[$id]->name.'">
                </div>
                <div class="col-md-9">
                    <div class="card-body d-flex flex-column h-100 justify-content-center align-items-center">
                        <h5 class="card-title mt-3">'.$tours[$id]->name.'</h5>
                        <p class="card-text mb-4">'.$tours[$id]->description.'</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
';

?>

<form action="" method="post">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2 class="text-center my-4">Your Details</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input class="form-control" type="tel" name="phone" id="phone" placeholder="Enter phone number" required>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h2 class="text-center my-4">Booking Details</h2>
            <div class="form-group">
                <label for="date-from">Requested Date From</label>
                <input class="form-control" type="date" name="date-from" id="date-from" placeholder="Enter start date" required>
            </div>
            <div class="form-group">
                <label for="date-to">Requested Date To</label>
                <input class="form-control" type="date" name="date-to" id="date-to" placeholder="Enter end date" required>
            </div>
            <div class="form-group">
                <label for="message">Comments</label>
                <textarea class="form-control" name="message" id="message" placeholder="Hey Samantha! ..." rows="5" required></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-outline-success btn-block">Book tour</button>
            </div>
        </div>
    </div>
</form>



</div>

