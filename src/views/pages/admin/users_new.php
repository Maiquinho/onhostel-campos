<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Novo usuário - ' . Company::getFullName(),
    'description' => 'Página de cadastro de usuário - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'users',
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
                            'title' => 'Novo usuário',
                            'breadcrumbItem' => [
                                'Usuários' => 'users',
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
                                <form action="<?= $base . 'admin/users/new' ?>" method="POST" enctype="multipart/form-data" novalidate>

                                    <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input id="name" class="form-control" type="text" placeholder="Digite o nome do usuário" name="name" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="last-name" class="col-sm-2 col-form-label">Sobrenome</label>
                                        <div class="col-sm-10">
                                            <input id="last-name" class="form-control" type="text" placeholder="Digite o sobrenome do usuário" name="last_name" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="username" class="col-sm-2 col-form-label">Nome de usuário</label>
                                        <div class="col-sm-10">
                                            <input id="username" class="form-control" type="text" placeholder="Digite o nome de usuário do admin (sem caracteres especiais nem espaços em branco)" name="username" required />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-sm-2 col-form-label">Senha</label>
                                        <div class="col-sm-10">
                                            <input id="password" class="form-control" type="password" placeholder="Crie uma senha (de preferência com caracteres especiais e números)" name="password" required />
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-3">
                                        <label for="password-retype" class="col-sm-2 col-form-label">Prencha a senha novamente</label>
                                        <div class="col-sm-10">
                                            <input id="password-retype" data-parsley-equalto="#password" class="form-control" type="password" placeholder="Digite sua senha novamente" name="username" required />
                                        </div>
                                    </div> -->
                                    <div class="row mb-3">
                                        <label for="banner-image" class="col-sm-2 col-form-label">Avatar</label>
                                        <div class="col-sm-10">
                                            <input id="banner-image" type="file" name="avatar" class="filestyle" data-input="true" data-buttonname="btn-secondary" accept="image/png,image/jpg,image/jpeg">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Papel</label>
                                        <div class="col-sm-10">
                                            <select id="permissions" class="form-select" aria-label="Seleção dos cargos" name="permissions" required>
                                                <option selected disabled>Selecione um papel</option>
                                                    <?php if($loggedUser->permissions == 0): ?>
                                                    <option value="0">0 - Admin</option>
                                                    <?php endif; ?>
                                                    <option value="1">1 - Mantenedor(a)</option>
                                                    <option value="2">2 - Visualizador(a)</option>
                                                    <option value="3">3 - Redator(a)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <input type="hidden" name="added_by" value="<?= $loggedUser->username ?>" />
                                    <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Ativo</label>
                                        <div class="col-sm-10">

                                            <div class="d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="userAble" value="1" checked>
                                                    <label class="form-check-label" for="userAble">
                                                        Sim
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="userDisable" value="0">
                                                    <label class="form-check-label" for="userDisable">
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
                                            <a href="<?= $base . 'admin/users' ?>" class="btn btn-secondary waves-effect">
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