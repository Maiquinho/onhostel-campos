<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => "Prévia do post - $post->title - " . Company::getShortName(),
    'description' => "Página de pré-visualização do post (blog) $post->title - " . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'blog',
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
                            'title' => 'Post (blog): ' . $post->title,
                            'breadcrumbItem' => [
                                'Blog' => 'blog',
                                $post->title => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Prévia do Post - <?= $post->title ?></h4>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="page-content-preview border rounded p-4">
                                            <img src="<?= (!empty($post->image) && file_exists($post->image)) ? $base . $post->image : $base . 'assets/site/images/articles/sem-imagem.jpg' ?>" class="img-thumbnail rounded me-2 img-fluid mb-4" alt="<?= $post->altTitle ?>" title="<?= $post->altTitle ?>" />
                                            <?= $post->content ?>
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
                                        <?php if ($post->able == 1) : ?>
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
                                            <time datetime="<?= date('d/m/y H:m:s', strtotime($post->createdAt)) ?>">
                                                <?= date('d/m/y', strtotime($post->createdAt)) ?>
                                                -
                                                <?= date('H:m:s', strtotime($post->createdAt)) ?>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Criado por</strong>
                                        <span><?= $post->addedBy ?></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização</strong>
                                        <time datetime="<?= date('d/m/y H:m:s', strtotime($post->updatedAt)) ?>">
                                            <?= date('d/m/y', strtotime($post->updatedAt)) ?>
                                            -
                                            <?= date('H:m:s', strtotime($post->updatedAt)) ?>
                                        </time>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 d-flex">
                                        <strong class="flex-grow-1">Última atualização por</strong>
                                        <span><?= $post->lastUpdate ?></span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <a href="<?= $base . 'admin/blog/' . $post->slug . '/edit' ?>" class="btn btn-success waves-effect w-100">
                                            Editar post <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?= $base . $post->fullUrl ?>" class="btn btn-info waves-effect w-100">
                                            Visualizar no site <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/blog' ?>" class="btn btn-secondary waves-effect w-100">
                                            Voltar para posts <i class="mdi mdi-code-tags-check"></i>
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