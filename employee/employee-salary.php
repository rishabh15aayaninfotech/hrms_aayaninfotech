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
	<link rel="shortcut icon" type="image/x-icon"
		href="assets/img/logo/aayaninfotech_logo.jfif">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180"
		href="assets/img/logo/aayaninfotech_logo.jfif">

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
						<h2 class="mb-1">Payslip Report</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.dreamstechnologies.com/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Payslip Report</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Export
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="row">

					<!-- Total Exponses -->
					<div class="col-xl-6 d-flex">
						<div class="row flex-fill">
							<div class="col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
											<div class="">
												<span class="fs-14 fw-normal text-truncate mb-1">Total Payroll</span>
												<h5>$250,000</h5>
											</div>
											<a href="#" class="avatar avatar-md avatar-rounded bg-transparent-primary border border-primary">
												<span class="text-primary"><i class="ti ti-brand-shopee"></i></span>
											</a>
										</div>
										<p class="fs-12 fw-normal d-flex align-items-center text-truncate">
											<span class="text-success fs-12 d-flex align-items-center me-1">
												<i class="ti ti-arrow-wave-right-up me-1"></i>+20.01% 
											</span> from last week
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
											<div class="">
												<span class="fs-14 fw-normal text-truncate mb-1">Deductions</span>
												<h5>$50,000</h5>
											</div>
											<a href="#" class="avatar avatar-md avatar-rounded bg-transparent-danger border border-danger">
												<span class="text-danger"><i class="ti ti-brand-shopee"></i></span>
											</a>
										</div>
										<p class="fs-12 fw-normal d-flex align-items-center text-truncate">
											<span class="text-success fs-12 d-flex align-items-center me-1">
												<i class="ti ti-arrow-wave-right-up me-1"></i>+17.01% 
											</span> from last week
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
											<div class="">
												<span class="fs-14 fw-normal text-truncate mb-1">Net Pay</span>
												<h5>$200,000</h5>
											</div>
											<a href="#" class="avatar avatar-md avatar-rounded bg-transparent-success border border-success">
												<span class="text-success"><i class="ti ti-brand-shopee"></i></span>
											</a>
										</div>
										<p class="fs-12 fw-normal d-flex align-items-center text-truncate">
											<span class="text-success fs-12 d-flex align-items-center me-1">
												<i class="ti ti-arrow-wave-right-up me-1"></i>+10.01% 
											</span> from last week
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between bg-light border rounded p-2 mb-2">
											<div class="">
												<span class="fs-14 fw-normal text-truncate mb-1">Allowances</span>
												<h5>$30,000</h5>
											</div>
											<a href="#" class="avatar avatar-md avatar-rounded bg-transparent-skyblue border border-skyblue">
												<span class="text-skyblue"><i class="ti ti-brand-shopee"></i></span>
											</a>
										</div>
										<p class="fs-12 fw-normal d-flex align-items-center text-truncate">
											<span class="text-danger fs-12 d-flex align-items-center me-1">
												<i class="ti ti-arrow-wave-right-up me-1"></i>-10.01% 
											</span> from last week
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Total Exponses -->

					<!-- Total Exponses -->
					<div class="col-xl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header border-0 pb-0">
								<div class="d-flex flex-wrap justify-content-between align-items-center">
									<div class="d-flex align-items-center ">
										<span class="me-2"><i class="ti ti-chart-area-line text-danger"></i></span>
										<h5>Payroll</h5>
									</div>
									<div class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm fs-12 btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
											This Year
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-2">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body py-0">
								<div id="payslip-chart"></div>
							</div>
						</div>
					</div>
					<!-- /Total Exponses -->


				</div>

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Payslip List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									$0.00 - $00
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">$3800</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">$4500</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">$3400</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Payment Type
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Cash</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Cheque</a>
									</li>
								</ul>
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
										<th>Name</th>
										<th>Paid Amount</th>
										<th>Paid Month</th>
										<th>Paid Year</th>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-32.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Anthony Lewis</a></p>
													<span class="fs-12">Finance</span>
                                            	</div>
											</div>
										</td>
										<td>$3000</td>
										<td>$3000</td>
										<td>
											$3000
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-09.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Brian Villalobos</a></p>
													<span class="fs-12">Developer</span>
                                            	</div>
											</div>
										</td>
										<td>$2500</td>
										<td>$2500</td>
										<td>
											$2500
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-37.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Connie Waters</a></p>
													<span class="fs-12">Developer</span>
                                            	</div>
											</div>
										</td>
										<td>$2800</td>
										<td>$2800</td>
										<td>
											$2800
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-33.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Doglas Martini</a></p>
													<span class="fs-12">Manager</span>
                                            	</div>
											</div>
										</td>
										<td>$3300</td>
										<td>$3300</td>
										<td>
											$3300
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-35.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Elliot Murray</a></p>
													<span class="fs-12">Finance</span>
                                            	</div>
											</div>
										</td>
										<td>$3600</td>
										<td>$3600</td>
										<td>
											$3600
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-01.jpg" class="img-fluid rounded-circle" alt="img"></a>
													<div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Harvey Smith</a></p>
													<span class="fs-12">Developer</span>
                                            	</div>
											</div>
										</td>
										<td>$2000</td>
										<td>$2000</td>
										<td>
											$2000
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-02.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Linda Ray</a></p>
													<span class="fs-12">Finance</span>
                                            	</div>
											</div>
										</td>
										<td>$3400</td>
										<td>$3400</td>
										<td>
											$3400
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-38.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Lori Broaddus</a></p>
													<span class="fs-12">Developer</span>
                                            	</div>
											</div>
										</td>
										<td>$4000</td>
										<td>$4000</td>
										<td>
											$4000
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/users/user-36.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
													<p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Rebecca Smtih</a></p>
													<span class="fs-12">Executive</span>
                                            	</div>
											</div>
										</td>
										<td>$4500</td>
										<td>$4500</td>
										<td>
											$4500
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


	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script data-cfasync="false" src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery-3.7.1.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap.bundle.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/feather.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Color Picker JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/@simonwep/pickr/pickr.es5.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Datatable JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/jquery.dataTables.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/dataTables.bootstrap5.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>	

	<!-- Daterangepikcer JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/moment.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/bootstrap-datetimepicker.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Chart JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/apexcharts.min.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/plugins/apexchart/chart-data.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

	<!-- Custom JS -->
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/theme-colorpicker.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>
	<script src="https://smarthr.dreamstechnologies.com/html/template/assets/js/script.js" type="48889a86f21f8f4cd21c7bfe-text/javascript"></script>

<script src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="48889a86f21f8f4cd21c7bfe-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>


</html>