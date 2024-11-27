<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => "Posts (Blog) - " . Company::getShortName(),
    'description' => "Lista de posts do blog - " . Company::getShortName(),
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
                            'title' => 'Posts (Blog)',
                            'breadcrumbItem' => [
                                'Blog' => 'blog'
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!empty($addedPostMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $addedPostMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($editedPostMessage)) : ?>
                                    <div class="alert-banner alert alert-success py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $editedPostMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($deletedPostMessage)) : ?>
                                    <div class="alert-banner alert alert-danger py-2 px-4 mb-4 d-flex align-items-center" role="alert">
                                        <p class="m-0 flex-grow-1"><?= $deletedPostMessage ?></p>
                                        <button class="btn p-0"><i class="mdi mdi-close-box fs-3 text"></i></button>
                                    </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="card-title">Posts (Blog)</h4>
                                        <p class="card-title-desc mb-0">Clique em <i class="fas fa-pencil-alt"></i> para <strong>editar</strong> a linha desejada ou em <i class="fas fa-trash text-danger"></i> para <strong class="text-danger">deletar</strong> a linha desejada.</p>
                                        <p class="card-title-desc">Clique na <strong class="text-decoration-underline">slug</strong> do item de cada linha para ver os detalhes do post desejado.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="float-end d-none d-md-block">
                                            <a href="<?= $base . 'admin/blog/new' ?>" class="btn btn-primary" title="Adicionar novo post">
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

                                            <?php if (!empty($posts)) : ?>
                                                <?php foreach ($posts as $post) : ?>

                                                    <tr>
                                                        <td><?= $post->id ?></td>
                                                        <td><?= (strlen($post->title) > 15) ? substr($post->title, 0, 15) . '...' : $post->title ?></td>
                                                        <td><?= (strlen($post->h1) > 15) ? substr($post->h1, 0, 15) . '...' : $post->h1 ?></td>
                                                        <td><?= (strlen($post->altTitle) > 15) ? substr($post->altTitle, 0, 15) . '...' : $post->altTitle ?></td>
                                                        <td><?= (strlen($post->description) > 15) ? substr($post->description, 0, 15) . '...' : $post->description ?></td>
                                                        <td>
                                                            <a href="<?= $base . 'admin/blog/' . $post->slug . '/' ?>" class="text-dark text-decoration-underline">
                                                                <?= (strlen($post->slug) > 15) ? substr($post->slug, 0, 15) . '...' : substr($post->slug, 0, 15) ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="<?= $base . 'admin/blog/' . $post->slug . '/' ?>">
                                                                <img src="<?= (!empty($post->image) && file_exists($post->image)) ? $base . $post->image : $base . 'assets/site/images/articles/sem-imagem.jpg' ?>" alt="<?= $post->altTitle ?>" style="object-fit:cover;width:100px;height:80px;" />
                                                            </a>
                                                        </td>
                                                        <td><?= (strlen($post->content) > 15) ? substr(htmlentities($post->content), 0, 15) . '...' : htmlentities($post->content) ?></td>
                                                        <td>
                                                            <?= date('d/m/y', strtotime($post->createdAt)) ?>
                                                            <br />
                                                            <?= date('H:m:s', strtotime($post->createdAt)) ?>
                                                        </td>
                                                        <td>
                                                            <?= date('d/m/y', strtotime($post->updatedAt)) ?>
                                                            <br />
                                                            <?= date('H:m:s', strtotime($post->updatedAt)) ?>
                                                        </td>
                                                        <td><?= (!empty($post->addedBy)) ? $post->addedBy : '------' ?></td>
                                                        <td><?= (!empty($post->lastUpdate)) ? $post->lastUpdate : '------' ?></td>
                                                        <td>
                                                            <?php if ($post->able == 1) : ?>
                                                                <span class="ion ion-md-checkmark-circle text-success" title="Página publicada"></span>
                                                            <?php else : ?>
                                                                <span class="ion ion-md-remove-circle text-danger" title="Página não publicada"></span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= $base . 'admin/blog/' . $post->slug . '/edit' ?>" class="btn btn-secondary btn-sm edit" title="<?= "Editar post " . $post->slug ?>">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="<?= $base . 'admin/blog/' . $post->slug . '/delete' ?>" class="btn btn-danger btn-sm delete" title="<?= "Deletar post " . $post->slug ?>" onclick="return confirm('Deseja continuar com a exclusão do post <?= $post->slug ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                <?php endforeach; ?>
                                            <?php endif; ?>

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