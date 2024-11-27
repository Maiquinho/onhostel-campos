<div class="col-md-8">
    <h6 class="page-title"><?= $title ?></h6>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="<?= $base . 'admin/' ?>">Dashboard</a></li>
        <?php foreach($breadcrumbItem as $breadcrumbName => $breadcrumbUrl): ?>
            <?php 
                
                /**
                 * 
                 * Verifica se o último item de $breacrumbItem é igual a $breacrumbUrl
                 * 
                */
                
                if(end($breadcrumbItem) == $breadcrumbUrl): ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumbName ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?= (!empty($breadcrumbUrl)) ? $base . "admin/" . $breadcrumbUrl : 'javascript:void(0)' ?>"><?= $breadcrumbName ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ol>
</div>