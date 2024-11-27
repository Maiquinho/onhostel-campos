<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Editar destaque ' . $highlight->id . ' (página home) - ' . Company::getFullName(),
    'description' => 'Página de edição do destaque ' . $highlight->id . ' - ' . Company::getShortName(),
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
                            'title' => 'Editar destaque ' . $highlight->id,
                            'breadcrumbItem' => [
                                'Banners' => 'highlights',
                                $highlight->id => 'highlights/' . $highlight->id . '/',
                                'Editar' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <form action="<?= $base . 'admin/highlights/' . $highlight->id . '/edit' ?>" class="row" method="POST" enctype="multipart/form-data">
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

                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row mb-3">
                                    <label for="highlight-name" class="col-sm-2 col-form-label">Título do destaque</label>
                                    <div class="col-sm-10">
                                        <input id="highlight-name" class="form-control" type="text" placeholder="Digite o título do destaque" name="name" value="<?= $highlight->name ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="highlight-description" class="col-sm-2 col-form-label">Descrição do destaque</label>
                                    <div class="col-sm-10">
                                        <input id="highlight-description" class="form-control" type="text" placeholder="Digite o conteúdo do destaque" name="description" value="<?= $highlight->description ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="highlight-icon" class="col-sm-2 col-form-label">Ícone (font awesome)</label>
                                    <div class="col-sm-10">
                                        <input id="highlight-icon" class="form-control" type="text" placeholder="Digite o ícone do destaque (font awesome em texto)" name="icon" value="<?= $highlight->icon ?>" />
                                    </div>
                                </div>

                                <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />
                                <input type="hidden" name="default_image" value="<?= $highlight->image ?>" />

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Ativo</label>
                                    <div class="col-sm-10">

                                        <div class="d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="bannerAble" <?= $highlight->able == 1 ? 'checked' : '' ?> value="1">
                                                <label class="form-check-label" for="bannerAble">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="bannerDisable" <?= $highlight->able == 0 ? 'checked' : '' ?> value="0">
                                                <label class="form-check-label" for="bannerDisable">
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
                                            Salvar Banner <i class="mdi mdi-content-save"></i>
                                        </button>
                                        <a href="<?= $base . 'admin/highlights/' . $highlight->id . '/delete' ?>" class="btn btn-danger waves-effect w-100" onclick="return confirm('Deseja continuar com a exclusão do banner <?= $highlight->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                            Deletar Banner <i class="mdi mdi-trash-can"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/highlights' ?>" class="btn btn-secondary waves-effect w-100">
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