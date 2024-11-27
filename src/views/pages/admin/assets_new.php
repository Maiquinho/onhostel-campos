<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Novo asset - ' . Company::getFullName(),
    'description' => 'Página de cadastro de assets - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'assets',
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
                            'title' => 'Novo asset',
                            'breadcrumbItem' => [
                                'Assets' => 'assets',
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

                                <h4 class="card-title">Dropzone</h4>
                                <p class="card-title-desc">Suba aqui seus arquivos para a biblioteca da <?= Company::getShortName() ?></p>

                                <div class="mb-5">
                                    <form action="<?= $base . 'admin/assets/new' ?>" class="dropzone" enctype="multipart/form-data">
                                        <div class="fallback">
                                            <input name="file" type="file[]" multiple="multiple" />
                                        </div>

                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="mdi mdi-cloud-upload display-4 text-muted"></i>
                                            </div>

                                            <h4>Arraste aqui seus arquivos para upload.</h4>
                                        </div>
                                    </form><!-- end form -->
                                </div>

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