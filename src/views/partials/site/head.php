<?php

use src\handlers\ServerHandler;
use src\helpers\Author;
use src\helpers\Company;
use src\helpers\Phone;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php 
    
    /**
     * Google GTM and other tags
    */
    
    if ($_SERVER['SERVER_NAME'] == Company::getDomain()) : ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QS8FWWS');</script>
    <!-- End Google Tag Manager -->
    
    <?php endif; ?>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <!-- AdOpt -->
    <meta name="adopt-website-id" content="38e0734e-6cb3-4935-9077-07c605ba4c1e" />
    <script src="//tag.goadopt.io/injector.js?website_code=38e0734e-6cb3-4935-9077-07c605ba4c1e" 
    class="adopt-injector"></script>
    <!-- End AdOpt -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title><?= $title ?></title>

    <!-- Charset -->
    <meta charset="utf-8" />
    <!-- Meta Tags -->
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="" />
    <!-- Canonical -->
    <link rel="canonical" href="<?= ServerHandler::getCanonicalUrl() ?>" />
    <!-- OpenGraph -->
    <meta property="og:url" content="<?= ServerHandler::getCanonicalUrl() ?>" />
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:description" content="<?= $description ?>" />
    <meta property="og:site_name" content="<?= $title ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:region" content="BR" />
    <meta property="og:keywords" content="" />
    <meta property="og:canonical" content="<?= ServerHandler::getCanonicalUrl() ?>" />

    <meta name="author" content="<?= Author::getName() ?>" />
    <meta name="publisher" content="<?= Author::getName() ?>" />
    <meta name="fone" content="<?= Phone::getFirst()->unmaskedPhone ?>" />
    <meta name="city" content="<?= Company::getFirstAddress()->city ?>" />

    <!-- Daqui para baixo é padrão, não mexer -->

    <meta name="country" content="Brasil" />
    <meta name="geo.region" content="-BR" />
    <meta name="copyright" content="<?= Author::getName() ?>" />
    <meta name="geo.position" content="<?= Company::getFirstAddress()->latitude . "," . Company::getFirstAddress()->longitude ?>" />
    <meta name="geo.placename" content="<?= Company::getFirstAddress()->address . " - " . Company::getFirstAddress()->city ?>" />
    <meta name="geo.region" content="<?= Company::getFirstAddress()->state ?> - BR" />
    <meta name="ICBM" content="<?= Company::getFirstAddress()->latitude . "," . Company::getFirstAddress()->longitude ?>" />
    <meta name="robots" content="index,follow" />
    <meta name="rating" content="General" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $base . 'assets/site/img/favicon.png' ?>" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="<?= $base ?>assets/site/css/bootstrap-icons.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= $base ?>assets/site/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= $base ?>assets/site/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= $base ?>assets/site/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= $base ?>assets/site/css/style.css" rel="stylesheet" />

    
    <!-- Imagem de compartilhamento  -->
    <link href="<?= $base . 'assets/site/img/uploads/2024/11/diarias-acessiveis-mobile.jpg' ?>" rel="image_src" />

</head>

<body>
    <?php 
    
    /**
     * Google GTM and other tags
    */
    
    if ($_SERVER['SERVER_NAME'] == Company::getDomain()) : ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QS8FWWS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php endif; ?>