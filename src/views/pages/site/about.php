<?php

use src\helpers\Company;
use src\helpers\Phone;
use src\helpers\WhatsappMessage;

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
    <!-- About Start -->
    <div class="container-xxl pt-5 pb-4">
        <div class="container">
            <div class="row flex-column flex-column-reverse flex-lg-row g-5">
                <div class="col-12 d-flex flex-column justify-content-center col-lg-6 mt-0 mt-lg-4">

                    <h2>Nossa História</h2>
                    <p>O ON Hostel, parte do grupo ON, continua sua missão de oferecer hospitalidade acessível com a nova unidade em Campos do Jordão, inaugurada em 2024. Desde o início, buscamos criar um espaço que une conforto, segurança e um ambiente acolhedor, onde cada hóspede se sente em casa. Nossa dedicação é à excelência no atendimento e à satisfação dos que escolhem se hospedar conosco.</p>

                    <h2>Nossa Missão</h2>
                    <p>No ON Hostel Campos do Jordão, nosso objetivo é proporcionar uma estadia que seja segura, confortável e especial. Nossa equipe está pronta para tornar sua experiência inesquecível, desde o check-in até o check-out, oferecendo um atendimento acolhedor e sempre à disposição para o que precisar.</p>

                    <img src="<?= $base ?>assets/site/img/o-hostel.jpg" class="img-fluid d-block d-lg-none mb-3" alt="fachada do hostel" title="Fachada do Hostel" />

                    <div class="d-block d-lg-none">
                        <h2>O que Oferecemos</h2>
                        <ul>
                            <li><strong>Quartos Confortáveis:</strong> Com opções para todos os gostos, nossos quartos são preparados para proporcionar o máximo de conforto, sejam camas de casal ou solteiro, todos equipados com aquecimento para o clima serrano.</li>
                            <li><strong>Segurança:</strong> Valorizamos a tranquilidade dos hóspedes, com fechaduras digitais em todos os quartos, garantindo segurança e privacidade.</li>
                            <li><strong>Localização Privilegiada:</strong> Em uma das áreas mais belas de Campos do Jordão, nosso hostel está próximo às principais atrações turísticas da cidade.</li>
                            <li><strong>Café da Manhã:</strong> Inicie o dia com nosso café, preparado para atender a todos os gostos.</li>
                            <li><strong>Aventura na Serra:</strong> Oferecemos aluguel de UTV e quadriciclos para explorar as paisagens e trilhas da região, uma experiência única para os aventureiros.</li>
                            <li><strong>Ambiente Aconchegante:</strong> Nossas áreas comuns são decoradas para oferecer um espaço acolhedor, onde você pode relaxar e interagir com outros hóspedes.</li>
                        </ul>

                        <h2>Nossa Filosofia</h2>
                        <p>Acreditamos que uma boa hospedagem vai além de uma cama confortável e uma boa localização. No ON Hostel, nos esforçamos para criar um ambiente onde todos se sintam bem-vindos e valorizados. Acreditamos na importância de oferecer um serviço de qualidade e atenção aos detalhes, garantindo que sua estadia seja não apenas uma necessidade atendida, mas uma experiência positiva e memorável.</p>

                        <h2>Venha nos Conhecer</h2>
                        <p>Estamos ansiosos para receber você no ON Hostel e mostrar tudo o que temos a oferecer. Faça sua reserva hoje mesmo e descubra porque somos a escolha ideal para sua estadia em Guarulhos. Seja para uma noite ou para uma estadia prolongada, estamos aqui para tornar sua visita a Guarulhos a mais agradável possível.</p>

                        <p>A equipe do ON Hostel, parte do grupo ON, agradece sua visita ao nosso site e espera vê-lo em breve!</p>
                    </div>

                    <!-- <img src="<?= $base ?>assets/site/img/o-hostel.jpg" class="img-fluid d-block d-lg-none mb-3" alt="fachada do hostel" title="Fachada do Hostel" />

                    <p>Além disso, buscamos oferecer uma experiência de estacionamento sem complicações. Nossa localização estratégica facilita o acesso ao aeroporto e aos estabelecimentos próximos, tornando a jornada do cliente mais eficiente e tranquila. Na ON Hostel, você pode confiar que seu carro estará em boas mãos enquanto você estiver ausente, seja por um curto período ou por longa permanência.</p> -->
                </div>
                <div class="d-none d-lg-block col-lg-6 mt-0">
                    <img src="<?= $base ?>assets/site/img/o-hostel.jpg" class="img-fluid" alt="fachada do hostel" title="Fachada do Hostel" />
                </div>
                <div class="d-none d-lg-block col-lg-12 mt-0">
                    <h2>O que Oferecemos</h2>
                    <ul>
                        <li><strong>Quartos Confortáveis:</strong> Com opções para todos os gostos, nossos quartos são preparados para proporcionar o máximo de conforto, sejam camas de casal ou solteiro, todos equipados com aquecimento para o clima serrano.</li>
                        <li><strong>Segurança:</strong> Valorizamos a tranquilidade dos hóspedes, com fechaduras digitais em todos os quartos, garantindo segurança e privacidade.</li>
                        <li><strong>Localização Privilegiada:</strong> Em uma das áreas mais belas de Campos do Jordão, nosso hostel está próximo às principais atrações turísticas da cidade.</li>
                        <li><strong>Café da Manhã:</strong> Inicie o dia com nosso café, preparado para atender a todos os gostos.</li>
                        <li><strong>Aventura na Serra:</strong> Oferecemos aluguel de UTV e quadriciclos para explorar as paisagens e trilhas da região, uma experiência única para os aventureiros.</li>
                        <li><strong>Ambiente Aconchegante:</strong> Nossas áreas comuns são decoradas para oferecer um espaço acolhedor, onde você pode relaxar e interagir com outros hóspedes.</li>
                    </ul>

                    <h2>Nossa Filosofia</h2>
                    <p>Acreditamos que hospitalidade é mais que uma boa cama e localização: é oferecer um ambiente onde todos se sintam bem-vindos e valorizados. No ON Hostel Campos do Jordão, priorizamos cada detalhe para que sua estadia seja uma experiência agradável e memorável.</p>

                    <h2>Venha nos Conhecer</h2>
                    <p>Estamos animados para receber você em nossa nova unidade em Campos do Jordão! Reserve agora e descubra porque somos a escolha ideal para sua estadia, seja para uma noite ou uma longa temporada.</p>

                    <p>A equipe ON Hostel aguarda sua visita para tornar sua experiência na Serra ainda mais especial.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php
    $render('partials/site', 'gallery', ['pageId' => $pageId]);
    ?>
</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>