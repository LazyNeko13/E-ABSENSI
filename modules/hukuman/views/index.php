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
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table align-middle gs-0 gy-4">
							<!--begin::Table head-->
							<thead>
								<tr class="fw-bolder text-muted bg-light">
									<th class="ps-4 min-w-25px rounded-start">
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
										</div>
									</th>
									
									<th class="min-w-150px text-center">Nama Hukuman</th>
									<th class="min-w-150px text-center rounded-end">Action</th>
								</tr>
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody>
								<tr>
									<td class="ps-4 min-w-25px">
										<div class="form-check form-check-sm form-check-custom form-check-solid mb-1">
											<input class="form-check-input widget-13-check" type="checkbox" />
										</div>
									</td>
									
									<td class="text-center">
										<p  class="text-dark fw-bold d-block mb-1 fs-6">Membersihkan lingkungan sekitar sekolahan</p>
									</td>
									<td class="text-center">
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
												<a href="#" class="menu-link flex-stack px-3">Edit hukuman
												<i class="bi bi-pencil ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Hapus hukuman
												<i class="bi bi-trash ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 2-->
										<!--end::Menu-->
									</td>
								</tr>
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

