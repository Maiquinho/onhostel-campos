<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Editar depoimento ' . $testimonial->id . ' - ' . Company::getFullName(),
    'description' => 'Página de edição do depoimento ' . $testimonial->id . ' - ' . Company::getShortName(),
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
                            'title' => 'Editar depoimento ' . $testimonial->id,
                            'breadcrumbItem' => [
                                'Depoimentos' => 'testimonials',
                                $testimonial->id => 'testimonials/' . $testimonial->id . '/',
                                'Editar' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <form action="<?= $base . 'admin/testimonials/' . $testimonial->id . '/edit' ?>" class="row" method="POST" enctype="multipart/form-data">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia do depoimento <?= $testimonial->id ?></h4>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="border rounded p-4">
                                            <i class="ion ion-ios-quote display-4"></i>
                                            <blockquote>
                                                <em class="fs-4"><?= $testimonial->text ?></em>
                                                <strong class="d-block mt-3">- <?= $testimonial->name ?></strong>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row mb-3">
                                    <label for="testimonial-name" class="col-sm-2 col-form-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input id="testimonial-name" class="form-control" type="text" placeholder="<?= (empty($testimonial->name)) ? 'Digite o nome da testemunha' : '' ?>" name="name" value="<?= $testimonial->name ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="company" class="col-sm-2 col-form-label">Empresa</label>
                                    <div class="col-sm-10">
                                        <input id="company" class="form-control" type="text" placeholder="Digite o nome da empresa" name="company" value="<?= $testimonial->company ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Texto</label>
                                    <div class="col-sm-10">
                                        <textarea id="text" class="form-control" type="text" placeholder="Digite o conteúdo do depoimento" name="text" rows="4"><?= $testimonial->text ?></textarea>
                                    </div>
                                </div>

                                <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Ativo</label>
                                    <div class="col-sm-10">

                                        <div class="d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="testimonialAble" <?= $testimonial->able == 1 ? 'checked' : '' ?> value="1">
                                                <label class="form-check-label" for="testimonialAble">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="testimonialDisable" <?= $testimonial->able == 0 ? 'checked' : '' ?> value="0">
                                                <label class="form-check-label" for="testimonialDisable">
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

                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1 w-100">
                                            Salvar Depoimento <i class="mdi mdi-content-save"></i>
                                        </button>
                                        <a href="<?= $base . 'admin/testimonials/' . $testimonial->id . '/delete' ?>" class="btn btn-danger waves-effect w-100" onclick="return confirm('Deseja continuar com a exclusão do depoimento <?= $testimonial->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                            Deletar Depoimento <i class="mdi mdi-trash-can"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/testimonials' ?>" class="btn btn-secondary waves-effect w-100">
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