<?php

ob_start();
session_start();

include 'index.view.php';
include 'lib/db.php';

if(!isset($_SESSION['iduser'])) {
    header('Location: login.php');
}
require 'productpagina.html';
?>


