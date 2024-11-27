<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Prévia do asset ' . $asset->id . ' - ' . Company::getFullName(),
    'description' => 'Página de pré visualização do asset ' . $asset->id . ' - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'assets', 
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
                            'title' => 'Asset ' . $asset->id,
                            'breadcrumbItem' => [
                                'Assets' => 'assets',
                                $asset->id => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia asset <?= $asset->id ?></h4>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="<?= $base . $asset->fileName ?>" class="img-thumbnail rounded me-2 img-fluid w-50" alt="" />
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
                                        <?php if ($asset->able == 1) : ?>
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
                                            <time datetime="<?= date('d/m/y H:m:s', strtotime($asset->createdAt)) ?>">
                                                <?= date('d/m/y', strtotime($asset->createdAt)) ?>
                                                -
                                                <?= date('H:m:s', strtotime($asset->createdAt)) ?>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Criado por</strong>
                                        <span><?= $asset->addedBy ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização</strong>
                                        <time datetime="<?= date('d/m/y H:m:s', strtotime($asset->updatedAt)) ?>">
                                            <?= date('d/m/y', strtotime($asset->updatedAt)) ?>
                                            -
                                            <?= date('H:m:s', strtotime($asset->updatedAt)) ?>
                                        </time>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização por</strong>
                                        <span><?= $asset->lastUpdate ?></span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <a href="<?= $base . 'admin/assets/' . $asset->id . '/edit' ?>" class="btn btn-success waves-effect w-100">
                                            Editar asset <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/assets' ?>" class="btn btn-secondary waves-effect w-100">
                                            Voltar para assets <i class="mdi mdi-image"></i>
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