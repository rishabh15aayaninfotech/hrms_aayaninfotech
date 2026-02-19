<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Aayan Infotech HRMS Dashboard Template is a comprehensive and feature-rich solution designed to streamline human resource management processes. Built on the Bootstrap framework, this template offers a responsive and user-friendly interface for HR professionals to efficiently manage employee data, attendance, payroll, performance, and more. With its intuitive design and powerful features, Aayan Infotech HRMS Dashboard Template is the ideal choice for organizations looking to enhance their HR operations and improve overall efficiency.">
    <meta name="keywords"
        content="HRMS dashboard template, human resource management system, employee management, attendance tracking, payroll management, performance evaluation, responsive design, Bootstrap framework, HR analytics, employee data management">
    <meta name="author" content="Aayan Infotech">
    <meta name="robots" content="noindex, nofollow">
    <title>HRMS | Employee Dashboard | Aayan Infotech</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/aayaninfotech_logo.jfif">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/aayaninfotech_logo.jfif">

    <!-- Theme Script js -->
    <script src="assets/js/theme-script.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div id="global-loader" style="display: none;">
        <div class="page-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php include 'layout/header.php'; ?>
        <?php include 'layout/sidebar.php'; ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Employee Salary</h2>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

                        <div class="me-2 mb-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-file-export me-1"></i>Export
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                                class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                                class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#new-employee-salary"
                                class="btn btn-primary d-flex align-items-center"><i
                                    class="ti ti-circle-plus me-2"></i>Add Salary</a>
                        </div>
                        <div class="head-icons ms-2">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->



                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <h5>Employee Salary List</h5>
                        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            <div class="me-3">
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control date-range bookingrange"
                                        placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="dropdown me-3">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Designation
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Developer</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Executive</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Manager</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Sort By : Last 7 Days
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox" id="select-all">
                                            </div>
                                        </th>
                                        <th>Emp ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Designation</th>
                                        <th>Joining Date</th>
                                        <th>Salary</th>
                                        <th>Payslip</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-001</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-32.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Anthony Lewis</a></h6>
                                                    <span class="d-block mt-1">Finance</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="a9c8c7ddc1c6c7d0e9ccd1c8c4d9c5cc87cac6c4">[email&#160;protected]</a>
                                        </td>
                                        <td>(123) 4567 890</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Finance
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>$12 Sep 2024 </td>
                                        <td>$40000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-002</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-09.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Brian Villalobos</a></h6>
                                                    <span class="d-block mt-1">Developer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="6a0818030b042a0f120b071a060f44090507">[email&#160;protected]</a>
                                        </td>
                                        <td>(179) 7382 829</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Developer
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>24 Oct 2024</td>
                                        <td>$35000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-003</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-01.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Harvey Smith</a></h6>
                                                    <span class="d-block mt-1">Developer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="fc949d8e8a9985bc99849d918c9099d29f9391">[email&#160;protected]</a>
                                        </td>
                                        <td>(184) 2719 738</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Executive
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>18 Feb 2024</td>
                                        <td>$20000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-004</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-33.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                                    <span class="d-block mt-1">Executive Officer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="ed9d889f8c81ad88958c809d8188c38e8280">[email&#160;protected]</a>
                                        </td>
                                        <td>(193) 7839 748</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Executive
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>17 Oct 2024</td>
                                        <td>$$22000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-005</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-34.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
                                                    <span class="d-block mt-1">Manager</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="34595546405a5d434674514c55594458511a575b59">[email&#160;protected]</a>
                                        </td>
                                        <td>(183) 9302 890</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Manager
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>20 Jul 2024</td>
                                        <td>$25000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-006</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-02.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Linda Ray</a></h6>
                                                    <span class="d-block mt-1">Finance</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="c1b3a0b8f5f4f781a4b9a0acb1ada4efa2aeac">[email&#160;protected]</a>
                                        </td>
                                        <td>(120) 3728 039</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Finance
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>10 Apr 2024</td>
                                        <td>$30000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-007</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-35.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Elliot Murray</a></h6>
                                                    <span class="d-block mt-1">Developer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="365b434444574f76534e575b465a531855595b">[email&#160;protected]</a>
                                        </td>
                                        <td>(102) 8480 832</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Finance
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>29 Aug 2024</td>
                                        <td>$35000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-008</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-36.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Rebecca Smtih</a></h6>
                                                    <span class="d-block mt-1">Executive</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="483b253c2120082d30292538242d662b2725">[email&#160;protected]</a>
                                        </td>
                                        <td>(162) 8920 713</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Executive
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>22 Feb 2024</td>
                                        <td>$45000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-009</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-37.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Connie Waters</a></h6>
                                                    <span class="d-block mt-1">Developer</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="21424e4f4f4844614459404c514d440f424e4c">[email&#160;protected]</a>
                                        </td>
                                        <td>(189) 0920 723</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Developer
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>03 Nov 2024</td>
                                        <td>$50000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>Emp-010</td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md ">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-38.jpg"
                                                        class="img-fluid rounded-circle" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Lori Broaddus</a></h6>
                                                    <span class="d-block mt-1">Finance</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b7d5c5d8d6d3d3c2c4f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a>
                                        </td>
                                        <td>(168) 8392 823</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown">
                                                    <span
                                                        class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>
                                                    Finance
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"></span>Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Developer
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Executive
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span
                                                                class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"></span>Manager
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td>17 Dec 2024</td>
                                        <td>$25000</td>
                                        <td><span class="badge badge-dark badge-md">Generate Slip</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-employee-salary"><i
                                                        class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <?php include 'layout/footer.php'; ?>

        </div>
        <!-- /Page Wrapper -->

        <!-- Add Termination -->
        <div class="modal fade" id="new-employee-salary">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee Salary</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee Name </label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Anthony Lewis</option>
                                            <option>Brian Villalobos</option>
                                            <option>Doglas Martini</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Net Salary </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row earning-row">
                                <div class="d-flex justify-content-between mb-3">
                                    <label class="form-label">Earnings</label>
                                    <a href="#" class="add-earnings text-primary mb-2"><i
                                            class="ti ti-plus me-2"></i>Add New</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Basic</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">DA(40%)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">HRA(15%)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Conveyance</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Allowance </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Medical Allowance</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Others</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row deduction-row">
                                <div class="d-flex justify-content-between mb-3">
                                    <label class="form-label">Deductions</label>
                                    <a href="#" class="add-deduction text-primary mb-2"><i
                                            class="ti ti-plus me-2"></i>Add New</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">TDS</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">ESI</label>
                                        <input type="text" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">PF</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Leave</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Prof.Tax</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Labour Welfare</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Others</label>
                                        <input type="text" class="form-control">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white border me-2"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Employee Salary</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Termination -->

        <!-- Edit Termination -->
        <div class="modal fade" id="edit-employee-salary">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee Salary</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee Name </label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Anthony Lewis</option>
                                            <option>Brian Villalobos</option>
                                            <option>Doglas Martini</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Net Salary </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row earning-row">
                                <div class="d-flex justify-content-between mb-3">
                                    <label class="form-label">Earnings</label>
                                    <a href="#" class="add-earnings text-primary mb-2"><i
                                            class="ti ti-plus me-2"></i>Add New</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Basic</label>
                                        <input type="text" class="form-control" value="$40000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">DA(40%)</label>
                                        <input type="text" class="form-control" value="$16000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">HRA(15%)</label>
                                        <input type="text" class="form-control" value="$2666">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Conveyance</label>
                                        <input type="text" class="form-control" value="$2000">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Allowance </label>
                                        <input type="text" class="form-control" value="$1000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Medical Allowance</label>
                                        <input type="text" class="form-control" value="$2000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Others</label>
                                        <input type="text" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="row deduction-row">
                                <div class="d-flex justify-content-between mb-3">
                                    <label class="form-label">Deductions</label>
                                    <a href="#" class="add-deduction text-primary mb-2"><i
                                            class="ti ti-plus me-2"></i>Add New</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">TDS</label>
                                        <input type="text" class="form-control" value="$4000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">ESI</label>
                                        <input type="text" class="form-control" value="$2000">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">PF</label>
                                        <input type="text" class="form-control" value="$3000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Leave</label>
                                        <input type="text" class="form-control" value="$1000">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Prof.Tax</label>
                                        <input type="text" class="form-control" value="$800">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Labour Welfare</label>
                                        <input type="text" class="form-control" value="$500">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Others</label>
                                        <input type="text" class="form-control" value="$100">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white border me-2"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Employee Salary</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Edit Termination -->

        <!-- Delete Modal -->
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                            <i class="ti ti-trash-x fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm Delete</h4>
                        <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="#"
                                class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Modal -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false"
        src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery-3.7.1.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap.bundle.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/feather.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Color Picker JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/@simonwep/pickr/pickr.es5.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.dataTables.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/dataTables.bootstrap5.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/moment.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap-datetimepicker.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Chart JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/apexcharts.min.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/chart-data.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <!-- Custom JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/employee-salary.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/theme-colorpicker.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/script.js"
        type="ced22e1b1bd0380f187940c4-text/javascript"></script>

    <script src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="ced22e1b1bd0380f187940c4-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>


</html>