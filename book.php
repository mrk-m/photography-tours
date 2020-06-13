<?php
$pageTitle = "Booking Form";
$title = "Booking Form";
$titleImage = "images/car.jpg";

include('components/header.php');
include('components/hero-title.php');

if (isset($_POST['name'])) {
    echo '
        <div class="container my-5">
            <h2>Booking Message Sent Successfully!</h2>
            <p>You will receive a message confirmation email shortly and I will respond to your booking to discuss!</p>
            <a role="button" href="index" class="btn btn-block btn-outline-success">Go Home</a>
        </div>
    ';
} else if (isset($_GET['id'])) {
    $id = $_GET['id'] - 1;

    include('components/booking-form.php');
} else {
    echo '
        <div class="container my-5">
            <h2>Error</h2>
            <p>Please try to access this page from another link</p>
        </div>
    ';
}

include('components/footer.php');
?>