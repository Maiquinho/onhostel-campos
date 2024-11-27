<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Novo depoimento - ' . Company::getFullName(),
    'description' => 'Página de cadastro de depoimento - ' . Company::getShortName(),
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
                            'title' => 'Novo depoimento',
                            'breadcrumbItem' => [
                                'Depoimentos' => 'testimonials',
                                'Novo' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= $base . 'admin/testimonials/new' ?>" method="POST" enctype="multipart/form-data">

                                    <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                    <div class="row mb-3">
                                        <label for="testimonial-name" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input id="testimonial-name" class="form-control" type="text" placeholder="Digite o nome da testemunha" name="name" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="company" class="col-sm-2 col-form-label">Empresa</label>
                                        <div class="col-sm-10">
                                            <input id="company" class="form-control" type="text" placeholder="Digite o nome da empresa" name="company" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="text" class="col-sm-2 col-form-label">Texto</label>
                                        <div class="col-sm-10">
                                            <textarea id="text" class="form-control" type="text" placeholder="Digite o conteúdo do depoimento" name="text" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" name="added_by" value="<?= $loggedUser->username ?>" />
                                    <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Ativo</label>
                                        <div class="col-sm-10">

                                            <div class="d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="testimonialAble" value="1" checked>
                                                    <label class="form-check-label" for="testimonialAble">
                                                        Sim
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="testimonialDisable"  value="0">
                                                    <label class="form-check-label" for="testimonialDisable">
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
                                            <a href="<?= $base . 'admin/testimonials' ?>" class="btn btn-secondary waves-effect">
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