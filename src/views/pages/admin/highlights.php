<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Destaques - ' . Company::getShortName(),
    'description' => 'Lista de destaques da página home - ' . Company::getShortName(),
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
                            'title' => 'Destaques',
                            'breadcrumbItem' => [
                                'Destaques' => 'highlights'
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($addedHighlightMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $addedHighlightMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($editedHighlightMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $editedHighlightMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($deletedHighlightMessage)) : ?>
                                    <div class="alert-banner alert alert-danger py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $deletedHighlightMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="card-title">Destaques página home</h4>
                                        <p class="card-title-desc mb-0">Clique em <i class="fas fa-pencil-alt"></i> para <strong>editar</strong> a linha desejada ou em <i class="fas fa-trash text-danger"></i> para <strong class="text-danger">deletar</strong> a linha desejada.</p>
                                        <p class="card-title-desc">Clique na <strong>imagem</strong> de cada linha para ver os detalhes do destaque desejado.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="float-end d-none d-md-block">
                                            <a href="<?= $base . 'admin/highlights/new' ?>" class="btn btn-primary" title="Adicionar novo banner">
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
                                                <th>Descrição</th>
                                                <th>Ícone</th>
                                                <th>Criado em</th>
                                                <th>Editado em</th>
                                                <th>Adicionado por</th>
                                                <th>Ultima atualização</th>
                                                <th>Ativo</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($highlights as $highlight) : ?>

                                                <tr>
                                                    <td><?= $highlight->id ?></td>
                                                    <td><?= $highlight->name ?></td>
                                                    <td><?= $highlight->description ?></td>
                                                    <td><i class="<?= $highlight->icon ?>"></i></td>
                                                    <td>
                                                        <?= date('d/m/y', strtotime($highlight->createdAt)) ?>
                                                        <br />
                                                        <?= date('H:m:s', strtotime($highlight->createdAt)) ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d/m/y', strtotime($highlight->updatedAt)) ?>
                                                        <br />
                                                        <?= date('H:m:s', strtotime($highlight->updatedAt)) ?>
                                                    </td>
                                                    <td><?= (!empty($highlight->addedBy)) ? $highlight->addedBy : '------' ?></td>
                                                    <td><?= (!empty($highlight->orderPosition)) ? $highlight->orderPosition : '------' ?></td>
                                                    <td>
                                                        <?php if ($highlight->able == 1) : ?>
                                                            <span class="ion ion-md-checkmark-circle text-success"></span>
                                                        <?php else : ?>
                                                            <span class="ion ion-md-remove-circle text-danger"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= $base . 'admin/highlights/' . $highlight->id . '/edit' ?>" class="btn btn-secondary btn-sm edit" title="<?= "Editar banner " . $highlight->id ?>">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="<?= $base . 'admin/highlights/' . $highlight->id . '/delete' ?>" class="btn btn-danger btn-sm delete" title="<?= "Deletar banner " . $highlight->id ?>" onclick="return confirm('Deseja continuar com a exclusão do banner <?= $highlight->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
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