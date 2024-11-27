<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Editar usuário: ' . $user->username . ' - ' . Company::getFullName(),
    'description' => 'Página de edição do usuário ' . $user->username . ' - ' . Company::getShortName(),
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
                            'title' => 'Editar usuário usuário ' . $user->username,
                            'breadcrumbItem' => [
                                'Usuários' => 'users',
                                'Editar' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <form action="<?= $base . 'admin/users/' . $user->id . '/edit' ?>" class="row" method="POST" enctype="multipart/form-data">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
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
                                    <label for="password" class="col-sm-2 col-form-label">Senha</label>
                                    <div class="col-sm-10">
                                        <input id="password" class="form-control" type="password" placeholder="Crie uma nova senha (de preferência com caracteres especiais e números)" name="password" required />
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
                                            <?php if ($loggedUser->permissions == 0) : ?>
                                                <option value="0">0 - Admin</option>
                                            <?php endif; ?>
                                            <option value="1">1 - Mantenedor(a)</option>
                                            <option value="2">2 - Visualizador(a)</option>
                                            <option value="3">3 - Redator(a)</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Ativo</label>
                                    <div class="col-sm-10">

                                        <div class="d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="userAble" <?= $user->able == 1 ? 'checked' : '' ?> value="1">
                                                <label class="form-check-label" for="userAble">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="userDisable" <?= $user->able == 0 ? 'checked' : '' ?> value="0">
                                                <label class="form-check-label" for="userDisable">
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
                                            Salvar Usuário <i class="mdi mdi-content-save"></i>
                                        </button>
                                        <a href="<?= $base . 'admin/users/' . $user->id . '/delete' ?>" class="btn btn-danger waves-effect w-100" onclick="return confirm('Deseja continuar com a exclusão do usuário <?= $user->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                            Deletar Usuário <i class="mdi mdi-trash-can"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/users' ?>" class="btn btn-secondary waves-effect w-100">
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