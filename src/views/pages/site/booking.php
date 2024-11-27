<?php

list($title, $description, $breadcrumbTitle, $breadcrumbSchema) = array_values($metadata);

$pageData = [
    'title'         => $title,
    'description'   => $description,
    'pageId'        => $pageId
];

$render('partials/site', 'head', $pageData);
$render('partials/site', 'header');
$render('partials/site', 'breadcrumbs', [
    'title' => $breadcrumbTitle,
    'breadcrumbSchema' => $breadcrumbSchema,
    'pageId'    => $pageId,
]);

?>


<main>

    <?php $render('partials/site', 'booking') ?>

</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>