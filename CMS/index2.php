<?php
//login_success.php  
session_start();
if (isset($_SESSION["USER_NAME"])) {
} else {
	header("location:login.php");
}
?>




<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>CMS-Dashboard</title>

	<!-- Site favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png"> -->
	<!-- <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<!-- <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div> -->
			<!-- <div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>789<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div> -->




		</div>
		<div class="header-right">


			<div class="user-info-dropdown">

				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">

						<span class="user-name">
							<?php echo " " . $_SESSION["USER_NAME"] . ".<br>"; ?>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>



		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">

		<div class="brand-logo">


			<a href="">
				<!-- <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo"> -->

				<label class="label">CMS</label>

				<!-- <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo"> -->
			</a>

			<!-- <div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>  -->





		</div>



		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<!-- <a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a> -->
						<!-- <ul class="submenu">
							<li><a href="index.html">Dashboard style 1</a></li>
							 <li><a href="index2.html">Dashboard style 2</a></li>
						</ul> -->
					</li>


					<li>
						<a href="add_payment.PHP" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-rupee"></span><span class="mtext">Payment</span>
						</a>
					</li>


					<li>
						<a href="add_user.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">User Registration</span>
						</a>
					</li>

					<li>
						<a href="Dash_role.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-users"></span><span class="mtext">Role</span>
						</a>
					</li>


					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle ">
							<span class="micon fa fa-building-o"></span><span class="mtext">Site</span>
						</a>
						<ul class="submenu">
							<li><a href="add_site.php">Create site </a></li>
							<li><a href="Dash_site.php">Site List </a></li>
							<!-- <li><a href="add_site_feature.php">Add Features </a></li>
							<li><a href="add_site_material.php">Add Materials </a></li> -->
							<!-- <li><a href="add_site_status.php">Add Status </a></li>
							<li><a href="add_site_activity.php">Add Activity </a></li> -->


						</ul>
					</li>





			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<!-- <div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div> -->
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">ABC XYZ!</div>
						</h4>
						<p class="font-18 max-width-600">Project description</p>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<h2><span class="micon fa fa-users weight-1000"></span></h2>
							</div>
							<div class="widget-data">
								<?php
								include 'config.php';
								$sql = "SELECT count(ID) as TotalLab FROM view_user_master where CATE_TYPE='LABOUR'";
								$result = $conn->query($sql);
								if ($result) {

									while ($row = $result->fetch(PDO::FETCH_OBJ)) {
										echo "<div class='h2 mb-0'>$row->TotalLab</div>";
									}
								}
								?>



							</div>
							<br><br><br>
							<div class="weight-600 font-18">LABOURS</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<h2><span class="micon fa fa-users weight-1000"></span></h2>
							</div>
							<div class="widget-data">

								<?php
								include 'config.php';
								$sql = "SELECT count(ID) as TotalSup FROM view_user_master where CATE_TYPE='SUPPLIER'";
								$result = $conn->query($sql);
								if ($result) {

									while ($row = $result->fetch(PDO::FETCH_OBJ)) {
										echo "<div class='h2 mb-0'>$row->TotalSup</div>";
									}
								}
								?>

							</div>
							<br><br><br>
							<div class="weight-600 font-18">SUPPLIERS</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<h2><span class="micon fa fa-building-o weight-1000"></span></h2>
							</div>
							<div class="widget-data">


								<?php
								include 'config.php';
								$sql = "SELECT count(ID) as Totalsite FROM view_site_master ";
								$result = $conn->query($sql);
								if ($result) {

									while ($row = $result->fetch(PDO::FETCH_OBJ)) {
										echo "<div class='h2 mb-0'>$row->Totalsite</div>";
									}
								}
								?>

							</div>
							<br><br><br>
							<div class="weight-600 font-18">SITES</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<h2><span class="micon fa fa-rupee weight-1000"></span></h2>
							</div>
							<div class="widget-data">
								<?php
								include 'config.php';
								$sql = "select site_ID,sum(case when pay_MODE = 'Received' then RUPEES else 0 end)-sum(case when pay_MODE = 'Payed' then RUPEES else 0 end) As BalAmt from view_payment_master";
								$result = $conn->query($sql);
								if ($result) {

									while ($row = $result->fetch(PDO::FETCH_OBJ)) {
										echo "<div class='h2 mb-0'>$row->BalAmt</div>";
									}
								}
								?>


							</div>
							<br><br><br>
							<div class="weight-600 font-20">BALANCE</div>
						</div>
					</div>
				</div>


				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
					Hingarajiya</a>
			</div> -->
			</div>





			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>

</html>