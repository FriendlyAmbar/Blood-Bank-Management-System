<?php

session_start();

if(isset($_POST['submit'])) {
    
include 'dbh.php';
    
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //Error handlers
        $sqlusername = "SELECT * FROM recievers WHERE uname='$uname'";
        $resultusername = mysqli_query($conn, $sqlusername);
        $resultCheckusername = mysqli_num_rows($resultusername);
        if ($resultCheckusername < 1) {
            header("Location: ../index.php?signin=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($resultusername)) {
                $sqlpassword = "SELECT * FROM recievers WHERE pwd='$pwd'";
                $resultpassword = mysqli_query($conn, $sqlpassword);
                $resultCheckpassword= mysqli_num_rows($resultpassword);
                if ($resultpassword == false) {
                    header("Location: ../index.php?signin=wrongpassword");
                    exit();
                } elseif ($resultpassword == true) {
                    //Login the user here
                    $_SESSION['urid'] = $row['id'];
                    $_SESSION['urfirst'] = $row['first'];
                    $_SESSION['urlast'] = $row['last'];
                    $_SESSION['urhospital'] = $row['hospital'];
                    header("Location: ../index.php?signin-reciever=success");
                    exit();
                }
            }
        }
} else {
    header("Location: ../index.php?signin=connection-error");
    exit();
}