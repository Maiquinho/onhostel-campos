<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Depoimentos - ' . Company::getFullName(),
    'description' => 'Lista de depoimentos - ' . Company::getShortName(),
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
                            'title' => 'Depoimentos',
                            'breadcrumbItem' => [
                                'Depoimentos' => 'testimonials'
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($addedTestimonialMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $addedTestimonialMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($editedTestimonialMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $editedTestimonialMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($deletedTestimonialMessage)) : ?>
                                    <div class="alert-banner alert alert-danger py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $deletedTestimonialMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="card-title">Depoimentos</h4>
                                        <p class="card-title-desc mb-0">Clique em <i class="fas fa-pencil-alt"></i> para <strong>editar</strong> a linha desejada ou em <i class="fas fa-trash text-danger"></i> para <strong class="text-danger">deletar</strong> a linha desejada.</p>
                                        <p class="card-title-desc">Clique no <strong class="text-decoration-underline">texto</strong> do item de cada linha para ver os detalhes do depoimento desejado.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="float-end d-none d-md-block">
                                            <a href="<?= $base . 'admin/testimonials/new' ?>" class="btn btn-primary" title="Adicionar novo depoimento">
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
                                                <th>Empresa</th>
                                                <th>Texto</th>
                                                <th>Criado em</th>
                                                <th>Editado em</th>
                                                <th>Adicionado por</th>
                                                <th>Ultima atualização</th>
                                                <th>Ativo</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($testimonials as $testimonial) : ?>

                                                <tr>
                                                    <td><?= $testimonial->id ?></td>
                                                    <td><?= $testimonial->name ?></td>
                                                    <td><?= (!empty($testimonial->company)) ? $testimonial->company : '------' ?></td>
                                                    <td>
                                                        <?php if (!empty($testimonial->text)) : ?>
                                                            <a href="<?= $base . 'admin/testimonials/' . $testimonial->id . '/' ?>" class="text-dark text-decoration-underline">
                                                                <?= substr($testimonial->text, 0, 15) . '...' ?>
                                                            </a>
                                                        <?php else : ?>
                                                            <?= '------' ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d/m/y', strtotime($testimonial->createdAt)) ?>
                                                        <br />
                                                        <?= date('H:m:s', strtotime($testimonial->createdAt)) ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d/m/y', strtotime($testimonial->updatedAt)) ?>
                                                        <br />
                                                        <?= date('H:m:s', strtotime($testimonial->updatedAt)) ?>
                                                    </td>
                                                    <td><?= (!empty($testimonial->addedBy)) ? $testimonial->addedBy : '------' ?></td>
                                                    <td><?= (!empty($testimonial->lastUpdate)) ? $testimonial->lastUpdate : '------' ?></td>
                                                    <td>
                                                        <?php if ($testimonial->able == 1) : ?>
                                                            <span class="ion ion-md-checkmark-circle text-success"></span>
                                                        <?php else : ?>
                                                            <span class="ion ion-md-remove-circle text-danger"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= $base . 'admin/testimonials/' . $testimonial->id . '/edit' ?>" class="btn btn-secondary btn-sm edit" title="<?= "Editar depoimento " . $testimonial->id ?>">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="<?= $base . 'admin/testimonials/' . $testimonial->id . '/delete' ?>" class="btn btn-danger btn-sm delete" title="<?= "Deletar depoimento " . $testimonial->id ?>" onclick="return confirm('Deseja continuar com a exclusão do depoimento <?= $testimonial->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
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