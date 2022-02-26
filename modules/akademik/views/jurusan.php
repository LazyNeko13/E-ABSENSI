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
						<span class="card-label fw-bolder fs-3 mb-1">Tabel Jurusan</span>
						<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> -->
					</h3>
						
					<div class="card-toolbar" style="flex-wrap: nowrap; width: 480px;display: flex;justify-content: flex-end;">
						<input type="text" class="form-control form-control-sm bg-light pencarian me-3" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" />

						<a data-bs-toggle="modal" href="#tambahjurusanModal" role="button" class="btn btn-sm btn-light-primary me-3">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
							</svg>
						</span>
						Jurusan</a>
						<?php if ($result): ?>
							<button class="btn btn-sm btn-light-danger"><span class="svg-icon svg-icon-2">
								<i class="bi bi-trash"></i>
							</span>
							Hapus</button>
							
						<?php endif ?>
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
									<th class="min-w-100px text-start">Nama Jurusan</th>
									<th class="min-w-100px text-start">Kode</th>
									<th class="min-w-100px text-center rounded-end">Actions</th>
								</tr>
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody>
									<?php if ($result): ?>
										<?php foreach ($result as $row): ?>
											<tr>
												<td class="ps-4 min-w-25px">
													<div class="form-check form-check-sm form-check-custom form-check-solid mb-1">
														<input class="form-check-input widget-13-check" type="checkbox" value="<?= $row->ID_USER ?>" />
													</div>
												</td>
												

												<td>
													<p class="text-dark fw-bold d-block mb-1 fs-6"><?= $row->NAMA_JURUSAN ?></p>
												</td>
												
												<td>
													<p class="text-dark fw-bold d-block mb-1 fs-6"><?= $row->NAMA_PENDEK ?></p>
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
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-175px py-3" data-kt-menu="true">
														<div class="menu-item px-3">
															<a data-bs-toggle="modal" href="#editjurusanModal" role="button"class="menu-link flex-stack px-3">Edit jurusan
															<i class="bi bi-pencil ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="<?= base_url('akademik/hapus_jurusan/'.$row->ID_JURUSAN) ?>" class="menu-link flex-stack px-3">Hapus jurusan
															<i class="bi bi-trash ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</td>
											</tr>
											
										<?php endforeach ?>
									<?php else: ?>
										<tr>
											<td colspan="4"><center>Tidak ada data tersedia</center></td>
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
<div class="modal fade" id="tambahjurusanModal" aria-hidden="true" aria-labelledby="tambahsiswaModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <div class="modal-content">
      <form class="form" action="<?= base_url('akademik/tambah_jurusan') ?>" method="POST">
			<div class="modal-header">
				<h2 class="fw-bolder" data-kt-calendar="title">Tambah Tingkat </h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-10 px-lg-17">
				<div class="fv-row mb-9">
					<label class="fs-6 fw-bold required mb-2">Nama Jurusan</label>
					<input type="text" name="nama_jurusan" class="form-control form-control-solid" placeholder="Isikan nama jurusan"/>
				</div>
				<div class="fv-row mb-9">
					<label class="fs-6 fw-bold required mb-2">Nama Pendek</label>
					<input type="text" name="nama_pendek" class="form-control form-control-solid" placeholder="Isikan nama pendek"/>
				</div>
			</div>
			<div class="modal-footer flex-center">
				<!--begin::Button-->
				<button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
				<!--end::Button-->
				<!--begin::Button-->
				<button type="submit" class="btn btn-primary">
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




<!-- Edit Siswa Modal -->
<div class="modal fade" id="editjurusanModal" aria-hidden="true" aria-labelledby="tambahsiswaModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <div class="modal-content">
      <form class="form" action="#" id="kt_modal_add_event_form">
			<div class="modal-header">
				<h2 class="fw-bolder" data-kt-calendar="title">Edit Tingkat </h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-10 px-lg-17">
				<div class="fv-row mb-9">
					<label class="fs-6 fw-bold required mb-2">Nama Jurusan</label>
					<input type="text" class="form-control form-control-solid" placeholder="Isikan nama jurusan"/>
				</div>
			</div>
			<div class="modal-footer flex-center">
				<!--begin::Button-->
				<button type="reset" class="btn btn-light me-3">Batal</button>
				<!--end::Button-->
				<!--begin::Button-->
				<button type="button" class="btn btn-primary">
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

