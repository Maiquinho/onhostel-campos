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
    'title'             => $breadcrumbTitle,
    'breadcrumbSchema'  => $breadcrumbSchema,
    'pageId'            => $pageId,
]);

?>


<main>
    <!-- About Start -->
    <div class="container-xxl pt-5 pb-4">
        <div class="container">
            <div class="row flex-column flex-lg-row g-5">
                <div class="col-12 col-lg-8 d-flex flex-column justify-content-center mt-0 mt-lg-4">
                    <div class="article-content-wrapper article-content-wrapper--hidden mb" data-article="content">
                        <?php

                        /**
                         * 
                         * Chama o conteúdo principal da página que é um HTML vindo do banco de dados
                         * 
                         */

                        echo $article->content;

                        ?>
                    </div>
                    <button class="btn btn-light d-block d-lg-none mb-4" type="button" data-article="toggle-content">Continuar lendo</button>

                    <?php $render('partials/site', 'gallery-grid', [
                        'title' => $title
                    ]); ?>
                </div>
                <!-- <aside class="col-6"> -->
                <aside class="col-12 col-lg-4 article-form">
                    <div class="bg-secondary sticky-top p-5">
                        <h3 class="h5">Dúvidas? Fale conosco</h3>

                        <form method="POST" data-whatsapp-form="article-form">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input id="name" type="text" class="form-control bg-transparent" name="name" placeholder="Seu nome*" data-whatsapp-form-field="name" data-whatsapp-form-field-title="Nome" required />
                                        <label for="name">Seu nome <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="phone" type="text" class="form-control bg-transparent" name="phone" placeholder="Telefone*" data-whatsapp-form-field="phone" data-whatsapp-form-field-title="Telefone" required />
                                        <label for="phone">Seu telefone <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input id="email" type="email" class="form-control bg-transparent" name="email" placeholder="Seu e-mail*" data-whatsapp-form-field="email" data-whatsapp-form-field-title="E-mail" required />
                                        <label for="email">Seu e-mail <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12"> -->
                                    <!-- <div class="form-floating">
                                        <input id="booking-yes" type="radio" class="form-control bg-transparent" name="booking"
                                        data-whatsapp-form-field="email" data-whatsapp-form-field-title="E-mail" required />
                                        <label for="booking-yes">Seu e-mail <span class="text-primary">*</span></label>
                                    </div> -->
                                <!-- </div> -->
                                <input type="hidden" name="subject" value="<?= $article->h1 ?>" data-whatsapp-form-field="subject" data-whatsapp-form-field-title="Assunto" />
                                <input type="hidden" name="form_type" value="article-form" />
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea id="message" class="form-control bg-transparent" name="message" placeholder="Escreva aqui sua mensagem..." data-whatsapp-form-field="message" data-whatsapp-form-field-title="Mensagem" style="height: 100px"></textarea>
                                        <label for="message">Mensagem (opcional)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input id="booking" class="form-check-input" type="checkbox" name="booking" value="Sim" checked>
                                        <label class="form-check-label" for="booking">
                                            Quero fazer uma reserva
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating d-flex flex-column gap-2">
                                        <button class="btn btn-whatsapp w-100 py-2" type="button" data-whatsapp-form-trigger="submit">Enviar por WhatsApp</button>
                                        <button class="btn btn-primary w-100 py-2" type="submit">Enviar por E-mail</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </aside>
                <!-- </aside> -->
            </div>
        </div>
    </div>
    <!-- About End -->

</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>