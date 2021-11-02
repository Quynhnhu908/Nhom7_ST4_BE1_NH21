<?php
session_start();
if(isset($_GET['id'])){
    unset($_SESSION['cart'][$_GET['id']]);
    header('location:index.php');
}
?>