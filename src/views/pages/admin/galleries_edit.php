<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Editar galeria ' . $gallery->id . ' - ' . Company::getFullName(),
    'description' => 'Página de edição da galeria ' . $gallery->id . ' - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'gallery',
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
                            'title' => 'Editar galeria ' . $gallery->id,
                            'breadcrumbItem' => [
                                'Galeria' => 'gallery',
                                $gallery->id => 'gallery/' . $gallery->id . '/',
                                'Editar' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <form action="<?= $base . 'admin/gallery/' . $gallery->id . '/edit' ?>" class="row" method="POST" enctype="multipart/form-data">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row mb-3">
                                    <label for="url" class="col-sm-2 col-form-label">Legenda do arquivo</label>
                                    <div class="col-sm-10">
                                        <input id="url" class="form-control" type="text" placeholder="Digite aqui uma legenda para o arquivo." name="legend" value="<?= $gallery->legend ?>" />
                                    </div>
                                </div>

                                <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />
                                <input type="hidden" name="default_file" value="<?= $gallery->fileName ?>" />

                                <div class="row mb-3">
                                    <label for="banner-image" class="col-sm-2 col-form-label">Nova mídia</label>
                                    <div class="col-sm-10">
                                        <input id="banner-image" type="file" name="file" class="filestyle" data-input="true" data-buttonname="btn-secondary" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Ativo</label>
                                    <div class="col-sm-10">

                                        <div class="d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="file-able" <?= $gallery->able == 1 ? 'checked' : '' ?> value="1">
                                                <label class="form-check-label" for="file-able">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="file-disable" <?= $gallery->able == 0 ? 'checked' : '' ?> value="0">
                                                <label class="form-check-label" for="file-disable">
                                                    Não
                                                </label>
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
                                <div class="row mb-4">
                                    <h4 class="card-title">Prévia da galeria <?= $gallery->id ?></h4>
                                    <div class="col-lg-12">
                                        <img src="<?= $base . $gallery->fileName ?>" class="img-thumbnail rounded me-2 img-fluid" alt="" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1 w-100">
                                            Salvar Galeria <i class="mdi mdi-content-save"></i>
                                        </button>
                                        <a href="<?= $base . 'admin/gallery/' . $gallery->id . '/delete' ?>" class="btn btn-danger waves-effect w-100" onclick="return confirm('Deseja continuar com a exclusão da galeria <?= $gallery->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                            Deletar Galeria <i class="mdi mdi-trash-can"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/gallery' ?>" class="btn btn-secondary waves-effect w-100">
                                            Cancelar Modificações <i class="mdi mdi-cancel"></i>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </form> <!-- end row -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php $render('partials/admin', 'footer'); ?>


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>