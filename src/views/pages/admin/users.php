<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => "Usuários - " . Company::getShortName(),
    'description' => "Lista de usuários - " . Company::getShortName(),
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
                            'title' => 'Usuários',
                            'breadcrumbItem' => [
                                'Usuários' => 'users'
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($addedUserMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $addedUserMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($editedUserMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $editedUserMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($deletedUserMessage)) : ?>
                                    <div class="alert-banner alert alert-danger py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $deletedUserMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="card-title">Usuários</h4>
                                        <p class="card-title-desc mb-0">Clique em <i class="fas fa-pencil-alt"></i> para <strong>editar</strong> a linha desejada ou em <i class="fas fa-trash text-danger"></i> para <strong class="text-danger">deletar</strong> a linha desejada.</p>
                                        <p class="card-title-desc">Clique no <strong class="text-decoration-underline">texto</strong> do item de cada linha para ver os detalhes do usuário desejado.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="float-end d-none d-md-block">
                                            <a href="<?= $base . 'admin/users/new' ?>" class="btn btn-primary" title="Adicionar novo usuário">
                                                <i class="mdi mdi-plus-box-multiple-outline me-2"></i>Adicionar Novo
                                            </a>
                                        </div>
                                    </div>
                                </div>



                                <div class="table-responsive">
                                    <table id="datatable" class="table dt-responsive align-middle nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Sobrenome</th>
                                                <th>Nome de usuário</th>
                                                <th>Avatar</th>
                                                <th>Papel</th>
                                                <th>Ativo</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($users as $user) : ?>

                                                <tr>
                                                    <td><?= $user->id ?></td>
                                                    <td><?= $user->name ?></td>
                                                    <td><?= $user->lastName ?></td>
                                                    <td><?= $user->username ?></td>
                                                    <td>
                                                        <img src="<?= (!empty($user->avatar && file_exists($user->avatar))) ? $base . $user->avatar : 'https://dummyimage.com/256x256/f2a100/fff.jpg&text=' . substr($user->name, 0, 1) ?>" class="rounded-circle" style="object-fit:contain;width:50px;height:50px;" alt="<?= "$user->name - foto de perfil" ?>" />
                                                    </td>
                                                    <td>
                                                        <?php

                                                        switch ($user->permissions) {
                                                            case 0:
                                                                echo "Admin";
                                                                break;
                                                            case 1:
                                                                echo "Mantenedor(a)";
                                                                break;
                                                            case 2:
                                                                echo "Visualizador(a)";
                                                                break;
                                                            case 3:
                                                                echo "Redator(a)";
                                                                break;
                                                        }

                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($user->able == 1) : ?>
                                                            <span class="ion ion-md-checkmark-circle text-success"></span>
                                                        <?php else : ?>
                                                            <span class="ion ion-md-remove-circle text-danger"></span>
                                                        <?php endif; ?>
                                                    </td>

                                                    <td>
                                                        <a href="<?= $base . 'admin/users/' . $user->username . '/edit' ?>" class="btn btn-secondary btn-sm edit" title="<?= "Editar usuário " . $user->username ?>">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="<?= $base . 'admin/users/' . $user->username . '/delete' ?>" class="btn btn-danger btn-sm <?= $user->id == 1 ? 'disabled' : '' ?> delete" title="<?= $user->id == 1 ? "Você não pode deletar o usuário admin" : "Deletar usuário " . $user->username ?>" onclick="return confirm('Deseja continuar com a exclusão do usuário <?= $user->username ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>

                                        </tbody>
                                        <!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end -->
                            </div>
                        </div>
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