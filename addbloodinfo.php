<?php

if(isset($_POST['submit'])) {
    
    include_once 'dbh.php';
    
    $bloodtype = mysqli_real_escape_string($conn, $_POST['bloodtype']);
    $hospitalname = mysqli_real_escape_string($conn, $_POST['hospitalname']);
    $component = mysqli_real_escape_string($conn, $_POST['component']);
    $test = mysqli_real_escape_string($conn, $_POST['test']);
    
    $sql = "INSERT INTO bloodinfo (bloodtype, hospitalname, component, test) VALUES ('$bloodtype', '$hospitalname', '$component', '$test');";
    $result = mysqli_query($conn, $sql);
    header("Location: ../addbloodinfo.php?infoadd=success...");
    exit();
    
} else {
    header("Location: ../addbloodinfo.php?infoadd=failed...");
    exit();
}