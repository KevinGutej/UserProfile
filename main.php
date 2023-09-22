<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert user data into the database
    //Check for any duplicates
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    
}