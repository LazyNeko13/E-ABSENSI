
                <!--begin::Aside-->
                <div id="display_side">
                    <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                        <!--begin::Logo-->
                        <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                            <a href="<?= base_url('dashboard') ?>">
                                <img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-demo9.svg" class="h-40px" />
                            </a>
                        </div>
                        <!--end::Logo-->
                        <?php $res_menu = get_menu($this->session->userdata('gds_role_id')); ?>
                        <!--begin::Nav-->
                        <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
                            <!--begin::Aside menu-->
                            <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
                                <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6 my-auto" data-kt-menu="true">
                                    <?php if ($res_menu): ?>
                                        <?php foreach ($res_menu as $rm): ?>
                                            <?php if ($rm->TIPE == 0): ?>
                                                <div class="menu-item py-3">

                                                    <a id="<?= $rm->ID_MENU.$rm->NAMA_MENU ?>" class="menu-link <?php if(preg_match("/".$this->uri->segment(1)."/i", $rm->LINK)){echo 'active';} ?>" href="<?= $rm->LINK ?>" title="<?= $rm->NAMA_MENU ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                            <span class="svg-icon svg-icon-2x">
                                                                <?php if ($rm->ICON): ?>
                                                                    <?= $rm->ICON; ?>
                                                                <?php else: ?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                                    </svg>
                                                                <?php endif ?>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </div>
                                            <?php else: ?>
                                                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
                                                    <span class="menu-link <?php if(isset($active) && $rm->NAMA_MENU == $active['parent']){echo'active';} ?>" title="<?= $rm->NAMA_MENU ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                                            <span class="svg-icon svg-icon-2x">
                                                               <?php if ($rm->ICON): ?>
                                                                    <?= $rm->ICON; ?>
                                                                <?php else: ?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                                    </svg>
                                                                <?php endif ?>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                                        <?php $res_submenu = get_submenu($rm->ID_MENU); ?>
                                                        <?php foreach ($res_submenu as $rsm): ?>
                                                            <?php if ($rsm->TIPE == 0): ?>
                                                                <div class="menu-item">
                                                                    <a class="menu-link <?php if(isset($active) && strpos($rsm->LINK, $active['sub'])){echo'active';} ?>" href="<?= $rsm->LINK ?>">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title"><?= $rsm->NAMA_SUBMENU ?></span>
                                                                    </a>
                                                                </div>
                                                            <?php else: ?>
                                                                <a class="menu-item menu-accordion">
                                                                    <span class="menu-link">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title"><?= $rsm->NAMA_SUBMENU ?></span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                </a>
                                                            <?php endif ?>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                            
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <!--end::Aside menu-->
                        </div>
                        <!--end::Nav-->

                        <!--begin::Footer-->
                            <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
                                <!--begin::Menu-->
                                <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Keluar">
                                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
                                                <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
                                                <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Footer-->
                    </div>
                    <!--end::Aside-->
                   
                    
                </div>