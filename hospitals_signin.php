<?php

session_start();

if(isset($_POST['submit'])) {
    
include 'dbh.php';
    
    $uname = mysqli_real_escape_string($conn, $_POST['hospital']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //Error handlers
        $sqlusername = "SELECT * FROM hospitals WHERE hospital='$uname'";
        $resultusername = mysqli_query($conn, $sqlusername);
        $resultCheckusername = mysqli_num_rows($resultusername);
        if ($resultCheckusername < 1) {
            header("Location: ../index.php?signin=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($resultusername)) {
                $sqlpassword = "SELECT * FROM hospitals WHERE pwd='$pwd'";
                $resultpassword = mysqli_query($conn, $sqlpassword);
                $resultCheckpassword= mysqli_num_rows($resultpassword);
                if ($resultpassword == false) {
                    header("Location: ../index.php?signin=wrongpassword");
                    exit();
                } elseif ($resultpassword == true) {
                    //Login the user here
                    $_SESSION['uhid'] = $row['id'];
                    $_SESSION['uhfirst'] = $row['first'];
                    $_SESSION['uhlast'] = $row['last'];
                    $_SESSION['uhhospital'] = $row['hospital'];
                    header("Location: ../index.php?signin-hospital=success");
                    exit();
                }
            }
        }
} else {
    header("Location: ../index.php?signin=connection-error");
    exit();
}