<?php
    $conn = mysqli_connect('localhost', 'nickpsal', 'ospzx3vu!@34', 'login_app');
    if (!$conn) {
        die("Database Connection failed" . mysqli_error($conn));
    }
?>