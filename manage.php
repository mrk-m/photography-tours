<?php

$pageTitle = 'Site Management';
$title = 'Site Management';
$titleImage = 'images/car.jpg';

include('components/header.php');
include('components/hero-title.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check sign in
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'test' && $password == 'test') {
        $_SESSION['signed_in'] = 'true';
    } else {
        $error = '<div class="w-100 alert alert-danger">Incorrect sign in information!</div>';
    }
}

// Check sign out
// If signing out, sign out
if (isset($_POST['signout'])) {
    unset($_SESSION['signed_in']);
}

if (isset($_SESSION['signed_in'])) {
    // logged in, load manage
    include('components/manage-content.php');
} else {
    // not logged in, load sign in 
    if (isset($error)) echo $error;
    include('components/sign-in.php');
}

include('components/footer.php');
?>

