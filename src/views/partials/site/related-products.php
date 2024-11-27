<?php if (!empty($relatedProducts)) : ?>
    <!-- SERVICES -->
    <div class="row-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-headings style-2 clearfix mb-5">
                        <h2 class="heading mb-2">Produtos relacionados</h2>
                        <div class="sep has-width w80 accent-bg clearfix">
                        </div>
                    </div>

                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                        <div class="products-carousel owl-carousel owl-theme">

                            <!-- <div class="col-lg-3"> -->
                            <?php foreach ($relatedProducts as $relatedProduct) : ?>
                                <div class="themesflat-image-box style-1 has-icon icon-right w65 clearfix">
                                    <div class="image-box-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item text-center">
                                                <a href="<?= $base . $relatedProduct->path ?>" title="Clique e veja mais detalhes do produto <?= $relatedProduct->name ?>">
                                                    <?php if (!empty(explode(', ', $relatedProduct->images)) && file_exists(explode(', ', $relatedProduct->images)[0])) : ?>
                                                        <img src="<?= $base ?><?= explode(', ', $relatedProduct->images)[0] ?>" alt="<?= $relatedProduct->name ?>" title="<?= $relatedProduct->name ?>" loading="lazy" />
                                                    <?php else : ?>
                                                        <img src="<?= $base . 'assets/site/img/products/produto-sem-imagem.jpg' ?>" alt="<?= $relatedProduct->name ?>" title="<?= $relatedProduct->name ?>" loading="lazy" />
                                                    <?php endif; ?>
                                                    <div class="content">
                                                        <strong class="text-uppercase"><?= explode(', ', explode(' > ', $relatedProduct->categories)[0])[0] ?></strong>
                                                        <p class="text-center mt-0"><?= $relatedProduct->name ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <a href="<?= $base . $relatedProduct->path ?>" class="themesflat-button bg-accent d-block text-uppercase" title="Clique e veja mais detalhes do produto <?= $relatedProduct->name ?>">Ver mais <div class="fa fa-search"></div></a>
                                        </div>
                                    </div>
                                </div><!-- /.themesflat-image-box -->
                            <?php endforeach; ?>
                            <!-- </div> -->

                        </div>
                    </div><!-- /.themesflat-carousel-box -->

                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- END SERVICES -->
<?php endif; ?>