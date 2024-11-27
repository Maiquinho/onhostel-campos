            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Admin</li>

                            <li>
                                <a href="<?= "$base" . 'admin/' ?>" class="waves-effect<?= $activeMenu == 'home' ? ' active' : '' ?>">
                                    <i class="ti-home"></i>
                                    <!-- <span class="badge rounded-pill bg-primary float-end">1</span> -->
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect<?= $activeMenu == 'assets' ? ' active' : '' ?>">
                                    <i class="ti-harddrive"></i>
                                    <span>Bíblioteca</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if ($loggedUser->permissions != 2) : ?>
                                        <li><a href="<?= "$base" . 'admin/assets/new' ?>">Cadastrar</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= "$base" . 'admin/assets' ?>">Listar</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect<?= $activeMenu == 'gallery' ? ' active' : '' ?>">
                                    <i class="ti-gallery"></i>
                                    <span>Galeria</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if ($loggedUser->permissions != 2) : ?>
                                        <li><a href="<?= "$base" . 'admin/gallery/new' ?>">Cadastrar</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= "$base" . 'admin/gallery' ?>">Listar</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect<?= $activeMenu == 'banners' ? ' active' : '' ?>">
                                    <i class="ti-image"></i>
                                    <span>Banners</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if ($loggedUser->permissions != 2) : ?>
                                        <li><a href="<?= "$base" . 'admin/banners/new' ?>">Cadastrar</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= "$base" . 'admin/banners' ?>">Listar</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect<?= $activeMenu == 'testimonials' ? ' active' : '' ?>">
                                    <i class="ti-quote-right"></i>
                                    <span>Depoimentos</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if ($loggedUser->permissions != 2) : ?>
                                        <li><a href="<?= "$base" . 'admin/testimonials/new' ?>">Cadastrar</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= "$base" . 'admin/testimonials' ?>">Listar</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect<?= $activeMenu == 'highlights' ? ' active' : '' ?>">
                                    <i class="ti-star"></i>
                                    <span>Destaques</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if ($loggedUser->permissions != 2) : ?>
                                        <li><a href="<?= "$base" . 'admin/highlights/new' ?>">Cadastrar</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= "$base" . 'admin/highlights' ?>">Listar</a></li>
                                </ul>
                            </li>


                            <?php

                            /**
                             * 
                             * Verifica se o usuário possui as permissões necessárias para renderizar os itens abaixo
                             * 
                             */

                            if ($loggedUser->permissions == 0) : ?>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect<?= $activeMenu == 'pages' ? ' active' : '' ?>">
                                        <i class="ti-layout-media-overlay"></i>
                                        <span>Páginas de SEO</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="<?= "$base" . 'admin/pages/new' ?>">Cadastrar</a></li>
                                        <li><a href="<?= "$base" . 'admin/pages' ?>">Listar</a></li>
                                    </ul>
                                </li>

                            <?php endif; ?>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-user"></i>
                                    <span>Usuários</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if ($loggedUser->permissions != 2) : ?>
                                        <li><a href="<?= "$base" . 'admin/users/new' ?>">Cadastrar</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= "$base" . 'admin/users' ?>">Listar</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?= $base ?>" class="waves-effect">
                                    <i class="ti-eye"></i>
                                    <span>Visualizar Site</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->