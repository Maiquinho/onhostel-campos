    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="<?= $base ?>assets/admin/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?= $base ?>assets/admin/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?= $base ?>assets/admin/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
                <div class="d-grid">
                    <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php switch ($pageId):
        case "404": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>


            <?php break; ?>
        <?php
        case "dashboard": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>


            <!-- Peity chart-->
            <script src="<?= $base ?>assets/admin/libs/peity/jquery.peity.min.js"></script>

            <!-- Plugin Js-->
            <script src="<?= $base ?>assets/admin/libs/chartist/chartist.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/pages/dashboard.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <?php break; ?>
        <?php
        case "banners": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>


            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "banner_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "banner_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "assets": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>


            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "asset_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Plugins js -->
            <script src="<?= $base ?>assets/admin/libs/dropzone/min/dropzone.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "asset_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Plugins js -->
            <script src="<?= $base ?>assets/admin/libs/dropzone/min/dropzone.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "highlights": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>


            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "highlight_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "highlight_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "testimonials": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "testimonial_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "testimonial_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "pages": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "page_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/tinymce/tinymce.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/form-editor.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-autofill-url.js"></script>

            <?php break; ?>
        <?php
        case "page_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/tinymce/tinymce.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/form-editor.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-autofill-url.js"></script>

            <?php break; ?>
        <?php
        case "posts": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "post_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/tinymce/tinymce.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/form-editor.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "post_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/tinymce/tinymce.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/form-editor.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-autofill-url.js"></script>

            <?php break; ?>
        <?php
        case "products": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "product_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/tinymce/tinymce.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/form-editor.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-disabled.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-category.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-autofill-url.js"></script>

            <?php break; ?>
        <?php
        case "product_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/tinymce/tinymce.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/form-editor.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-disabled.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-category.js"></script>
            <script src="<?= $base ?>assets/admin/js/form-autofill-url.js"></script>

            <?php break; ?>
        <?php
        case "users": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Required datatable js -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/jszip/jszip.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <!-- Datatable init js -->
            <script src="<?= $base ?>assets/admin/js/pages/datatables.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <script src="<?= $base ?>assets/admin/js/alert.js"></script>

            <?php break; ?>
        <?php
        case "user_edit": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "user_new": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <script src="<?= $base ?>assets/admin/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>
            <script src="<?= $base ?>assets/admin/js/custom-filestyle.js"></script>

            <?php break; ?>
        <?php
        case "profile": ?>

            <!-- JAVASCRIPT -->
            <script src="<?= $base ?>assets/admin/libs/jquery/jquery.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
            <script src="<?= $base ?>assets/admin/libs/node-waves/waves.min.js"></script>

            <!-- Magnific Popup-->
            <!-- <script src="<?= $base ?>assets/admin/libs/magnific-popup/jquery.magnific-popup.min.js"></script> -->

            <!-- Tour init js-->
            <script src="<?= $base ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
            <script src="<?= $base ?>assets/admin/js/pages/profile.init.js"></script>

            <script src="<?= $base ?>assets/admin/js/app.js"></script>

            <?php break; ?>
    <?php endswitch; ?>

    </body>

    </html>