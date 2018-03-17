<?php

if(isset($_POST['submit'])) {
    
    include_once 'dbh.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $bloodtype = mysqli_real_escape_string($conn, $_POST['bloodtype']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    $sql = "INSERT INTO recievers (first, last, uname, bloodtype, pwd) VALUES ('$first', '$last', '$uname', '$bloodtype', '$pwd');";
    $result = mysqli_query($conn, $sql);
    header("Location: ../index.php?signup-reciver=success");
    exit();
    
} else {
    header("Location: ../index.php?signup=failed");
    exit();
}