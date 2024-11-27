<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => "Novo post (Blog) - " . Company::getShortName(),
    'description' => "Página de cadastro para os posts do blog - " . Company::getShortName(),
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
                            'title' => 'Novo post (Blog)',
                            'breadcrumbItem' => [
                                'Blog' => 'blog',
                                'Novo post' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= $base . 'admin/blog/new' ?>" method="POST" enctype="multipart/form-data">

                                    <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                    <div class="row mb-3">
                                        <label for="page-title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input id="page-title" class="form-control" type="text" placeholder="Digite o título do post" name="title" data-autofill-url="input" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="h1" class="col-sm-2 col-form-label">H1</label>
                                        <div class="col-sm-10">
                                            <input id="h1" class="form-control" type="text" placeholder="Digite o H1 do post" name="h1" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alt-title" class="col-sm-2 col-form-label">Alt-title</label>
                                        <div class="col-sm-10">
                                            <input id="alt-title" class="form-control" type="text" placeholder="Digite o alt-title das imagens" name="alt_title" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input id="description" class="form-control" type="text" placeholder="Digite a meta description do post" name="description" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input id="slug" class="form-control" type="text" placeholder="Digite a slug do post (url)" name="slug" data-autofill-url="output" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="banner-image" class="col-sm-2 col-form-label">Imagem</label>
                                        <div class="col-sm-10">
                                            <input id="banner-image" type="file" name="image" class="filestyle" data-input="true" data-buttonname="btn-secondary" accept="image/png,image/jpg,image/jpeg">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="text" class="col-sm-2 col-form-label">Conteúdo</label>
                                        <div class="col-sm-10">
                                            <textarea id="elm1" name="content"></textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" name="added_by" value="<?= $loggedUser->username ?>" />
                                    <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Ativo</label>
                                        <div class="col-sm-10">

                                            <div class="d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="postAble" value="1" checked>
                                                    <label class="form-check-label" for="postAble">
                                                        Sim
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="postDisable" value="0">
                                                    <label class="form-check-label" for="postDisable">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button id="submit-form" type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Salvar <i class="mdi mdi-content-save"></i>
                                            </button>
                                            <a href="<?= $base . 'admin/blog' ?>" class="btn btn-secondary waves-effect">
                                                Cancelar
                                            </a>
                                        </div>
                                    </div>

                                </form>
                                <!-- end form -->
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