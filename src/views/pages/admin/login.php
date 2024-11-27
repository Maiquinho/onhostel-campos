<?php

use src\helpers\Company;

 $render('partials/admin/login', 'head'); ?>

<!-- Login Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Login & Register Start -->
                <div class="login-register-wrapper">
                    <img src="<?= "$base" . 'assets/site/img/logo-dark.png' ?>" class="img-fluid mb-5" alt="logo <?= Company::getFullName() ?>" style="height: 68px;" />

                    <h4 class="title">Entre para continuar</h4>
                    <form action="<?= $base . "admin/login" ?>" method="POST">
                        <div class="single-form">
                            <input type="text" placeholder="Nome de usuário" name="username" required />
                        </div>
                        <div class="single-form single-form--password">
                            <input type="password" placeholder="Senha" name="password" required />
                            <i id="show-password" class="fa fa-eye"></i>
                        </div>
                        <?php if($errorLogin && !empty($errorLogin)): ?>
                            <div class="alert alert-danger py-2 px-4 my-4" role="alert">
                                <p class="m-0"><?= $errorLogin ?></p>
                            </div>  
                        <?php endif; ?>
                        <div class="single-form">
                            <button class="btn btn-primary btn-hover-dark">Entrar</button>
                        </div>
                    </form>
                    <a href="<?= $base ?>" class="mt-5"><i class="fa fa-long-arrow-left"></i> Voltar ao site</a>
                </div>
                <!-- Login & Register End -->
            </div>
        </div>
    </div>
</div>
<!-- Login Section End -->

<?php $render('partials/admin/login', 'footer'); ?>