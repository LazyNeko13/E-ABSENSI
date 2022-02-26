<style type="text/css">
	.form-control.pencarian{
		width: 50%;
		border: none;
	}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!-- <div class="post d-flex flex-column-fluid" id="kt_post">
		<div id="kt_content_container" class="container">
			<div class="card mb-5 mb-xl-8">

				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bolder fs-3 mb-1">Tabel Role</span>
					</h3>
						
					<div class="card-toolbar" style="flex-wrap: nowrap; width: 250px;">
						<input type="text" class="form-control form-control-sm bg-light pencarian me-3" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" / style="width:150px;">

						<a data-bs-toggle="modal" href="#tambahroleModal" role="button" class="btn btn-sm btn-light-primary">

						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
							</svg>
						</span>
						Role</a>
					</div>
				</div>

				<div class="card-body py-3">

					<div class="table-responsive">

						<table class="table align-middle gs-0 gy-4">

							<thead>
								<tr class="fw-bolder text-muted bg-light">
									<th class="ps-4 min-w-25px rounded-start">
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
										</div>
									</th>
									
									<th class="min-w-150px text-center">Nama Role</th>
									<th class="min-w-150px text-center rounded-end">Action</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td class="ps-4 min-w-25px">
										<div class="form-check form-check-sm form-check-custom form-check-solid mb-1">
											<input class="form-check-input widget-13-check" type="checkbox" value="<?= $row->ID_USER ?>" />
										</div>
									</td>
									
									<td class="text-center">
										<p  class="text-dark fw-bold d-block mb-1 fs-6">SuperAdmin</p>
									</td>
									<td class="text-center">

										<button type="button" class="btn btn-light btn-sm btn-icon  btn-color-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											
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

										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Edit role
												<i class="bi bi-pencil ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
											</div>

											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Hapus role
												<i class="bi bi-trash ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
											</div>

											<div class="menu-item px-3">
												<a href="<?= base_url('setting/detail_role') ?>" class="menu-link flex-stack px-3">Detail role
												<i class="bi bi-eye ms-2 fs-5" data-bs-toggle="tooltip"></i></a>
											</div>

										</div>

									</td>
								</tr>
							</tbody>

						</table>

					</div>

				</div>

			</div>
		</div>
	</div> -->

		<!--begin::Container-->
		<div class="container-xxl" id="kt_content_container">
			<!--begin::Row-->
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
				<!--begin::Col-->
				<div class="col-md-4">
					<!--begin::Card-->
					<div class="card card-flush h-md-100">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Super Admin</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-1">
							<!--begin::Users-->
							<div class="fw-bolder text-gray-600 mb-5">Total users with this role: 1</div>
							<!--end::Users-->
							<!--begin::Permissions-->
							<div class="d-flex flex-column text-gray-600">
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>All Admin Controls</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>Enabled Bulk Reports</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit Payouts</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit Disputes</div>
								<div class='d-flex align-items-center py-2'>
									<span class='bullet bg-primary me-3'></span>
									<em>and 7 more...</em>
								</div>
							</div>
							<!--end::Permissions-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer flex-wrap pt-0">
							<a href="<?= base_url('setting/halaman_role') ?>" class="btn btn-light btn-active-primary my-1 me-2">Lihat Role</a>
							<button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-4">
					<!--begin::Card-->
					<div class="card card-flush h-md-100">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Developer</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-1">
							<!--begin::Users-->
							<div class="fw-bolder text-gray-600 mb-5">Total users with this role: 14</div>
							<!--end::Users-->
							<!--begin::Permissions-->
							<div class="d-flex flex-column text-gray-600">
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>Some Admin Controls</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Financial Summaries only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit API Controls</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Payouts only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit Disputes</div>
								<div class='d-flex align-items-center py-2'>
									<span class='bullet bg-primary me-3'></span>
									<em>and 3 more...</em>
								</div>
							</div>
							<!--end::Permissions-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer flex-wrap pt-0">
							<a href="<?= base_url('setting/halaman_role') ?>" class="btn btn-light btn-active-primary my-1 me-2">Lihat Role</a>
							<button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-4">
					<!--begin::Card-->
					<div class="card card-flush h-md-100">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Analyst</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-1">
							<!--begin::Users-->
							<div class="fw-bolder text-gray-600 mb-5">Total users with this role: 4</div>
							<!--end::Users-->
							<!--begin::Permissions-->
							<div class="d-flex flex-column text-gray-600">
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>No Admin Controls</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>Enabled Bulk Reports</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Payouts only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Disputes only</div>
								<div class='d-flex align-items-center py-2'>
									<span class='bullet bg-primary me-3'></span>
									<em>and 2 more...</em>
								</div>
							</div>
							<!--end::Permissions-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer flex-wrap pt-0">
							<a href="<?= base_url('setting/halaman_role') ?>" class="btn btn-light btn-active-primary my-1 me-2">Lihat Role</a>
							<button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-4">
					<!--begin::Card-->
					<div class="card card-flush h-md-100">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Support</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-1">
							<!--begin::Users-->
							<div class="fw-bolder text-gray-600 mb-5">Total users with this role: 23</div>
							<!--end::Users-->
							<!--begin::Permissions-->
							<div class="d-flex flex-column text-gray-600">
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>No Admin Controls</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Financial Summaries only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Payouts only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View and Edit Disputes</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>Response to Customer Feedback</div>
							</div>
							<!--end::Permissions-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer flex-wrap pt-0">
							<a href="<?= base_url('setting/halaman_role') ?>" class="btn btn-light btn-active-primary my-1 me-2">Lihat Role</a>
							<button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-md-4">
					<!--begin::Card-->
					<div class="card card-flush h-md-100">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Trial</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-1">
							<!--begin::Users-->
							<div class="fw-bolder text-gray-600 mb-5">Total users with this role: 546</div>
							<!--end::Users-->
							<!--begin::Permissions-->
							<div class="d-flex flex-column text-gray-600">
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>No Admin Controls</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Financial Summaries only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Bulk Reports only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Payouts only</div>
								<div class="d-flex align-items-center py-2">
								<span class="bullet bg-primary me-3"></span>View Disputes only</div>
							</div>
							<!--end::Permissions-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer flex-wrap pt-0">
							<a href="<?= base_url('setting/halaman_role') ?>" class="btn btn-light btn-active-primary my-1 me-2">Lihat Role</a>
							<button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Add new card-->
				<div class="ol-md-4">
					<!--begin::Card-->
					<div class="card h-md-100">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-center">
							<!--begin::Button-->
							<button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
								<!--begin::Illustration-->
								<img src="<?=base_url() ?>assets/media/illustrations/sigma-1/4.png" alt="" class="mw-100 mh-150px mb-7" />
								<!--end::Illustration-->
								<!--begin::Label-->
								<div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Tambah Role Baru</div>
								<!--end::Label-->
							</button>
							<!--begin::Button-->
						</div>
						<!--begin::Card body-->
					</div>
					<!--begin::Card-->
				</div>
				<!--begin::Add new card-->
			</div>
			<!--end::Row-->
			<!--begin::Modals-->
			<!--begin::Modal - Add role-->
			<div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-750px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Add a Role</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-lg-5 my-7">
							<!--begin::Form-->
							<form id="kt_modal_add_role_form" class="form" action="#">
								<!--begin::Scroll-->
								<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-5 fw-bolder form-label mb-2">
											<span class="required">Role name</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Permissions-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>
										<!--end::Label-->
										<!--begin::Table wrapper-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5">
												<!--begin::Table body-->
												<tbody class="text-gray-600 fw-bold">
													<!--begin::Table row-->
													<tr>
														<td class="text-gray-800">Administrator Access
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allows a full access to the system"></i></td>
														<td>
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid me-9">
																<input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
																<span class="form-check-label" for="kt_roles_select_all">Select all</span>
															</label>
															<!--end::Checkbox-->
														</td>
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">User Management</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="user_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="user_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="user_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Content Management</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="content_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="content_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="content_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Financial Management</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Reporting</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="reporting_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="reporting_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="reporting_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Payroll</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="payroll_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="payroll_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="payroll_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Disputes Management</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">API Controls</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Database Management</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="database_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="database_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="database_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Repository Management</td>
														<!--end::Label-->
														<!--begin::Options-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Options-->
													</tr>
													<!--end::Table row-->
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table wrapper-->
									</div>
									<!--end::Permissions-->
								</div>
								<!--end::Scroll-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
									<button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Add role-->
			<!--begin::Modal - Update role-->
			<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-750px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Update Role</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 my-7">
							<!--begin::Form-->
							<form id="kt_modal_update_role_form" class="form" action="#">
								<!--begin::Scroll-->
								<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-5 fw-bolder form-label mb-2">
											<span class="required">Role name</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" value="Developer" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Permissions-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>
										<!--end::Label-->
										<!--begin::Table wrapper-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5">
												<!--begin::Table body-->
												<tbody class="text-gray-600 fw-bold">
													<!--begin::Table row-->
													<tr>
														<td class="text-gray-800">Administrator Access
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allows a full access to the system"></i></td>
														<td>
															<!--begin::Checkbox-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-9">
																<input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
																<span class="form-check-label" for="kt_roles_select_all">Select all</span>
															</label>
															<!--end::Checkbox-->
														</td>
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">User Management</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="user_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="user_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="user_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Content Management</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="content_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="content_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="content_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Financial Management</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Reporting</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="reporting_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="reporting_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="reporting_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Payroll</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="payroll_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="payroll_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="payroll_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Disputes Management</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">API Controls</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Database Management</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="database_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="database_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="database_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
													<tr>
														<!--begin::Label-->
														<td class="text-gray-800">Repository Management</td>
														<!--end::Label-->
														<!--begin::Input group-->
														<td>
															<!--begin::Wrapper-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
																	<span class="form-check-label">Read</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																	<input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
																	<span class="form-check-label">Write</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
																	<span class="form-check-label">Create</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Wrapper-->
														</td>
														<!--end::Input group-->
													</tr>
													<!--end::Table row-->
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table wrapper-->
									</div>
									<!--end::Permissions-->
								</div>
								<!--end::Scroll-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
									<button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Update role-->
			<!--end::Modals-->
		</div>
		<!--end::Container-->

<!--end::Content-->
</div>


<!-- Tambah Siswa Modal -->
<div class="modal fade" id="tambahroleModal" aria-hidden="true" aria-labelledby="tambahsiswaModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <div class="modal-content">
      <form class="form" action="#" id="kt_modal_add_event_form">
			<div class="modal-header">
				<h2 class="fw-bolder" data-kt-calendar="title">Tambah Role</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-10 px-lg-17">
				<div class="fv-row mb-9">
					<label class="fs-6 fw-bold required mb-2">Nama Role</label>
					<input type="text" class="form-control form-control-solid" placeholder="Isikan nama siswa"/>
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

