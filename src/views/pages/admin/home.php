<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Dashboard - ' . Company::getFullName(),
    'description' => 'Página home Admin - ' . Company::getFullName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'home',
        'loggedUser' => $loggedUser
    ]);
    ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h6 class="page-title">Admin</h6>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Bem-vindo ao Admin da <?= Company::getShortName() ?>!</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="<?= $base ?>assets/admin/images/services-icon/01.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Páginas de SEO (publicadas)</h5>
                                    <h4 class="fw-medium font-size-24"><?= count($articles) ?></h4>
                                    <!-- <div class="mini-stat-label bg-success">
                                        <p class="mb-0">+ 12%</p>
                                    </div> -->
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="<?= $base . 'admin/pages' ?>" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>

                                    <a href="<?= $base . 'admin/pages' ?>">
                                        <p class="text-white-50 mb-0 mt-1">Ver mais</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="<?= $base ?>assets/admin/images/services-icon/04.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Banners (publicados)</h5>
                                    <h4 class="fw-medium font-size-24"><?= count($banners) ?></h4>
                                    <!-- <div class="mini-stat-label bg-warning">
                                        <p class="mb-0">+ 84%</p>
                                    </div> -->
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="<?= $base . 'admin/banners' ?>" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>

                                    <a href="<?= $base . 'admin/banners' ?>">
                                        <p class="text-white-50 mb-0 mt-1">Ver mais</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <img src="<?= $base ?>assets/admin/images/services-icon/03.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Usuários (ativos)</h5>
                                    <h4 class="fw-medium font-size-24"><?= count($users) ?></h4>
                                    <!-- <div class="mini-stat-label bg-info">
                                        <p class="mb-0"> 00%</p>
                                    </div> -->
                                </div>
                                <div class="pt-2">
                                    <div class="float-end">
                                        <a href="<?= $base . 'admin/users' ?>" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                    </div>

                                    <a href="<?= $base . 'admin/users' ?>">
                                        <p class="text-white-50 mb-0 mt-1">Ver mais</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <?php if (!empty($recentActivity)) : ?>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Atividades recentes do usuário: <?= $loggedUser->username ?></h4>
                                    <ol class="activity-feed">
                                        <?php foreach ($recentActivity as $recentActivityItem) : ?>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date"><?= strftime('%d %b.', strtotime($recentActivityItem->updatedAt)) ?></span>
                                                    <span class="activity-text">Você <?= ($recentActivityItem->createdAt == $recentActivityItem->updatedAt) ? 'criou' : 'alterou' ?> <?= (substr($recentActivityItem->tableName, -1) == 'a') ? 'a' : 'o' ?> <?= $recentActivityItem->tableDescription ?> - id: <?= $recentActivityItem->id ?></span>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                <?php endif; ?>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php $render('partials/admin', 'footer'); ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>