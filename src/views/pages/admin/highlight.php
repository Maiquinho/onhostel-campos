<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Prévia do destaque ' . $highlight->id . ' (página home) - ' . Company::getFullName(),
    'description' => 'Página de pré visualização do destaque ' . $highlight->id . ' - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'highlights',
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
                        <?php $render('partials/admin', 'breadcrumbs', [
                            'title' => 'Banner ' . $highlight->id,
                            'breadcrumbItem' => [
                                'Banners' => 'highlights',
                                $highlight->id => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia destaque <?= $highlight->id ?></h4>

                                <div class="row mt-4">
                                    <div class="col-lg-4">
                                        <div class="service-item position-relative overflow-hidden bg-light d-flex align-items-center h-100 p-2 ps-0 border">
                                            <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                                <i class="<?= $highlight->icon ?> fa-2x text-primary"></i>
                                            </div>
                                            <div class="ps-3">
                                                <strong class="text-uppercase mb-3 text-dark"><?= $highlight->name ?></strong>
                                                <p><?= $highlight->description ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end form -->
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Publicado</strong>
                                        <?php if ($highlight->able == 1) : ?>
                                            <span class="ion ion-md-checkmark-circle text-success fs-4"></span>
                                        <?php else : ?>
                                            <span class="ion ion-md-remove-circle text-danger fs-4"></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Criado em</strong>
                                        <div class="d-flex flex-column align-items-end">
                                            <time datetime="<?= date('d/m/y H:m:s', strtotime($highlight->createdAt)) ?>">
                                                <?= date('d/m/y', strtotime($highlight->createdAt)) ?>
                                                -
                                                <?= date('H:m:s', strtotime($highlight->createdAt)) ?>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Criado por</strong>
                                        <span><?= $highlight->addedBy ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização</strong>
                                        <time datetime="<?= date('d/m/y H:m:s', strtotime($highlight->updatedAt)) ?>">
                                            <?= date('d/m/y', strtotime($highlight->updatedAt)) ?>
                                            -
                                            <?= date('H:m:s', strtotime($highlight->updatedAt)) ?>
                                        </time>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização por</strong>
                                        <span><?= $highlight->lastUpdate ?></span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <a href="<?= $base . 'admin/highlights/' . $highlight->id . '/edit' ?>" class="btn btn-success waves-effect w-100">
                                            Editar destaque <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/highlights' ?>" class="btn btn-secondary waves-effect w-100">
                                            Voltar para destaques <i class="mdi mdi-image"></i>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php $render('partials/admin', 'footer'); ?>


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>