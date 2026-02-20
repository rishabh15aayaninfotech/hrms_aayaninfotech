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

	<div id="global-loader">
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
						<h2 class="mb-1">Coming Soon !</h2>
						
					</div>
					
				</div>

				
			</div>

			<?php include 'layout/footer.php'; ?>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Leaves -->
		<div class="modal fade" id="add_leaves">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Leave</h4>
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
										<label class="form-label">Employee Name</label>
										<select class="select">
											<option>Select</option>
											<option>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Leave Type</label>
										<select class="select">
											<option>Select</option>
											<option>Medical Leave</option>
											<option>Casual Leave</option>
											<option>Annual Leave</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">From </label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker"
												placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">To </label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker"
												placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No of Days</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Remaining Days</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Leaves</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Leaves -->

		<!-- Edit Task -->
		<div class="modal fade" id="edit_task">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Task </h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="#">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Todo Title</label>
										<input type="text" class="form-control" value="Patient appointment booking">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Due Date</label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker"
												placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Project</label>
										<select class="select">
											<option>Select</option>
											<option selected>Office Management</option>
											<option>Clinic Management </option>
											<option>Educational Platform</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Team Members</label>
										<input class="input-tags form-control" placeholder="Add new" type="text"
											data-role="tagsinput" name="Label" value="Jerald,Andrew,Philip,Davis">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<select class="select">
											<option>Select</option>
											<option>Internal</option>
											<option selected>Projects</option>
											<option>Meetings</option>
											<option>Reminder</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option selected>Inprogress</option>
											<option>Completed</option>
											<option>Pending</option>
											<option>Onhold</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option selected>Medium</option>
											<option>High</option>
											<option>Low</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<label class="form-label">Who Can See this Task?</label>
									<div class="d-flex align-items-center">
										<div class="form-check me-3">
											<input class="form-check-input" type="radio" name="flexRadioDefault"
												id="flexRadioDefault4">
											<label class="form-check-label text-dark" for="flexRadioDefault4">
												Public
											</label>
										</div>
										<div class="form-check me-3">
											<input class="form-check-input" type="radio" name="flexRadioDefault"
												id="flexRadioDefault5" checked="">
											<label class="form-check-label text-dark" for="flexRadioDefault5">
												Private
											</label>
										</div>
										<div class="form-check ">
											<input class="form-check-input" type="radio" name="flexRadioDefault"
												id="flexRadioDefault6">
											<label class="form-check-label text-dark" for="flexRadioDefault6">
												Admin Only
											</label>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label">Descriptions</label>
										<div class="summernote"></div>
									</div>
								</div>
								<div class="col-md-12">
									<label class="form-label">Upload Attachment</label>
									<div class="bg-light rounded p-2">
										<div class="profile-uploader border-bottom mb-2 pb-2">
											<div class="drag-upload-btn btn btn-sm btn-white border px-3">
												Select File
												<input type="file" class="form-control image-sign" multiple="">
											</div>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
											<div class="d-flex align-items-center">
												<h6 class="fs-12 fw-medium me-1">Logo.zip</h6>
												<span class="badge badge-soft-info">21MB </span>
											</div>
											<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<h6 class="fs-12 fw-medium me-1">Files.zip</h6>
												<span class="badge badge-soft-info">25MB </span>
											</div>
											<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Task -->

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
	<script src="assets/js/jquery-3.7.1.min.js"
		type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"
		type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>
	<script src="assets/plugins/apexchart/chart-data.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"
		type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-lite.min.js"
		type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Daterangepikcer JS -->
	<script src="assets/plugins/daterangepicker/daterangepicker.js"
		type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Color Picker JS -->
	<script src="assets/plugins/@simonwep/pickr/pickr.es5.min.js"
		type="897826b1b35be5ec3e409176-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/circle-progress.js" type="897826b1b35be5ec3e409176-text/javascript"></script>
	<script src="assets/js/todo.js" type="897826b1b35be5ec3e409176-text/javascript"></script>
	<script src="assets/js/theme-colorpicker.js" type="897826b1b35be5ec3e409176-text/javascript"></script>
	<script src="assets/js/script.js" type="897826b1b35be5ec3e409176-text/javascript"></script>

	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	<script>
		tinymce.init({
			selector: '#editor',
			height: 300,
			menubar: true,
			plugins: [
				'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
				'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
				'insertdatetime', 'media', 'table', 'help', 'wordcount'
			],
			toolbar:
				'undo redo | blocks | bold italic underline | ' +
				'alignleft aligncenter alignright alignjustify | ' +
				'bullist numlist outdent indent | link image | code fullscreen',
		});
	</script>

	<script src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
		data-cf-settings="897826b1b35be5ec3e409176-|49" defer></script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
		integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
		data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
		crossorigin="anonymous"></script>
</body>



</html>