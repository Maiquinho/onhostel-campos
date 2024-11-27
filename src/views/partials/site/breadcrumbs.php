<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-4 mb-lg-5">
    <div class="container text-center">

        <h1 class="display-6 text-white text-uppercase mb-3"><?= $title ?></h1>

        <?php if (!empty($breadcrumbSchema)) : ?>

            <nav class="d-none d-lg-block" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="text-white" itemprop="item" href="<?= $base ?>" title="Página Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <?php

                    $position = 1;

                    foreach ($breadcrumbSchema as $breadcrumbName => $breadcrumbUrl) :

                        $position += 1;

                        /**
                         * 
                         * Verifica se o último item de $breacrumbItem é igual a $breacrumbUrl
                         * 
                         */

                        if (end($breadcrumbSchema) == $breadcrumbUrl) : ?>
                            <li class="breadcrumb-item text-primary active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
                                <a itemprop="item" title="Página <?= $breadcrumbName ?>">
                                    <span itemprop="name" class="trail-end"><?= $breadcrumbName ?></span>
                                </a>
                                <meta itemprop="position" content="<?= $position ?>" />
                            </li>
                        <?php else : ?>
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a class="text-white" itemprop="item" href="<?= (!empty($breadcrumbUrl)) ? $base . $breadcrumbUrl : 'javascript:void(0)' ?>" title="Página <?= $breadcrumbName ?>">
                                    <span itemprop="name"><?= $breadcrumbName ?></span>
                                </a>
                                <meta itemprop="position" content="<?= $position ?>" />
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>

            <?php

            $breadcrumbItemBeforeLastSliced = array_slice($breadcrumbSchema, 0, -1);
            $breadcrumbItemBeforeLastKeys = array_keys($breadcrumbItemBeforeLastSliced);
            $breadcrumbItemBeforeLastKey = end($breadcrumbItemBeforeLastKeys);
            $breadcrumbItemBeforeLastValue = end($breadcrumbItemBeforeLastSliced);

            ?>

            <nav class="d-block d-lg-none">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a href="<?= $base . $breadcrumbItemBeforeLastValue ?>" class="text-white" title="Voltar para a página <?= $breadcrumbItemBeforeLastKey ?>"><i class="fa fa-angle-left me-2"></i>Voltar para <?= $breadcrumbItemBeforeLastKey ?></a></li>
                </ol>
            </nav>

        <?php else : ?>

            <nav class="d-none d-lg-block" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="text-white" itemprop="item" href="<?= $base ?>" title="Página Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" title="Página <?= $title ?>">
                            <span itemprop="name"><?= $title ?></span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </nav>

            <nav class="d-block d-lg-none" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a href="<?= $base ?>" class="text-white" title="Voltar para a página home"><i class="fa fa-angle-left me-2"></i>Voltar para Home</a></li>
                </ol>
            </nav>

        <?php endif; ?>

    </div>
</div>
<!-- Page Header End -->