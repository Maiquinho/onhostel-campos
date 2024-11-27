<?php

use src\helpers\Author;
use src\helpers\Company;
?>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                &copy; <?= Company::getShortName() ?> Admin - Powered by: <a href="<?= Author::getDomain() ?>" target="_blank"><img src="<?= $base . "assets/site/img/michael-matheus.svg" ?>" height="14" alt="<?= Author::getName() ?>" title="<?= Author::getName() ?>" /></a>
            </div>
        </div>
    </div>
</footer> 