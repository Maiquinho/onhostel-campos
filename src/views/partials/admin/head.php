<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="<?= $description ?>" name="description" />
    <meta content="Publinet1 - Marketing Digital" name="author" />
    <meta name="robots" content="noindex, nofollow" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= $base ?>assets/site/img/favicon.png" />
    <link href="<?= $base ?>assets/admin/css/preloader.css" rel="stylesheet" type="text/css">


    <?php switch ($pageId):
        case "404": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "dashboard": ?>

            <link href="<?= $base ?>assets/admin/libs/chartist/chartist.min.css" rel="stylesheet">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">


            <?php break; ?>
        <?php
        case "banners": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "banner_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "banner_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "assets": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "asset_edit": ?>

            <!-- Plugins css -->
            <link href="<?= $base ?>assets/admin/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "asset_new": ?>

            <!-- Plugins css -->
            <link href="<?= $base ?>assets/admin/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "highlights": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "highlight_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "highlight_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "testimonials": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "testimonial_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "testimonial_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "pages": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "page_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "page_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "posts": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "post_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "post_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "products": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "product_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "product_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
            <?php
        case "users": ?>

            <!-- DataTables -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
            <link href="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Responsive datatable examples -->
            <link href="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "user_edit": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "user_new": ?>

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
        <?php
        case "profile": ?>

            <!-- Lightbox css -->
            <link href="<?= $base ?>assets/admin/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

            <!-- Bootstrap Css -->
            <link href="<?= $base ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
            <!-- Icons Css -->
            <link href="<?= $base ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="<?= $base ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

            <?php break; ?>
    <?php endswitch; ?>


</head>

<body data-sidebar="dark">

    <div class="preloader"></div>
    <script src="<?= $base . 'assets/admin/js/preloader.js' ?>"></script>