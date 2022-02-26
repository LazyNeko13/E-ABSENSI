<style type="text/css">
	.form-control.pencarian{
		width: 50%;
		border: none;
	}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container">
			<div class="card mb-5 mb-xl-8">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bolder fs-3 mb-1">Tabel Managemen Halaman</span>
						<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> -->
					</h3>
						
					<div class="card-toolbar" style="flex-wrap: nowrap; width: 260px;">
						<input type="text" class="form-control form-control-sm bg-light pencarian me-3" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" />
						<!-- <a href="#" class="btn btn-sm btn-light btn-icon btn-custom btn-active-color-primary position-relative me-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<i class="bi bi-funnel-fill"></i>
						</a> -->
						<a data-bs-toggle="modal" href="#tambahHalaman" role="button" class="btn btn-sm btn-light-primary">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->Halaman</a>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body py-3">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table table-bordered align-middle gs-0 gy-4" style="border:1px solid #C6C6C6; border-radius: 10px;">
							<!--begin::Table head-->
							<thead style="border:1px solid #C6C6C6;">
								<tr class="fw-bolder text-muted bg-light">
									<th class="ps-4 min-w-150px text-center" style="width : 50px;">Icon</th>
									<th class="ps-4 min-w-150px text-center">Menu</th>
									<th class="min-w-120px text-center">Actions</th>
								</tr>
							</thead>

							<tbody>
								<?php if ($result): ?>
									<?php foreach ($result as $row): ?>
										<tr class="bg-light" style="border-right:1px solid #C6C6C6;  border-bottom:1px solid #C6C6C6;">
											<td>
												<p class="text-dark text-center fw-normal fw-bold d-block mb-0 fs-6"><?= ifnull($row->ICON) ?></p>
											</td>
											<td>
												<p class="text-dark text-center fw-normal fw-bold d-block mb-0 fs-6"><?= $row->NAMA_MENU ?></p>
											</td>
											<td class="text-center" style="border-bottom: 1px solid #C6C6C6;">
												<!--begin::Menu-->
												<button type="button" class="btn btn-secondary btn-sm btn-icon  btn-color-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<?php if ($row->TIPE == 1): ?>
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Tambah sub
															<i class="bi bi-plus ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
														</div>
													<?php endif ?>
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Edit halaman
														<i class="bi bi-pencil ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
													</div>
													<?php if ($row->STAY != 1): ?>
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Hapus halaman
															<i class="bi bi-trash ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
														</div>
														<div class="separator mt-2 opacity-75"></div>

														<div class="menu-item ms-8 mt-3">
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input id="onoff-<?= $row->ID_MENU ?>" class="form-check-input swith-on-off" data-id="<?= $row->ID_MENU ?>" type="checkbox" <?php if($row->AKTIF == 'Y'){echo 'checked';} ?> />
																<label class="form-check-label">On/Off</label>
															</div>
														</div>
													<?php endif ?>

												</div>
											</td>
										</tr>
										<?php if ($row->TIPE == 1): ?>
											<?php $submenu = get_submenu($row->ID_MENU) ?>
											<?php foreach ($submenu as $sub): ?>
												<tr>
													<td style="border-right:1px solid #C6C6C6; border-bottom: 1px solid #C6C6C6;text-align: right;justify-content: flex-end;" colspan="2"> 
														<p class="text-dark text-right fw-normal d-block mb-1 fs-6"><?= $sub->NAMA_SUBMENU ?></p>
													</td>
													<td class="text-center" style="border-bottom: 1px solid #C6C6C6;">
														<!--begin::Menu-->
														<button type="button" class="btn btn-light btn-sm btn-icon  btn-color-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Edit Halaman
																<i class="bi bi-pencil ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Hapus Halaman
																<i class="bi bi-trash ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
															</div>

															<div class="separator mt-2 opacity-75"></div>

															<div class="menu-item ms-8 mt-3">
																<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" checked="checked" />
																	<label class="form-check-label">On/Off</label>
																</div>
															</div>
														</div>
													</td>
												</tr>
												
												
											<?php endforeach ?>
										<?php endif ?>
									<?php endforeach ?>
								<?php else: ?>
									<tr>
										<td colspan="3">Tidak ada data tersedia</td>
									</tr>
								<?php endif ?>
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--begin::Body-->
			</div>
		</div>
	</div>
</div>


<!-- Tambah Siswa Modal -->
<div class="modal fade" id="tambahHalaman" aria-hidden="true" aria-labelledby="tambahHalamanLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <div class="modal-content">
      <form class="form" action="#" id="kt_modal_add_event_form">
			<div class="modal-header">
				<h2 class="fw-bolder" data-kt-calendar="title">Tambah Halaman</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-10 px-lg-17">
					<div class="fv-row mb-9" id="nama_menu">
						<label class="fs-6 fw-bold required mb-2">Menu</label>
						<input type="text" class="form-control form-control-solid" name="nama_menu" placeholder="Isikan nama menu"/>
					</div>

					<div class="fv-row mb-9" id="icon">
						<label class="fs-6 fw-bold required mb-2">Icon</label>
						<input type="text" class="form-control form-control-solid" name="icon" placeholder="Isikan Icon"/>
					</div>

					<div class="fv-row mb-9"  id="tipe">
						<label class="fs-6 fw-bold required mb-2">Tipe</label>
						<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" name="tipe" id="change_tipe">
								<option></option>
								<option value="1" selected>Link</option>
								<option value="2">Submenu</option>
							</select>
					</div>

					<!--end::Form-->
					<div class="fv-row mb-9" id="tipe_link">
						<label class="fs-6 fw-bold required mb-2">Link</label>
						<input type="text" class="form-control form-control-solid" id="link" name="link" placeholder="Isikan Link"/>
					</div>

					<div id="submenu_kosong"></div>

					<div id="tipe_drop" class="d-none">
						<div class="fv-row mb-5" id="row_submenu">
							<label class="fs-6 fw-bold required mb-2" id="sub">Tambahkan Sub Menu</label>
							<!-- <div class="form-group mb-2">
						     	<input type="text" class="form-control" name="sub[0][]" placeholder="Nama Submenu">
						    	<input type="text" class="form-control" name="sub[0][]" placeholder="Link">
						  	</div> -->
						  	<div class="row d-flex">
						  		<div class="col">
						  			<input type="text" class="form-control form-control-solid form-control-sm" name="sub[0][]" placeholder="Nama Submenu">
						  		</div>
						  		<div class="col">
						  			<input type="text" class="form-control form-control-solid form-control-sm" name="sub[0][]" placeholder="Link">
						  		</div>
						  		<div class="col-auto">
				           			<button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1">
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
												<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
												<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
											</svg>
										</span>
									</button>
						  		</div>
						  	</div>
						</div>
						<div class="fv-row mb-9 d-flex justify-content-center align-items-center">
							<button type="button" id="add_menu_sub" class="btn btn-md btn-light-primary rounded-circle d-flex justify-content-center align-items-center" style="width: 40px;">
								<span class="svg-icon svg-icon-2 ms-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
									</svg>
								</span>
		          </button>
						</div>
						
					</div>
			<div class="modal-footer flex-center">
				<!--begin::Button-->
				<button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Batal</button>
				<!--end::Button-->
				<!--begin::Button-->
				<button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
					<span class="indicator-label">Simpan</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
				<!--end::Button-->
			</div>
			<!--end::Modal footer-->
		</form>
    </div>
  </div>
</div>

