<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once(__DIR__ . '/../config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    $sql = "INSERT INTO comment (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Comment Sent Successfully!";
    } else {
        $_SESSION['error'] = "Failed to send Comment.";
    }
    header('Location: ../pages/co_curricular.php');
    exit;
}
?>
