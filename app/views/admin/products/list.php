
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Flatpickr-->
                    <div class="input-group w-250px">
                        <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
                        <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                    <!--end::Flatpickr-->
                    <div class="w-100 mw-150px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                            <option></option>
                            <option value="all">All</option>
                            <option value="Cancelled">Cancelled</option>
                            <option value="Completed">Completed</option>
                            <option value="Denied">Denied</option>
                            <option value="Expired">Expired</option>
                            <option value="Failed">Failed</option>
                            <option value="Pending">Pending</option>
                            <option value="Processing">Processing</option>
                            <option value="Refunded">Refunded</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Delivering">Delivering</option>
                        </select>
                        <!--end::Select2-->
                    </div>
                    <!--begin::Add product-->
                    <a href="../catalog/add-product.html" class="btn btn-primary">Add Order</a>
                    <!--end::Add product-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                                </div>
                            </th>
                            <th class="min-w-100px">Order ID</th>
                            <th class="min-w-175px">Customer</th>
                            <th class="text-end min-w-70px">Status</th>
                            <th class="text-end min-w-100px">Total</th>
                            <th class="text-end min-w-100px">Date Added</th>
                            <th class="text-end min-w-100px">Date Modified</th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14312</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$311.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-21">
                                <span class="fw-bold">21/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-23">
                                <span class="fw-bold">23/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14313</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Cancelled">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Cancelled</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$193.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-21">
                                <span class="fw-bold">21/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-22">
                                <span class="fw-bold">22/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14314</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$324.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-15">
                                <span class="fw-bold">15/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-21">
                                <span class="fw-bold">21/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14315</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Expired">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Expired</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$309.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-13">
                                <span class="fw-bold">13/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-20">
                                <span class="fw-bold">20/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14316</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$461.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-18">
                                <span class="fw-bold">18/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-19">
                                <span class="fw-bold">19/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14317</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$294.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-12">
                                <span class="fw-bold">12/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-18">
                                <span class="fw-bold">18/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14318</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Failed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Failed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$497.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-10">
                                <span class="fw-bold">10/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-17">
                                <span class="fw-bold">17/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14319</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Refunded">
                                <!--begin::Badges-->
                                <div class="badge badge-light-info">Refunded</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$301.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-09">
                                <span class="fw-bold">09/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-16">
                                <span class="fw-bold">16/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14320</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Pending">
                                <!--begin::Badges-->
                                <div class="badge badge-light-warning">Pending</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$344.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-11">
                                <span class="fw-bold">11/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-15">
                                <span class="fw-bold">15/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14321</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$373.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-12">
                                <span class="fw-bold">12/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-14">
                                <span class="fw-bold">14/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14322</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$461.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-09">
                                <span class="fw-bold">09/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-13">
                                <span class="fw-bold">13/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14323</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Expired">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Expired</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$252.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-06">
                                <span class="fw-bold">06/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-12">
                                <span class="fw-bold">12/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14324</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$352.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-10">
                                <span class="fw-bold">10/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-11">
                                <span class="fw-bold">11/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14325</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$73.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-05">
                                <span class="fw-bold">05/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-10">
                                <span class="fw-bold">10/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14326</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Delivering">
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Delivering</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$244.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-03">
                                <span class="fw-bold">03/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-09">
                                <span class="fw-bold">09/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14327</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Delivered">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Delivered</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$81.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-06">
                                <span class="fw-bold">06/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-08">
                                <span class="fw-bold">08/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14328</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$114.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-06">
                                <span class="fw-bold">06/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-07">
                                <span class="fw-bold">07/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14329</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$464.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-29">
                                <span class="fw-bold">29/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-06">
                                <span class="fw-bold">06/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14330</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Delivered">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Delivered</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$219.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-04">
                                <span class="fw-bold">04/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-05">
                                <span class="fw-bold">05/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14331</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$102.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-27">
                                <span class="fw-bold">27/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-04">
                                <span class="fw-bold">04/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14332</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$221.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-12-02">
                                <span class="fw-bold">02/12/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-03">
                                <span class="fw-bold">03/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14333</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Cancelled">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Cancelled</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$142.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-26">
                                <span class="fw-bold">26/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-02">
                                <span class="fw-bold">02/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14334</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$38.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-24">
                                <span class="fw-bold">24/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-12-01">
                                <span class="fw-bold">01/12/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14335</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Refunded">
                                <!--begin::Badges-->
                                <div class="badge badge-light-info">Refunded</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$224.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-23">
                                <span class="fw-bold">23/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-30">
                                <span class="fw-bold">30/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14336</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$204.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-26">
                                <span class="fw-bold">26/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-29">
                                <span class="fw-bold">29/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14337</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$142.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-22">
                                <span class="fw-bold">22/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-28">
                                <span class="fw-bold">28/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14338</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Expired">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Expired</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$369.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-20">
                                <span class="fw-bold">20/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-27">
                                <span class="fw-bold">27/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14339</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$273.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-21">
                                <span class="fw-bold">21/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-26">
                                <span class="fw-bold">26/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14340</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Failed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Failed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$473.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-19">
                                <span class="fw-bold">19/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-25">
                                <span class="fw-bold">25/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14341</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Processing">
                                <!--begin::Badges-->
                                <div class="badge badge-light-primary">Processing</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$456.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-23">
                                <span class="fw-bold">23/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-24">
                                <span class="fw-bold">24/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14342</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Expired">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Expired</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$143.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-21">
                                <span class="fw-bold">21/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-23">
                                <span class="fw-bold">23/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14343</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Denied">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Denied</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$55.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-18">
                                <span class="fw-bold">18/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-22">
                                <span class="fw-bold">22/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14344</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$11.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-16">
                                <span class="fw-bold">16/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-21">
                                <span class="fw-bold">21/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14345</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$401.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-19">
                                <span class="fw-bold">19/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-20">
                                <span class="fw-bold">20/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14346</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$291.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-14">
                                <span class="fw-bold">14/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-19">
                                <span class="fw-bold">19/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14347</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$216.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-11">
                                <span class="fw-bold">11/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-18">
                                <span class="fw-bold">18/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14348</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Expired">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Expired</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$285.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-11">
                                <span class="fw-bold">11/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-17">
                                <span class="fw-bold">17/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14349</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Delivered">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Delivered</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$161.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-13">
                                <span class="fw-bold">13/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-16">
                                <span class="fw-bold">16/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14350</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$229.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-09">
                                <span class="fw-bold">09/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-15">
                                <span class="fw-bold">15/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14351</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$294.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-07">
                                <span class="fw-bold">07/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-14">
                                <span class="fw-bold">14/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14352</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Pending">
                                <!--begin::Badges-->
                                <div class="badge badge-light-warning">Pending</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$36.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-06">
                                <span class="fw-bold">06/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-13">
                                <span class="fw-bold">13/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14353</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Delivered">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Delivered</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$372.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-09">
                                <span class="fw-bold">09/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-12">
                                <span class="fw-bold">12/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14354</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Cancelled">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Cancelled</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$152.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-07">
                                <span class="fw-bold">07/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-11">
                                <span class="fw-bold">11/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14355</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$319.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-04">
                                <span class="fw-bold">04/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-10">
                                <span class="fw-bold">10/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14356</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$272.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-05">
                                <span class="fw-bold">05/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-09">
                                <span class="fw-bold">09/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14357</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$447.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-03">
                                <span class="fw-bold">03/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-08">
                                <span class="fw-bold">08/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14358</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$408.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-04">
                                <span class="fw-bold">04/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-07">
                                <span class="fw-bold">07/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14359</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$97.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-10-31">
                                <span class="fw-bold">31/10/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-06">
                                <span class="fw-bold">06/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14360</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Completed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">Completed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$333.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-11-01">
                                <span class="fw-bold">01/11/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-05">
                                <span class="fw-bold">05/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Order ID=-->
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">14361</a>
                            </td>
                            <!--end::Order ID=-->
                            <!--begin::Customer=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= ADMIN_ASSETS ?>media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Customer=-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0" data-order="Failed">
                                <!--begin::Badges-->
                                <div class="badge badge-light-danger">Failed</div>
                                <!--end::Badges-->
                            </td>
                            <!--end::Status=-->
                            <!--begin::Total=-->
                            <td class="text-end pe-0">
                                <span class="fw-bold">$225.00</span>
                            </td>
                            <!--end::Total=-->
                            <!--begin::Date Added=-->
                            <td class="text-end" data-order="2022-10-30">
                                <span class="fw-bold">30/10/2022</span>
                            </td>
                            <!--end::Date Added=-->
                            <!--begin::Date Modified=-->
                            <td class="text-end" data-order="2022-11-04">
                                <span class="fw-bold">04/11/2022</span>
                            </td>
                            <!--end::Date Modified=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="details.html" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="edit-order.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <!--end::Table row-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Content container-->
</div>
<?php  $this->view('admin/inc/footer'); ?>
<script src="<?= ADMIN_ASSETS ?>plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?= ADMIN_ASSETS ?>js/custom/apps/ecommerce/sales/listing.js"></script>