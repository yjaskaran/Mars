<?php

session_start();
if (!isset($_SESSION['ZEDD_DEVS'])) {
    header('Location:login');
} else {
    include './php/db.php';
}
?>