<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Prévia do banner ' . $banner->id . ' (página home) - ' . Company::getFullName(),
    'description' => 'Página de pré visualização do banner ' . $banner->id . ' - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'banners', 
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
                            'title' => 'Banner ' . $banner->id,
                            'breadcrumbItem' => [
                                'Banners' => 'banners',
                                $banner->id => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia banner <?= $banner->id ?></h4>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="<?= $base . $banner->image ?>" class="img-thumbnail rounded me-2 img-fluid" alt="" />
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
                                        <?php if ($banner->able == 1) : ?>
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
                                            <time datetime="<?= date('d/m/y H:m:s', strtotime($banner->createdAt)) ?>">
                                                <?= date('d/m/y', strtotime($banner->createdAt)) ?>
                                                -
                                                <?= date('H:m:s', strtotime($banner->createdAt)) ?>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Criado por</strong>
                                        <span><?= $banner->addedBy ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização</strong>
                                        <time datetime="<?= date('d/m/y H:m:s', strtotime($banner->updatedAt)) ?>">
                                            <?= date('d/m/y', strtotime($banner->updatedAt)) ?>
                                            -
                                            <?= date('H:m:s', strtotime($banner->updatedAt)) ?>
                                        </time>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização por</strong>
                                        <span><?= $banner->lastUpdate ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Posição</strong>
                                        <span><?= $banner->orderPosition ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Url</strong>
                                        <span>
                                            <?php if (!empty($banner->url)) : ?>
                                                <a href="<?= $base . $banner->url ?>" class="text-decoration-underline" target="_blank"><i class="mdi mdi-link-variant"></i> <?= $banner->url ?></a>
                                            <?php else : ?>
                                                ------------------------
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <a href="<?= $base . 'admin/banners/' . $banner->id . '/edit' ?>" class="btn btn-success waves-effect w-100">
                                            Editar banner <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/banners' ?>" class="btn btn-secondary waves-effect w-100">
                                            Voltar para banners <i class="mdi mdi-image"></i>
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