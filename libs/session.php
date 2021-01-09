<?php

session_start();
if (!isset($_SESSION['ZEDD_SCHOOL'])) {
    header('Location:login');
} else {
    include './php/db.php';
}
?>