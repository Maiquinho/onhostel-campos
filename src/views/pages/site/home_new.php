<?php

use src\Config;
use src\helpers\Company;
use src\helpers\Phone;
use src\helpers\WhatsappMessage;

list($title, $description, $pageId) = array_values($metadata);

$pageData = [
    'title'         => $title,
    'description'   => $description,
    'pageId'        => $pageId
];

$render('partials/site', 'head', $pageData);
$render('partials/site', 'header');
$render('partials/site', 'slider');
?>


<main>

    <?php $render('partials/site', 'highlights') ?>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row flex-column flex-column-reverse flex-lg-row g-5">

                <div class="col-lg-6">
                    <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border"><?= Company::getShortName() ?></p>
                    <h1 class="text-uppercase mb-4">ON Hostel - Campos do Jordão</h1>
                    <p>Seja bem-vindo ao ON Hostel Campos do Jordão, onde sua estadia é repleta de conforto e aventura em meio às belas paisagens da Serra da Mantiqueira! Nosso objetivo é oferecer uma experiência única, que vai além de simples acomodações, em um ambiente acolhedor e descontraído, ideal para quem busca descanso ou novas aventuras.</p>
                    <div class="row g-4">
                        <div class="col-12 col-lg-12">
                            <h2 class="text-uppercase mb-3">Reserve Agora</h2>
                            <p class="d-none d-lg-block">Inicie o dia com nosso café da manhã, cuidadosamente preparado para todos os gostos, e aproveite nossas opções de lazer, como trilhas de quadriciclo e UTV. Estamos prontos para tornar sua viagem a Campos do Jordão inesquecível!</p>
                        </div>
                        <div class="col-12 d-lg-none">
                            <video class="mobile-home-video" width="100%" height="300" controls autoplay muted loop>
                                <source src="<?= $base ?>assets/site/img/on-hostel-campos-do-jordao.mp4#t=0.001" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col-12 d-lg-none">
                            <p>Inicie o dia com nosso café da manhã, cuidadosamente preparado para todos os gostos, e aproveite nossas opções de lazer, como trilhas de quadriciclo e UTV. Estamos prontos para tornar sua viagem a Campos do Jordão inesquecível!</p>
                        </div>
                        <div class="col-12">
                            <div class="d-flex gap-2 mt-2">
                                <a href="<?= Config::BOOKING_URL ?>" class="d-flex align-items-center gap-1 btn btn-outline-primary rounded-0 py-2" target="_blank" title="Reservar vaga online">Reservar Online <i class="fas fa-calendar"></i></a>
                                <a href="<?= WhatsappMessage::generatePlural(Phone::getFirst()->unmaskedPhone, "", "Olá, vi seu site e gostaria de fazer uma reserva no " . Company::getShortName() . "!") ?>" class="d-flex align-items-center gap-1 btn btn-whatsapp rounded-0 py-2" target="_blank" title="Reservar vaga por WhatsApp">Reservar por WhatsApp <i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-0 mt-lg-5">
                    <div class="d-flex flex-column">
                        <video width="100%" height="500" class="d-none d-lg-block" controls autoplay muted loop>
                            <source src="<?= $base ?>assets/site/img/on-hostel-campos-do-jordao.mp4#t=0.001" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-xxl py-2 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Serviços</p>
                        <h2 class="text-uppercase mb-4">Comodidades do ON Hostel</h2>
                    </div>
                </div>
            </div>
            <div class="row d-none d-lg-flex">
                <div class="col-12 col-lg-4">
                    <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                        <h3 class="h5">Recepção 24 Horas <i class="fas fa-concierge-bell"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Equipe receptiva e prestativa disponível 24 horas para atender às necessidades dos hóspedes.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Café da Manhã <i class="fas fa-coffee"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Café da manhã com uma variedade de opções para todos os gostos.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Acomodações Confortáveis <i class="fas fa-bed"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Quartos privativos e compartilhados com camas confortáveis e roupa de cama de qualidade.</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Opções de quartos com ar condicionado, banheiro privativo ou compartilhado.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                        <h3 class="h5">Wi-Fi Gratuito <i class="fas fa-wifi"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Acesso gratuito à internet Wi-Fi de alta velocidade em todas as áreas do hostel.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Segurança e Conforto <i class="fas fa-lock"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>No ON Hostel, a segurança dos nossos hóspedes é prioridade. Todos os quartos são equipados com portas de fechadura digital, proporcionando tranquilidade e controle de acesso aos ambientes.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Cozinha Compartilhada <i class="fas fa-utensils"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Cozinha equipada para uso dos hóspedes, ideal para preparar refeições rápidas e econômicas.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Áreas Comuns Acolhedoras <i class="fas fa-couch"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Salas de estar confortáveis, áreas de convivência com jogos e TV a cabo para relaxar e socializar.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                        <h3 class="h5">Aventura Sobre Rodas <i class="fas fa-car"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Aluguel de UTV e quadriciclo para explorar trilhas exclusivas em Campos do Jordão com total liberdade e adrenalina.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Opções de Quartos Confortáveis <i class="fas fa-snowflake"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>Ar condicionado, banheiro privativo/compartilhado, e portas de fechadura digital.</li>
                        </ul>
                    </div>
                    <div class="bg-secondary border py-3 px-4 mt-2">
                        <h3 class="h5">Ambiente Acolhedor <i class="fas fa-couch"></i></h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i>No ON Hostel, proporcionamos um ambiente acolhedor e amigável, ideal para quem busca conforto e interação durante sua estadia.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="owl-carousel services-carousel d-block d-lg-none">
                <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                    <h3 class="h5">Recepção 24 Horas <i class="fas fa-concierge-bell"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Equipe receptiva e prestativa disponível 24 horas para atender às necessidades dos hóspedes.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Café da Manhã <i class="fas fa-coffee"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Café da manhã com uma variedade de opções para todos os gostos.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Acomodações Confortáveis <i class="fas fa-bed"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Quartos privativos e compartilhados com camas confortáveis e roupa de cama de qualidade.</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Opções de quartos com ar condicionado, banheiro privativo ou compartilhado.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                    <h3 class="h5">Wi-Fi Gratuito <i class="fas fa-wifi"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Acesso gratuito à internet Wi-Fi de alta velocidade em todas as áreas do hostel.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Segurança e Conforto <i class="fas fa-lock"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>No ON Hostel, a segurança dos nossos hóspedes é prioridade. Todos os quartos são equipados com portas de fechadura digital, proporcionando tranquilidade e controle de acesso aos ambientes.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Cozinha Compartilhada <i class="fas fa-utensils"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Cozinha equipada para uso dos hóspedes, ideal para preparar refeições rápidas e econômicas.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Áreas Comuns Acolhedoras <i class="fas fa-couch"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Salas de estar confortáveis, áreas de convivência com jogos e TV a cabo para relaxar e socializar.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                    <h3 class="h5">Aventura Sobre Rodas <i class="fas fa-car"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Aluguel de UTV e quadriciclo para explorar trilhas exclusivas em Campos do Jordão com total liberdade e adrenalina.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Opções de Quartos Confortáveis <i class="fas fa-snowflake"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>Ar condicionado, banheiro privativo/compartilhado, e portas de fechadura digital.</li>
                    </ul>
                </div>
                <div class="bg-secondary border py-3 px-4 mt-2">
                    <h3 class="h5">Ambiente Acolhedor <i class="fas fa-couch"></i></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i>No ON Hostel, proporcionamos um ambiente acolhedor e amigável, ideal para quem busca conforto e interação durante sua estadia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <?php
    $render('partials/site', 'testimonials');
    $render('partials/site', 'gallery', ['pageId' => $pageId]);
    ?>

    <!-- Address Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Google Maps</p>
                    <h2 class="text-uppercase mb-4">Nosso Endereço</h2>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.0724526323562!2d-45.5737321!3d-22.7174671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc89006471641f%3A0x9918e98029bc3cb8!2sOn%20Hostel%20Capivari%20Campos%20do%20Jord%C3%A3o%20passeio%20quadriciclo!5e0!3m2!1spt-BR!2sbr!4v1735854320742!5m2!1spt-BR!2sbr" width="100%" height="450" style="filter: invert(100%) contrast(100%); border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Address End -->


    <!-- Contact Start -->
    <div class="container-xxl py-3 d-none">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row g-0">
                <div class="d-none d-lg-block col-lg-6">
                    <div class="h-100" style="@media (min-width: 992px){min-height: 400px;}">
                        <!-- <iframe class="google-map w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14642.530069637232!2d-46.507217!3d-23.4376384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8b002558e619%3A0x158c88e5d0385650!2sON%20Park!5e0!3m2!1spt-BR!2sbr!4v1714094691835!5m2!1spt-BR!2sbr" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        <img src="<?= $base ?>assets/site/img/hostel-recepcao.jpg" class="img-fluid" loading="lazy" alt="" title="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-secondary h-100 p-5">
                        <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Reservas</p>
                        <h2 class="text-uppercase h3 mb-4">Solicite os quartos disponíveis</h2>
                        <!-- <span class="d-block text-light mb-2">Preencha os campos abaixo e veja os quartos disponíveis.</span> -->
                        <form method="POST" data-booking-form="contact-form">
                            <div class="row g-3">
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <input id="name" type="text" class="form-control bg-transparent" name="name" placeholder="Seu nome*" data-booking-form-field="name" data-booking-form-field-title="Nome" required />
                                        <label for="name">Seu nome <span class="text-primary">*</span></label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <input id="phone" type="text" class="form-control bg-transparent" name="phone" placeholder="Telefone*" data-booking-form-field="phone" data-booking-form-field-title="Telefone" required />
                                        <label for="phone">Seu telefone <span class="text-primary">*</span></label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <input id="email" type="email" class="form-control bg-transparent" name="branch" placeholder="Seu e-mail*" data-booking-form-field="email" data-booking-form-field-title="E-mail" required />
                                        <label for="email">Seu e-mail <span class="text-primary">*</span></label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <select id="select-branch" class="form-select bg-secondary" name="branch" aria-label="Seleção de como o usuário conheceu a empresa" data-booking-form-field="branch" data-booking-form-field-title="Como nos conheceu">
                                            <option selected disabled>Selecione uma opção</option>
                                            <option value="Unidade I">Unidade I</option>
                                            <option value="Unidade II">Unidade II</option>
                                        </select>
                                        <label for="select-branch">Como nos conheceu?</label>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="arrival" type="date" min="<?= date('Y-m-d') ?>" class="form-control bg-secondary text-light" name="arrival" data-booking-form-field="arrival" data-booking-form-field-title="Chegada" required />
                                        <label for="arrival">Chegada <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="departure" type="date" min="<?= date('Y-m-d') ?>" class="form-control bg-secondary text-light" name="departure" data-booking-form-field="departure" data-booking-form-field-title="Saída" required />
                                        <label for="departure">Saída <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="adults" type="number" min="1" max="10" class="form-control bg-secondary text-light" name="adults" data-booking-form-field="adults" data-booking-form-field-title="Adultos" value="1" required />
                                        <label for="adults">Adultos <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="childs" type="number" max="9" class="form-control bg-secondary text-light" name="childs" data-booking-form-field="childs" data-booking-form-field-title="Crianças" value="0" required />
                                        <label for="childs">Crianças <span class="text-primary">*</span></label>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-floating">
                                        <input id="subject" type="text" class="form-control bg-transparent" name="subject" placeholder="Assunto (opcional)" data-booking-form-field="subject" data-booking-form-field-title="Assunto" />
                                        <label for="subject">Assunto (opcional)</label>
                                    </div>
                                </div> -->
                                <input type="hidden" name="form_type" value="contact-form" />
                                <input type="checkbox" class="d-none" value="booking" checked>
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <textarea id="message" class="form-control bg-transparent" name="messsage" placeholder="Escreva aqui sua mensagem..." data-booking-form-field="message" data-booking-form-field-title="Mensagem" style="height: 100px"></textarea>
                                        <label for="message">Mensagem (opcional)</label>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <!-- <div class="form-floating d-flex flex-column flex-lg-row gap-2"> -->
                                    <button class="btn btn-transparent d-flex align-items-center gap-2 text-light border-primary border-2 rounded-0 py-2 px-lg-4" type="button" data-booking-form-trigger="submit">Ver quartos disponíveis <i class="fas fa-angle-right"></i></button>
                                    <!-- <button class="btn btn-primary w-100 py-2" type="submit">Enviar por E-mail</button> -->
                                    <!-- </div> -->
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