<?php

if(isset($_POST['submit'])) {
    
    include_once 'dbh.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $hospital = mysqli_real_escape_string($conn, $_POST['hospital']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    $sql = "INSERT INTO hospitals (first, last, hospital, pwd) VALUES ('$first', '$last', '$hospital', '$pwd');";
    $result = mysqli_query($conn, $sql);
    header("Location: ../index.php?singup-hospital=success");
    exit();
    
} else {
    header("Location: ../index.php?signup=failed");
    exit();
}