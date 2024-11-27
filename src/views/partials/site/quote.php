<?php
use src\helpers\Company;
use src\helpers\Phone;
use src\helpers\WhatsappMessage;
?>

<!-- QUOTE -->
<div class="row-quote bg-row-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="40" data-smobile="40"></div>
                <div class="themesflat-quote style-1 clearfix">
                    <div class="quote-item">
                        <div class="inner">
                            <div class="heading-wrap">
                                <h2 class="heading">Solicite um orçamento pelo Whatsapp
                                </h2>
                            </div>
                            <div class="button-wrap has-icon icon-left">
                                <a href="<?= WhatsappMessage::generatePlural(Phone::getFirst(true)->unmaskedPhone, '', 'Olá, vi seu site e gostaria de saber mais sobre os produtos da ' . Company::getShortName() . '!') ?>" class="themesflat-button bg-white small btn-whatsapp" target="_blank"><span><?= Phone::getFirst(true)->phone ?><span class="icon"><i class="fa fa-whatsapp"></i></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="40" data-smobile="40"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- END QUOTE -->