<?php

$render('partials/admin', 'head', [
    'title' => 'Perfil - ' . $loggedUser->name,
    'description' => 'Página de perfil ' . $loggedUser->name,
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', ['loggedUser' => $loggedUser]);
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
                            'title' => 'Perfil: ' . $loggedUser->username,
                            'breadcrumbItem' => [
                                'Perfil' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-xl-3">
                        <div class="user-sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-end">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle text-muted fs-5 d-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-n4 position-relative pt-4">
                                        <div class="text-center">
                                            <img src="<?= (!empty($loggedUser->avatar && file_exists($loggedUser->avatar))) ? $base . $loggedUser->avatar : 'https://dummyimage.com/256x256/f2a100/fff.jpg&text=' . substr($loggedUser->name, 0, 1) ?>" class="avatar-xl rounded-circle img-thumbnail" alt="<?= "$loggedUser->name - foto de perfil" ?>" />

                                            <div class="mt-3">
                                                <h5 class=""><?= "$loggedUser->name $loggedUser->lastName" ?></h5>
                                                <div>
                                                    <a href="#" class="text-muted m-1"><?= $loggedUser->username ?></a>
                                                </div>

                                                <!-- <div class="mt-4">
                                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Send Message</a>
                                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Email</a>
                                                </div> -->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="p-3 mt-3">
                                        <div class="row text-center">
                                            <div class="col-12">
                                                <div class="p-1">
                                                    <h6 class="mb-1">Papel:</h8>
                                                        <p class="text-muted mb-0">
                                                            <?php

                                                            switch ($loggedUser->permissions) {
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
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->

                        </div>
                    </div>

                    <div class="col-xl-9">
                        <?php if (!empty($recentActivity)) : ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Atividades recentes do usuário: <?= $loggedUser->username ?></h4>
                                    <ol class="activity-feed">
                                        <?php foreach ($recentActivity as $recentActivityItem) : ?>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date"><?= strftime('%d %b.', strtotime($recentActivityItem->updatedAt)) ?></span>
                                                    <span class="activity-text">Você <?= ($recentActivityItem->createdAt == $recentActivityItem->updatedAt) ? 'criou' : 'alterou' ?> <?= (substr($recentActivityItem->tableName, -1) == 'a') ? 'a' : 'o' ?> <?= $recentActivityItem->tableDescription ?> - id: <?= $recentActivityItem->id ?></span>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            </div>
                            <!-- end row -->
                        <?php else : ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Atividades recentes do usuário: <?= $loggedUser->username ?></h4>
                                    <p>Você não possui atividades recentes.</p>
                                </div>
                            </div>
                            <!-- end row -->
                        <?php endif; ?>

                    </div>
                </div>
                <!--end row-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php $render('partials/admin', 'footer'); ?>


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>