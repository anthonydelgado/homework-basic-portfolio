<?php
/**
 * Heroku Template loader - Portfolio
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
        <?php include 'templates/portfolio.php'; ?>
        <?php include 'templates/sidebar.php'; ?>
    </div>
</div>
    <?php include 'templates/footer.php'; ?>
</body>
</html>