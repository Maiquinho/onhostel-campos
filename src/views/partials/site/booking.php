<?php

use src\Config;
?>
<!-- Services Start -->
<div class="container-xxl py-2 py-lg-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Faça sua reserva</p>
                    <h2 class="text-uppercase mb-4">Temos 1 Hotel + 2 Hostels em Guarulhos</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-12 col-lg-4">
                <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                    <h3 class="h5">ON Hostel</h3>
                    <p>Possuímos 2 unidades com quartos compartilhados, cozinha compartilhada e muito mais!</p>

                    <img src="<?= $base ?>assets/site/img/unidade-1/home/hostel-reforma-2024-3.jpg" class="img-fluid mb-4" alt="Fachada do ON Hostel" title="Fachada do ON Hostel" />

                    <a href="<?= Config::BOOKING_URL ?>" class="d-block btn btn-transparent text-light text-uppercase border-primary border-2 rounded-0 py-2 px-lg-4" target="_blank">Reservar Online <i class="fas fa-calendar ms-2"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="bg-secondary border py-3 px-4 mt-2 mt-lg-0">
                    <h3 class="h5">ON Hotel</h3>
                    <p>Desfrute de quartos privativos com suíte e um ambiente repleto de conforto e comodidades exclusivas.</p>

                    <img src="https://onhotelgru.com.br/assets/site/img/unidade-1/home/hotel-reforma-2024-2.jpg" class="img-fluid mb-4" alt="Fachada do ON Hotel" title="Fachada do ON Hotel" />

                    <a href="<?= Config::BOOKING_URL ?>" class="d-block btn btn-transparent text-light text-uppercase border-primary border-2 rounded-0 py-2 px-lg-4" target="_blank">Reservar Online <i class="fas fa-calendar ms-2"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End -->