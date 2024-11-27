<?php
use src\helpers\Company;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= Company::getShortName() ?> - Login</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $base ?>assets/site/img/favicon.ico" />

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?= $base ?>assets/admin/login/css/font-awesome.min.css" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= $base ?>assets/admin/login/css/bootstrap.min.css" />

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="<?= $base ?>assets/admin/login/css/style.css"> -->
    <link rel="stylesheet" href="<?= $base ?>assets/admin/login/css/style.min.css" />
    <link rel="stylesheet" href="<?= $base ?>assets/admin/login/css/login.css" />
</head>


<body class="d-flex flex-column justify-content-between">