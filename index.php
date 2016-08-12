<?php
/**
 * Heroku Template loader - Home
 */

require 'vendor/autoload.php';

?><!doctype html>
<html>
<head>
    <?php include 'templates/head.php'; ?>
</head>
<body>
    <?php include 'templates/header.php'; ?>
<div class="container-fluid main-body">
    <div class="container">
        <?php include 'templates/home.php'; ?>
        <?php include 'templates/sidebar.php'; ?>
    </div>
</div>
    <?php include 'templates/footer.php'; ?>
</body>
</html>
