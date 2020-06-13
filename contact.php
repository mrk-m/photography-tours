<?php
$pageTitle = "Contact";
$title = "Contact";
$titleImage = "images/giraffe.jpg";

include('components/header.php');
include('components/hero-title.php');

if (isset($_POST['name'])) {
    echo '
        <div class="container my-5">
            <h2>Message Sent Successfully!</h2>
            <p>You will receive a message confirmation email shortly and I will send a response within a few days!</p>
            <a role="button" href="index" class="btn btn-block btn-outline-success">Back to Home</a>
        </div>
    ';
} else {
    include('components/contact-content.php');
}


include('components/footer.php');
?>