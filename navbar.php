<?php

if (isset($_SESSION['uhid'])) {
    include_once "navbar/navbarhospital.php";
} elseif (isset($_SESSION['urid'])) {
    include_once "navbar/navbarreciever.php";
} else { 
    include "navbar/navbargeneral.php";
}

?>