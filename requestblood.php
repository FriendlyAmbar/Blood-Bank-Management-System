<?php

if(isset($_POST['submit'])) {
    
    include_once 'dbh.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $bloodtype = mysqli_real_escape_string($conn, $_POST['bloodtype']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    
    $sql = "INSERT INTO requestblood (first, last, bloodtype, email, phonenumber) VALUES ('$first', '$last', '$bloodtype', '$email', '$phone');";
    $result = mysqli_query($conn, $sql);
    header("Location: ../availablebloodsample.php?request=success");
    exit();
    
} else {
    header("Location: ../availablebloodsample.php?request=failed");
    exit();
}