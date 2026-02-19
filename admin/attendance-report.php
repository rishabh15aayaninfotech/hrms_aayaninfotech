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
                        <h2 class="mb-1">Attendance Admin</h2>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="me-2 mb-2">
                            <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                                <a href="#"
                                    class="btn btn-icon btn-sm  me-1"><i class="ti ti-brand-days-counter"></i></a>
                                <a href="#"
                                    class="btn btn-icon btn-sm active bg-primary text-white"><i
                                        class="ti ti-calendar-event"></i></a>
                            </div>
                        </div>
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
                            <a href="#" class="btn btn-primary d-flex align-items-center"
                                data-bs-target="#attendance_report" data-bs-toggle="modal"><i
                                    class="ti ti-file-analytics me-2"></i>Report</a>
                        </div>
                        <div class="ms-2 head-icons">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <div class="card border-0">
                    <div class="card-body">
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5">
                                <div class="mb-3 mb-md-0">
                                    <h4 class="mb-1">Attendance Details Today</h4>
                                    <p>Data from the 800+ total no of employees</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex align-items-center justify-content-md-end">
                                    <h6>Total Absenties today</h6>
                                    <div class="avatar-list-stacked avatar-group-sm ms-4">
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white"
                                                src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-02.jpg"
                                                alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white"
                                                src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-03.jpg"
                                                alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white"
                                                src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-05.jpg"
                                                alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white"
                                                src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-06.jpg"
                                                alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img class="border border-white"
                                                src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-07.jpg"
                                                alt="img">
                                        </span>
                                        <a class="avatar bg-primary avatar-rounded text-fixed-white fs-12"
                                            href="javascript:void(0);">
                                            +1
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded">
                            <div class="row gx-0">
                                <div class="col-md col-sm-4 border-end">
                                    <div class="p-3">
                                        <span class="fw-medium mb-1 d-block">Present</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>250</h5>
                                            <span class="badge badge-success d-inline-flex align-items-center">
                                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                                +1%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 border-end">
                                    <div class="p-3">
                                        <span class="fw-medium mb-1 d-block">Late Login</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>45</h5>
                                            <span class="badge badge-danger d-inline-flex align-items-center">
                                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                                -1%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 border-end">
                                    <div class="p-3">
                                        <span class="fw-medium mb-1 d-block">Uninformed</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>15</h5>
                                            <span class="badge badge-danger d-inline-flex align-items-center">
                                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                                -12%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4 border-end">
                                    <div class="p-3">
                                        <span class="fw-medium mb-1 d-block">Permisson</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>03</h5>
                                            <span class="badge badge-success d-inline-flex align-items-center">
                                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                                +1%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="p-3">
                                        <span class="fw-medium mb-1 d-block">Absent</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>12</h5>
                                            <span class="badge badge-danger d-inline-flex align-items-center">
                                                <i class="ti ti-arrow-wave-right-down me-1"></i>
                                                -19%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <h5>Admin Attendance</h5>
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
                                    Department
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Application
                                            Development</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">IT Management</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown me-3">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Select Status
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Present</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Absent</a>
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
                                        <th>Employee</th>
                                        <th>Status</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Break</th>
                                        <th>Late</th>
                                        <th>Production Hours</th>
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
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-49.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Anthony Lewis</a></h6>
                                                    <span class="fs-12 fw-normal ">UI/UX Team</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            06:45 PM
                                        </td>
                                        <td>30 Min</td>
                                        <td>
                                            32 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>8.55 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-09.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Brian Villalobos</a></h6>
                                                    <span class="fs-12 fw-normal ">Development</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            06:12 PM
                                        </td>
                                        <td>20 Min</td>
                                        <td>
                                            20 Min
                                        </td>
                                        <td><span class="badge badge-danger d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>7.54 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-01.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Harvey Smith</a></h6>
                                                    <span class="fs-12 fw-normal ">HR</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            06:13 PM
                                        </td>
                                        <td>50 Min</td>
                                        <td>
                                            23 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>8.45 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-33.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                                    <span class="fs-12 fw-normal ">Management</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            06:23 PM
                                        </td>
                                        <td>41 Min</td>
                                        <td>
                                            50 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>8.35 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-34.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
                                                    <span class="fs-12 fw-normal ">Development</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            06:43 PM
                                        </td>
                                        <td>23 Min</td>
                                        <td>
                                            10 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>8.22 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-02.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Linda Ray</a></h6>
                                                    <span class="fs-12 fw-normal ">UI/UX Team</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            07:15 PM
                                        </td>
                                        <td>03 Min</td>
                                        <td>
                                            30 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>8.32 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-35.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Elliot Murray</a></h6>
                                                    <span class="fs-12 fw-normal ">UI/UX Team</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            07:13 PM
                                        </td>
                                        <td>32 Min</td>
                                        <td>
                                            41 Min
                                        </td>
                                        <td><span class="badge badge-info d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>9.15 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-30.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Rebecca Smtih</a></h6>
                                                    <span class="fs-12 fw-normal ">UI/UX Team</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            09:17 PM
                                        </td>
                                        <td>14 Min</td>
                                        <td>
                                            12 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>9.25 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-36.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Connie Waters</a></h6>
                                                    <span class="fs-12 fw-normal ">Management</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-success-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Present</span></td>
                                        <td>09:00 AM</td>
                                        <td>
                                            08:15 PM
                                        </td>
                                        <td>12 Min</td>
                                        <td>
                                            03 Min
                                        </td>
                                        <td><span class="badge badge-success d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>8.35 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
                                                <a href="#" class="avatar avatar-md border avatar-rounded">
                                                    <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-38.jpg"
                                                        class="img-fluid" alt="img">
                                                </a>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium"><a href="#">Lori Broaddus</a></h6>
                                                    <span class="fs-12 fw-normal ">Finance</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span
                                                class="badge badge-danger-transparent d-inline-flex align-items-center"><i
                                                    class="ti ti-point-filled me-1"></i>Absent</span></td>
                                        <td>-</td>
                                        <td>
                                            -
                                        </td>
                                        <td>-</td>
                                        <td>
                                            -
                                        </td>
                                        <td><span class="badge badge-danger d-inline-flex align-items-center"><i
                                                    class="ti ti-clock-hour-11 me-1"></i>0.00 Hrs</span></td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_attendance"><i class="ti ti-edit"></i></a>
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

        <!-- Edit Attendance -->
        <div class="modal fade" id="edit_attendance">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Attendance</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <div class="input-icon position-relative w-100 me-2">
                                            <input type="text" class="form-control datetimepicker ps-3"
                                                value="15 Apr 2025">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Check In</label>
                                        <div class="input-icon position-relative w-100">
                                            <input type="text" class="form-control timepicker ps-3" value="09:00 AM">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-clock-hour-3"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Check Out</label>
                                        <div class="input-icon position-relative w-100">
                                            <input type="text" class="form-control timepicker ps-3" value="06:45 PM">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-clock-hour-3"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Break</label>
                                        <input type="text" class="form-control" value="30 Min	">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Late</label>
                                        <input type="text" class="form-control" value="32 Min">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Production Hours</label>
                                        <div class="input-icon position-relative w-100">
                                            <input type="text" class="form-control timepicker ps-3" value="8.55 Hrs">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-clock-hour-3"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 ">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Present</option>
                                            <option>Absent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Edit Attendance -->

        <!-- Attendance Report -->
        <div class="modal fade" id="attendance_report">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Attendance</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card shadow-none bg-transparent-light">
                            <div class="card-body pb-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="avatar avatar-sm avatar-rounded flex-shrink-0 me-2">
                                                <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-02.jpg"
                                                    alt="Img">
                                            </span>
                                            <div>
                                                <h6 class="fw-medium">Anthony Lewis</h6>
                                                <span>UI/UX Team</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="mb-3 text-sm-end">
                                                    <span>Date</span>
                                                    <p class="text-gray-9 fw-medium">15 Apr 2025</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 text-sm-end">
                                                    <span>Punch in at</span>
                                                    <p class="text-gray-9 fw-medium">09:00 AM</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 text-sm-end">
                                                    <span>Punch out at</span>
                                                    <p class="text-gray-9 fw-medium">06:45 PM</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3 text-sm-end">
                                                    <span>Status</span>
                                                    <p class="text-gray-9 fw-medium">Present</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none border mb-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-dark-transparent me-1"></i>Total
                                                Working hours</p>
                                            <h3>12h 36m</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-success me-1"></i>Productive Hours
                                            </p>
                                            <h3>08h 36m</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-warning me-1"></i>Break hours</p>
                                            <h3>22m 15s</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="mb-4">
                                            <p class="d-flex align-items-center mb-1"><i
                                                    class="ti ti-point-filled text-info me-1"></i>Overtime</p>
                                            <h3>02h 15m</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="progress bg-transparent-dark mb-3" style="height: 24px;">
                                            <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                style="width: 18%;"></div>
                                            <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                style="width: 5%;"></div>
                                            <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                style="width: 28%;"></div>
                                            <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                style="width: 17%;"></div>
                                            <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                style="width: 22%;"></div>
                                            <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                style="width: 5%;"></div>
                                            <div class="progress-bar bg-info rounded me-2" role="progressbar"
                                                style="width: 3%;"></div>
                                            <div class="progress-bar bg-info rounded" role="progressbar"
                                                style="width: 2%;"></div>
                                        </div>

                                    </div>
                                    <div class="co-md-12">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="fs-10">06:00</span>
                                            <span class="fs-10">07:00</span>
                                            <span class="fs-10">08:00</span>
                                            <span class="fs-10">09:00</span>
                                            <span class="fs-10">10:00</span>
                                            <span class="fs-10">11:00</span>
                                            <span class="fs-10">12:00</span>
                                            <span class="fs-10">01:00</span>
                                            <span class="fs-10">02:00</span>
                                            <span class="fs-10">03:00</span>
                                            <span class="fs-10">04:00</span>
                                            <span class="fs-10">05:00</span>
                                            <span class="fs-10">06:00</span>
                                            <span class="fs-10">07:00</span>
                                            <span class="fs-10">08:00</span>
                                            <span class="fs-10">09:00</span>
                                            <span class="fs-10">10:00</span>
                                            <span class="fs-10">11:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Attendance Report -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false"
        src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery-3.7.1.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap.bundle.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/feather.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Color Picker JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/@simonwep/pickr/pickr.es5.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.dataTables.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/dataTables.bootstrap5.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/moment.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap-datetimepicker.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Chart JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/apexcharts.min.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/chart-data.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <!-- Custom JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/theme-colorpicker.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/script.js"
        type="9740bec4ec49a69e492dcb8a-text/javascript"></script>

    <script src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="9740bec4ec49a69e492dcb8a-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>



</html>