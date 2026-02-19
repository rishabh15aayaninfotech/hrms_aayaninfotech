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
                        <h2 class="mb-1">Holidays</h2>
                        
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="mb-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#add_holiday"
                                class="btn btn-primary d-flex align-items-center"><i
                                    class="ti ti-circle-plus me-2"></i>Add Holiday</a>
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
                        <h5>Holidays List</h5>
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
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Status</th>
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
                                            <h6 class="fw-medium"><a href="#">New Year</a></h6>
                                        </td>
                                        <td>01 Jan 2024</td>
                                        <td>First day of the new year</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Martin Luther King Jr. Day</a></h6>
                                        </td>
                                        <td>15 Jan 2024</td>
                                        <td>Celebrating the civil rights leader</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">President's Day</a></h6>
                                        </td>
                                        <td>19 Feb 2024</td>
                                        <td>Honoring past US Presidents</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Good Friday</a></h6>
                                        </td>
                                        <td>29 Mar 2024</td>
                                        <td>Holiday before Easter</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Easter Monday</a></h6>
                                        </td>
                                        <td>01 Apr 2024</td>
                                        <td>Holiday after Easter</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Memorial Day</a></h6>
                                        </td>
                                        <td>27 Apr 2024</td>
                                        <td>Honors military personnel</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Independence Day</a></h6>
                                        </td>
                                        <td>04 Jul 2024</td>
                                        <td>Celebrates Independence</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Labour Day</a></h6>
                                        </td>
                                        <td>02 Sep 2024</td>
                                        <td>Honors working people</td>
                                        <td>
                                            <span class="badge badge-danger d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Inactive
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Veterans Day</a></h6>
                                        </td>
                                        <td>11 Nov 2024</td>
                                        <td>Honors military veterans</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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
                                        <td>
                                            <h6 class="fw-medium"><a href="#">Christmas Day</a></h6>
                                        </td>
                                        <td>25 Dec 2024</td>
                                        <td>Celebration of Christmas</td>
                                        <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_holiday"><i class="ti ti-edit"></i></a>
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

        <!-- Add Plan -->
        <div class="modal fade" id="add_holiday">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Holiday</h4>
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
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Holiday</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Plan -->

        <!-- Edit Plan -->
        <div class="modal fade" id="edit_holiday">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Holiday</h4>
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
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="New Year">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" value="01 Jan 2024">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="3">First day of the new year</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option selected>Active</option>
                                            <option>Inactive</option>
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
        <!-- /Edit Plan -->

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
                            <a href="#" class="btn btn-danger">Yes, Delete</a>
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
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap.bundle.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/feather.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Color Picker JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/@simonwep/pickr/pickr.es5.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.dataTables.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/dataTables.bootstrap5.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/moment.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap-datetimepicker.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Chart JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/apexcharts.min.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/chart-data.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <!-- Custom JS -->
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/theme-colorpicker.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/script.js"
        type="c07fc05485ec6a583b32902e-text/javascript"></script>

    <script src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="c07fc05485ec6a583b32902e-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>


</html>