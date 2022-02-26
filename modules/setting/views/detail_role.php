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
						<span class="card-label fw-bolder fs-3 mb-1">Tabel Detail Role</span>
						<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> -->
					</h3>
						
					<div class="card-toolbar" style="flex-wrap: nowrap; width: 150px;">
						<input type="text" class="form-control form-control-sm bg-light pencarian me-3" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" / style="width:150px;">
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
									<th class="ps-4 min-w-150px text-center rounded-start">Nama Role</th>
									<th class="min-w-150px text-center rounded-end">Akses Menu</th>
								</tr>
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody>
								<tr>									
									<td class="text-center">
										<p  class="text-dark fw-bold d-block mb-1 fs-6">SuperAdmin</p>
									</td>
									<td class="text-center">
										<div class="form-check form-check-sm form-check-custom form-check-solid mb-1 d-flex justify-content-center">
											<input class="form-check-input widget-13-check" type="checkbox" value="<?= $row->ID_USER ?>" />
										</div>
									</td>
								</tr>
								<tr>									
									<td class="text-center">
										<p  class="text-dark fw-bold d-block mb-1 fs-6">Admin</p>
									</td>
									<td class="text-center">
										<div class="form-check form-check-sm form-check-custom form-check-solid mb-1 d-flex justify-content-center">
											<input class="form-check-input widget-13-check" type="checkbox" value="<?= $row->ID_USER ?>" />
										</div>
									</td>
								</tr>
								<tr>									
									<td class="text-center">
										<p  class="text-dark fw-bold d-block mb-1 fs-6">Staf</p>
									</td>
									<td class="text-center">
										<div class="form-check form-check-sm form-check-custom form-check-solid mb-1 d-flex justify-content-center">
											<input class="form-check-input widget-13-check" type="checkbox" value="<?= $row->ID_USER ?>" />
										</div>
									</td>
								</tr>
								<tr>									
									<td class="text-center">
										<p  class="text-dark fw-bold d-block mb-1 fs-6">Guru</p>
									</td>
									<td class="text-center">
										<div class="form-check form-check-sm form-check-custom form-check-solid mb-1 d-flex justify-content-center">
											<input class="form-check-input widget-13-check" type="checkbox" value="<?= $row->ID_USER ?>" />
										</div>
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
