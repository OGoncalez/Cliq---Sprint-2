<?php 
require "session.php";
if (empty ($_SESSION['usuario'])){
    header('Location: index.php');
    exit;
}
?>