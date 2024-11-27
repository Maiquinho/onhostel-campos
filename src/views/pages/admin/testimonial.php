<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Prévia do depoimento ' . $testimonial->id . ' - ' . Company::getFullName(),
    'description' => 'Página de pré-visualização do depoimento ' . $testimonial->id . ' - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'testimonials',
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
                            'title' => 'Depoimento ' . $testimonial->id,
                            'breadcrumbItem' => [
                                'Depoimentos' => 'testimonials',
                                $testimonial->id => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia depoimento <?= $testimonial->id ?></h4>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <i class="ion ion-ios-quote display-4"></i>
                                        <blockquote>
                                            <em class="fs-4"><?= $testimonial->text ?></em>
                                            <strong class="d-block mt-3">- <?= $testimonial->name ?></strong>
                                        </blockquote>
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
                                        <?php if ($testimonial->able == 1) : ?>
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
                                            <time datetime="<?= date('d/m/y H:m:s', strtotime($testimonial->createdAt)) ?>">
                                                <?= date('d/m/y', strtotime($testimonial->createdAt)) ?>
                                                -
                                                <?= date('H:m:s', strtotime($testimonial->createdAt)) ?>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Criado por</strong>
                                        <span><?= $testimonial->addedBy ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização</strong>
                                        <time datetime="<?= date('d/m/y H:m:s', strtotime($testimonial->updatedAt)) ?>">
                                            <?= date('d/m/y', strtotime($testimonial->updatedAt)) ?>
                                            -
                                            <?= date('H:m:s', strtotime($testimonial->updatedAt)) ?>
                                        </time>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização por</strong>
                                        <span><?= $testimonial->lastUpdate ?></span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <a href="<?= $base . 'admin/testimonials/' . $testimonial->id . '/edit' ?>" class="btn btn-success waves-effect w-100">
                                            Editar depoimento <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/testimonials' ?>" class="btn btn-secondary waves-effect w-100">
                                            Voltar para depoimentos <i class="mdi mdi-comment-quote"></i>
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