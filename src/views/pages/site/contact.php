<?php

use src\helpers\Company;
use src\helpers\Email;
use src\helpers\Phone;

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
    <!-- Contact Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row g-0">
                <div class="col-lg-6">
                    <div class="h-100" style="@media (min-width: 992px){min-height: 400px;}">
                        <iframe class="google-map w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.0724526323562!2d-45.5737321!3d-22.7174671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc89006471641f%3A0x9918e98029bc3cb8!2sOn%20Hostel%20Capivari%20Campos%20do%20Jord%C3%A3o%20passeio%20quadriciclo!5e0!3m2!1spt-BR!2sbr!4v1735854320742!5m2!1spt-BR!2sbr" style="filter: invert(100%) contrast(100%); border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-secondary p-5">
                        <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Formulário de contato</p>
                        <h2 class="mb-4">Alguma dúvida? Fale conosco</h2>
                        <form method="POST" data-whatsapp-form="contact-form">
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
                                <!-- <div class="col-md-12">
                                    <div class="form-floating">
                                        <select id="whatsapp-form-where-did-you-find-us" class="form-control bg-transparent" name="where-did-you-find-us" aria-label="Seleção de como o usuário conheceu a empresa" data-whatsapp-form-field="where-did-you-find-us" data-whatsapp-form-field-title="Como nos conheceu">
                                            <option selected disabled>Como nos conheceu?</option>
                                            <option value="Busca do Google">Busca do Google</option>
                                            <option value="Outros Buscadores">Outros Buscadores</option>
                                            <option value="Links patrocinados">Links patrocinados</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Indicação">Indicação</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                        <label for="whatsapp-form-where-did-you-find-us">Como nos conheceu?</label>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input id="subject" type="text" class="form-control bg-transparent" name="subject" placeholder="Assunto (opcional)" data-whatsapp-form-field="subject" data-whatsapp-form-field-title="Assunto" />
                                        <label for="subject">Assunto (opcional)</label>
                                    </div>
                                </div>
                                <input type="hidden" name="form_type" value="contact-form" />
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea id="message" class="form-control bg-transparent" name="message" placeholder="Escreva aqui sua mensagem..." data-whatsapp-form-field="message" data-whatsapp-form-field-title="Mensagem" style="height: 100px"></textarea>
                                        <label for="message">Mensagem (opcional)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating d-flex flex-column flex-lg-row gap-2">
                                        <button class="btn btn-whatsapp w-100 py-2" type="button" data-whatsapp-form-trigger="submit">Enviar por WhatsApp</button>
                                        <button class="btn btn-primary w-100 py-2" type="submit">Enviar por E-mail</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>