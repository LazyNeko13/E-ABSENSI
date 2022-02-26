    <!--begin::Footer-->
    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-gray-400 fw-bold me-1">Created by</span>
                <a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->

    <!--begin::Javascript-->
    <script>var hostUrl = "assets/";</script>
    <script>var BASE_URL = baseUrl = "<?= base_url(); ?>";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>assets/js/admin/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?= base_url() ?>assets/plugins/custom/leaflet/leaflet.bundle.js"></script>
    <script src="<?= base_url() ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url() ?>assets/js/admin/custom/modals/select-location.js"></script>
    <script src="<?= base_url() ?>assets/js/admin/custom/widgets.js"></script>
    <script src="<?= base_url() ?>assets/js/admin/custom/apps/chat/chat.js"></script>
    <script src="<?= base_url() ?>assets/js/admin/custom/modals/upgrade-plan.js"></script>
    <script src="<?= base_url() ?>assets/js/admin/custom/modals/create-app.js"></script>
    <script src="<?= base_url() ?>assets/js/admin/custom/modals/users-search.js"></script>


    <!-- LOAD ALERT -->
    <script src="<?= base_url('assets/js/umum/alert/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/umum/alert/scriptalert.js') ?>"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->


    <?php 

    if(isset($js_add) && is_array($js_add)){
        foreach($js_add AS $js){
            echo $js;
        }
    }else{
        echo (isset($js_add) && ($js_add != "") ? $js_add : ""); 
    }

    ?>
</body>
<!--end::Body-->
</html>