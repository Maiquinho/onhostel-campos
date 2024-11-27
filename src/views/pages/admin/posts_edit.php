<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => "Editar post - $post->title - " . Company::getShortName(),
    'description' => "Página de edição do post (blog) $post->title - " . Company::getShortName(),
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
                            'title' => 'Editar Post: ' . $post->title,
                            'breadcrumbItem' => [
                                'Blog' => 'blog',
                                $post->title => 'blog/' . $post->slug . '/',
                                'Editar' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <form action="<?= $base . 'admin/blog/' . $post->slug . '/edit' ?>" class="row" method="POST" enctype="multipart/form-data">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia da Post - <?= $post->title ?></h4>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="page-content-preview border rounded p-4" style="max-height: 55vh;overflow-y:scroll;">
                                            <img src="<?= (!empty($post->image) && file_exists($post->image)) ? $base . $post->image : $base . 'assets/site/images/articles/sem-imagem.jpg' ?>" class="img-thumbnail rounded me-2 img-fluid mb-4" alt="<?= $post->altTitle ?>" title="<?= $post->altTitle ?>" />
                                            <?= $post->content ?>
                                        </div>
                                    </div>
                                </div>

                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row mb-3">
                                    <label for="page-title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input id="page-title" class="form-control" type="text" placeholder="Digite o título da página" name="title" value="<?= $post->title ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="h1" class="col-sm-2 col-form-label">H1</label>
                                    <div class="col-sm-10">
                                        <input id="h1" class="form-control" type="text" placeholder="Digite o H1 da página" name="h1" value="<?= $post->h1 ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alt-title" class="col-sm-2 col-form-label">Alt-title</label>
                                    <div class="col-sm-10">
                                        <input id="alt-title" class="form-control" type="text" placeholder="Digite o alt-title das imagens" name="alt_title" value="<?= $post->altTitle ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input id="description" class="form-control" type="text" placeholder="Digite a meta description da página" name="description" min="1" max="160" value="<?= $post->description ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input id="slug" class="form-control" type="text" placeholder="Digite a slug da página (url)" name="slug" value="<?= $post->slug ?>" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="banner-image" class="col-sm-2 col-form-label">Imagem</label>
                                    <div class="col-sm-10">
                                        <input id="banner-image" type="file" name="image" class="filestyle" data-input="true" data-buttonname="btn-secondary" accept="image/png,image/jpg,image/jpeg">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Conteúdo</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="content"><?= $post->content ?></textarea>
                                    </div>
                                </div>

                                <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />
                                <input type="hidden" name="default_image" value="<?= $post->image ?>" />

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Ativo</label>
                                    <div class="col-sm-10">

                                        <div class="d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="pageAble" <?= $post->able == 1 ? 'checked' : '' ?> value="1">
                                                <label class="form-check-label" for="pageAble">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="pageDisable" <?= $post->able == 0 ? 'checked' : '' ?> value="0">
                                                <label class="form-check-label" for="pageDisable">
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

                                <strong class="card-title-desc mb-4">Ações</strong>

                                <div class="row">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1 w-100">
                                            Salvar Post <i class="mdi mdi-content-save"></i>
                                        </button>
                                        <a href="<?= $base . 'admin/blog/' . $post->slug . '/delete' ?>" class="btn btn-danger waves-effect w-100" onclick="return confirm('Deseja continuar com a exclusão da Post <?= $post->slug ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                            Deletar Post <i class="mdi mdi-trash-can"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/blog' ?>" class="btn btn-secondary waves-effect w-100">
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