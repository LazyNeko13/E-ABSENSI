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
						<span class="card-label fw-bolder fs-3 mb-1">Tabel Role</span>
						<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> -->
					</h3>
						
					<div class="card-toolbar" style="flex-wrap: nowrap; width: 290px;">
						<input type="text" class="form-control form-control-sm bg-light pencarian me-3" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" / style="width:150px;">

						<!-- <a href="#" class="btn btn-sm btn-light btn-icon btn-custom btn-active-color-primary position-relative me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
			              <span class="svg-icon svg-icon-5 svg-icon-gray-500">
			                  <i class="bi bi-funnel-fill"></i>
			              </span>
			           	</a>
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_610d480c9e86f">
							<form action="<?=site_url('jadwalpelajaran/index')?>" method="get" >
							<div class="px-7 py-5">
								<div class="fs-5 text-dark fw-bolder">Filter</div>
							</div>
							<div class="separator border-gray-200"></div>
							<div class="px-7 py-5">
								<div class="mb-10">
									<label class="form-label fw-bold">Kelas</label>
									<div>
										<select class="form-select form-select-solid" aria-label="Default select example" data-kt-select2="true" data-placeholder="Pilih kelas" data-allow-clear="true">
											<option></option>
											<option value="1">XII RPL A</option>
											<option value="2">XII RPL B</option>
											<option value="2">XII RPL C</option>
										</select>
									</div>
								</div>
							
								<div class="d-flex justify-content-end">
									<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">OK</button>
								</div>

							</div>
							</form>
						</div> -->

						<a data-bs-toggle="modal" href="#tambahhukumanModal" role="button" class="btn btn-sm btn-light-primary">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->Hukuman</a>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body py-3">
					<div class="row p-5">
						<div class="col-md-12 pe-md-10 ps-md-10 mb-10 mb-md-5">
							<div class="card border m-0">
								<div class="position-absolute me-0" style="right: 75px; top: 17px;">
	                  <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
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
	                  </button>
	                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
	                      <div class="menu-item px-3">
	                          <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
	                      </div>
	                      <div class="separator border-gray-200"></div>
	                      <div class="menu-item px-3">
	                          <a href="javascript:void(0);" class="menu-link px-3" id="xls_presensi_mapel_guru"><i class="bi bi-pencil me-3" style="font-size:1.5rem;"> </i>Edit Hukuman</a>
	                      </div>
	                      <div class="menu-item px-3">
	                          <a href="javascript:void(0);" class="menu-link px-3" id="pdf_presensi_mapel_guru"><i class="bi bi-trash me-3" style="font-size:1.5rem;"></i>Hapus Hukuman</a>
	                      </div>
	                  </div>
	              </div>
								<div class="card-header bg-light d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
									<h5 class="text-gray-700 fw-bolder cursor-pointer mb-0">Membersihkan kamar mandi sepulang sekolah</h5>
									<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
										<span class="svg-icon toggle-on svg-icon-primary bg-secondary p-3 svg-icon-1" style="border-radius: 5px;">
											<i class="bi bi-caret-down-fill"></i>
										</span>
										<span class="svg-icon toggle-off bg-secondary p-3 svg-icon-1" style="border-radius: 5px;">
											<i class="bi bi-caret-up-fill"></i>
										</span>
									</div>
								</div>
								<div id="kt_job_4_1" class="collapse fs-6 ms-1">
									<div class="my-5 text-gray-600 fw-bold fs-6 px-7">
										<div>

											<label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 flex-wrap">
												<span class="form-check-label mb-2">1. Saka Dana Asmara</span>
												<div class="form-control form-control-sm border bg-light-danger mb-5">
													<span class="form-check-label ms-2 mb-2 fw-bolder fs-5">Alasan</span>
													<br>
													<span class="ms-2">Terlambat masuk sekolah, datang pada jam 08:00</span>
												</div>
											</label>

											<label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 flex-wrap">
												<span class="form-check-label mb-2">2. Sidatata Al Jennar</span>
												<div class="form-control form-control-sm border bg-light-danger mb-5">
													<span class="form-check-label ms-2 mb-2 fw-bolder fs-5">Alasan</span>
													<br>
													<span class="ms-2">Terlambat masuk sekolah, datang pada jam 08:00.. Katanya sih vaksin nyatanya tidak :v</span>
												</div>
											</label>

											<label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 flex-wrap">
												<span class="form-check-label mb-2">3. Yusriyah Firjatullah</span>
												<div class="form-control form-control-sm border bg-light-danger mb-5">
													<span class="form-check-label ms-2 mb-2 fw-bolder fs-5">Alasan</span>
													<br>
													<span class="ms-2">Terlambat masuk sekolah, datang jam 08:00. Ban motor bocor</span>
												</div>
											</label>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--begin::Body-->
			</div>
		</div>
	</div>
</div>


<!-- Tambah Siswa Modal -->
<div class="modal fade" id="tambahhukumanModal" aria-hidden="true" aria-labelledby="tambahsiswaModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <div class="modal-content">
      <form class="form" action="#" id="kt_modal_add_event_form">
			<div class="modal-header">
				<h2 class="fw-bolder" data-kt-calendar="title">Tambah Hukuman</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-10 px-lg-17">
				<div class="fv-row mb-9">
					<label class="fs-6 fw-bold required mb-2">Nama Hukuman</label>
					<input type="text" class="form-control form-control-solid" placeholder="Isikan nama hukuman"/>
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

