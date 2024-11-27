    <?php

    use src\helpers\Author;
    use src\helpers\Company;
    use src\helpers\Email;
    use src\helpers\Phone;
    use src\helpers\Social;
    use src\helpers\WhatsappMessage;

    ?>


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <a href="<?= $base ?>" class="logo mb-4">
                        <img src="<?= $base ?>assets/site/img/logo.png" class="img-fluid" alt="logotipo da marca: <?= Company::getShortName() ?>" title="Logo - <?= Company::getFullName() ?>" />
                    </a>

                    <p>Descubra o conforto e a hospitalidade no ON Hostel. Localizado em um ambiente acolhedor e descontraído, oferecemos uma estadia memorável a preços acessíveis. Nossa equipe dedicada está sempre pronta para recebê-lo e garantir que sua experiência conosco seja incrível.</p>
                    <div class="d-flex pt-1 m-n1">
                        <?php

                        $socialDataArraySortedByNameDesc = Social::getAll();

                        array_multisort(array_map(function ($element) {
                            return $element->name;
                        }, $socialDataArraySortedByNameDesc), SORT_DESC, $socialDataArraySortedByNameDesc);

                        foreach ($socialDataArraySortedByNameDesc as $socialData) : ?>
                            <a href="<?= $socialData->url ?>" class="btn btn-lg-square btn-dark text-primary m-1" target="_blank" title="<?= ucfirst($socialData->name) . ": " . Company::getShortName() ?>">
                                <i class="fab fa-<?= $socialData->name ?> fa-lg"></i>
                            </a>
                        <?php endforeach; ?>
                        <a href="<?= WhatsappMessage::generatePlural(Phone::getFirst()->unmaskedPhone, "", "Olá, vi seu site e gostaria de fazer uma reserva na " . Company::getShortName() . "!") ?>" class="btn btn-lg-square btn-dark text-primary m-1" title="Clique e fale conosco pelo WhatsApp" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-uppercase mb-4">Institucional</h3>
                    <a class="btn btn-link" href="<?= $base . 'o-hostel' ?>" title="Página O Hostel">O Hostel</a>
                    <a class="btn btn-link" href="<?= $base . 'informacoes' ?>" title="Página de informações">Informações</a>
                    <a class="btn btn-link" href="<?= $base . 'como-chegar-no-hostel' ?>" title="Página como chegar no Hostel">Como chegar</a>
                    <a class="btn btn-link" href="<?= $base . 'contato' ?>" title="Página de contato">Contato</a>
                    <a class="btn btn-link" href="<?= $base . 'termos-e-condicoes' ?>" title="Página termos e condições">Termos e condições</a>
                    <a class="btn btn-link" href="<?= $base . 'politica-de-privacidade' ?>" title="Página política de privacidade">Política de privacidade</a>
                    <a class="btn btn-link" href="<?= $base . 'mapa-do-site' ?>" title="Página mapa do site">Mapa do site</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-uppercase mb-4">Informações de contato</h3>
                    <?php foreach(Company::getAddress() as $companyAddress): ?>
                        <div class="d-flex align-items-center contact-info mb-2">
                            <a href="<?= $companyAddress->google_maps ?>" class="d-flex" title="Endereço do Estacionamento <?= Company::getShortName() ?>. Clique para abrir o Google Maps." target="_blank">
                                <div class="btn-square bg-dark flex-shrink-0 me-3">
                                    <span class="fa fa-map-marker-alt text-primary"></span>
                                </div>
                                <span><?= $companyAddress->address . " - " . $companyAddress->district . ", " . $companyAddress->city . " - " . $companyAddress->state . ", " . $companyAddress->zipcode ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="d-flex align-items-center contact-info mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span><a href="<?= WhatsappMessage::generatePlural(Phone::getFirst()->unmaskedPhone, "", "Olá, vi seu site e gostaria de fazer uma reserva na " . Company::getShortName() . "!") ?>" title="Clique e fale conosco pelo WhatsApp" target="_blank"><?= Phone::getFirst()->phone ?></a></span>
                    </div>

                    <div class="d-flex align-items-center contact-info mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span><a href="mailto:<?= Email::getFirst()->address ?>" title="Clique e entre em contato conosco por e-mail" target="_blank"><?= Email::getFirst()->address ?></a></span>
                    </div>
                    <div class="d-flex align-items-center contact-info">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-clock text-primary"></span>
                        </div>
                        <span title="Horário de funcionamento de segunda a sexta aberto 24h">Todos os dias: aberto 24h</span>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Serviços</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-start mb-2 mb-md-0">
                        &copy; <?= Company::getShortName() . ' ' . date('Y  ') ?> - Todos os direitos reservados.
                    </div>
                    <div class="col-md-6 text-center d-block d-lg-flex justify-content-end">
                        <span class="copy-author">Desenvolvido por: <a href="<?= Author::getDomain() ?>" target="_blank"><img src="<?= $base ?>assets/site/img/michael-matheus.svg" class="img-fluid" alt=""></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top" style="display: none;" title="Voltar ao topo"><i class="bi bi-arrow-up"></i></a>

    <script src="<?= $base ?>assets/site/js/whatsapp.js"></script>

    <?php if($pageId == 'home' || $pageId == 'contact' || $pageId == 'single-article'): ?>
    <script src="<?= $base ?>assets/site/js/form-whatsapp.js"></script>
    <?php endif; ?>
    <?php if($pageId == 'home'): ?>
    <script src="<?= $base ?>assets/site/js/form-booking.js"></script>
    <?php endif; ?>

    <!-- JavaScript Libraries -->
    <script src="<?= $base ?>assets/site/js/jquery.min.js"></script>
    <script src="<?= $base ?>assets/site/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base ?>assets/site/lib/wow/wow.min.js"></script>
    <script src="<?= $base ?>assets/site/lib/easing/easing.min.js"></script>
    <script src="<?= $base ?>assets/site/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= $base ?>assets/site/lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

    <script src="<?= $base ?>assets/site/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bridget@3.0.1/jquery-bridget.min.js"></script>
    <script src="<?= $base ?>assets/site/lib/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= $base ?>assets/site/js/main.js"></script>

    </body>

    </html>