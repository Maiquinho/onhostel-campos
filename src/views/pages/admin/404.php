<?php 

$render('partials/admin', 'head', [
    'title' => 'Página não encontrada!', 
    'pageId' => $pageId
]); ?>

<div class="authentication-bg d-flex align-items-center pb-0 vh-100">
    <div class="content-center w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-4 ms-auto">
                                    <div class="ex-page-content">
                                        <h1 class="text-dark display-1 mt-4">404!</h1>
                                        <h4 class="mb-4">Ops, página não encontrada</h4>
                                        <p class="mb-5">Desculpe, a página que você está procurando não existe!</p>
                                        <a class="btn btn-primary mb-5 waves-effect waves-light" href="<?= $base . "admin/" ?>"><i class="mdi mdi-home"></i> Voltar ao Painel</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 mx-auto">
                                    <img src="<?= $base . 'assets/admin/images/error.png' ?>" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!--end row-->
        </div>
        <!-- end container -->
    </div>

</div>

<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>