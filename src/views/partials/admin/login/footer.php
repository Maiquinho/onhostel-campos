<?php

use src\helpers\Author;
?>
        <!-- Footer Section Start -->
        <div class="section footer-section">

            <!-- Footer Copyright End -->
            <div class="copyright">
                <div class="container">
                    <div class="copyright-text">
                        <p>
                            Powered by: <a href="<?= Author::getDomain() ?>" target="_blank" title="<?= Author::getName() ?>"><img src="<?= $base ?>assets/site/img/logo-copyright-white.png" class="img-fluid" alt="" /></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>
        <!-- Footer Section End -->

        <!-- JS
    ============================================ -->

        <!-- Modernizer & jQuery JS -->
        <script src="<?= $base ?>assets/admin/login/js/vendor/jquery-3.5.1.min.js"></script>
        <!-- Main JS -->
        <script src="<?= $base ?>assets/admin/login/js/main.js"></script>

        <script src="<?= $base ?>assets/admin/login/js/login.js"></script>

        </body>

        </html>