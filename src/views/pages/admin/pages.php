<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Páginas de SEO - ' . Company::getFullName(),
    'description' => 'Lista de páginas de SEO - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'pages',
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
                            'title' => 'Páginas de SEO',
                            'breadcrumbItem' => [
                                'Páginas de SEO' => 'pages'
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($addedPageMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $addedPageMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($editedPageMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $editedPageMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($deletedPageMessage)) : ?>
                                    <div class="alert-banner alert alert-danger py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $deletedPageMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="card-title">Páginas de SEO</h4>
                                        <p class="card-title-desc mb-0">Clique em <i class="fas fa-pencil-alt"></i> para <strong>editar</strong> a linha desejada ou em <i class="fas fa-trash text-danger"></i> para <strong class="text-danger">deletar</strong> a linha desejada.</p>
                                        <p class="card-title-desc">Clique na <strong class="text-decoration-underline">slug</strong> do item de cada linha para ver os detalhes da página desejada.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="float-end d-none d-md-block">
                                            <a href="<?= $base . 'admin/pages/new' ?>" class="btn btn-primary" title="Adicionar nova página">
                                                <i class="mdi mdi-plus-box-multiple-outline me-2"></i>Adicionar Nova
                                            </a>
                                        </div>
                                    </div>
                                </div>



                                <div class="table-responsive">
                                    <table id="datatable" class="table dt-responsive align-middle nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>H1</th>
                                                <th>Alt Title</th>
                                                <th>Description</th>
                                                <th>Slug</th>
                                                <th>Image</th>
                                                <th>Conteúdo</th>
                                                <th>Criado em</th>
                                                <th>Editado em</th>
                                                <th>Adicionado por</th>
                                                <th>Ultima atualização</th>
                                                <th>Ativo</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($pages as $page) : ?>

                                                <tr>
                                                    <td><?= $page->id ?></td>
                                                    <td><?= (strlen($page->title) > 15) ? substr($page->title, 0, 15) . '...' : $page->title ?></td>
                                                    <td><?= (strlen($page->h1) > 15) ? substr($page->h1, 0, 15) . '...' : $page->h1 ?></td>
                                                    <td><?= (strlen($page->altTitle) > 15) ? substr($page->altTitle, 0, 15) . '...' : $page->altTitle ?></td>
                                                    <td><?= (strlen($page->description) > 15) ? substr($page->description, 0, 15) . '...' : $page->description ?></td>
                                                    <td>
                                                        <a href="<?= $base . 'admin/pages/' . $page->slug . '/' ?>" class="text-dark text-decoration-underline">
                                                        <?= (strlen($page->slug) > 15) ? substr($page->slug, 0, 15) . '...' : substr($page->slug, 0, 15) ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?= $base . 'admin/pages/' . $page->slug . '/' ?>">
                                                            <img src="<?= (!empty($page->image) && file_exists($page->image)) ? $base . $page->image : $base . 'assets/site/images/articles/sem-imagem.jpg' ?>" alt="<?= $page->altTitle ?>" style="object-fit:cover;width:100px;height:80px;" />
                                                        </a>
                                                    </td>
                                                    <td><?= (strlen($page->content) > 15) ? substr(htmlentities($page->content), 0, 15) . '...' : htmlentities($page->content) ?></td>
                                                    <td>
                                                        <?= date('d/m/y', strtotime($page->createdAt)) ?>
                                                        <br />
                                                        <?= date('H:m:s', strtotime($page->createdAt)) ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d/m/y', strtotime($page->updatedAt)) ?>
                                                        <br />
                                                        <?= date('H:m:s', strtotime($page->updatedAt)) ?>
                                                    </td>
                                                    <td><?= (!empty($page->addedBy)) ? $page->addedBy : '------' ?></td>
                                                    <td><?= (!empty($page->lastUpdate)) ? $page->lastUpdate : '------' ?></td>
                                                    <td>
                                                        <?php if ($page->able == 1) : ?>
                                                            <span class="ion ion-md-checkmark-circle text-success" title="Página publicada"></span>
                                                        <?php else : ?>
                                                            <span class="ion ion-md-remove-circle text-danger" title="Página não publicada"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= $base . 'admin/pages/' . $page->slug . '/edit' ?>" class="btn btn-secondary btn-sm edit" title="<?= "Editar página " . $page->slug ?>">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="<?= $base . 'admin/pages/' . $page->slug . '/delete' ?>" class="btn btn-danger btn-sm delete" title="<?= "Deletar página " . $page->slug ?>" onclick="return confirm('Deseja continuar com a exclusão da página <?= $page->slug ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
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