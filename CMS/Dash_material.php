<?php
session_start();

if (!isset($_SESSION["USER_NAME"])) {
	header("location:index2.php");
}


?>










<!DOCTYPE html>
<html>

<head>

	<script language="javascript" type="text/javascript">
		window.history.forward();
		window.history.backword();
	</script>


	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>CMS</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
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
		<div class="pre-loader-box"> -->
	<!-- <div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div> -->
	</div>
	</div>

	<div class="header">
		<div class="header-left">
			<!-- <div class="menu-icon dw dw-menu"></div> -->
			<!-- <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div> -->
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<!-- <i class="dw dw-search2 search-icon"></i> -->
						<!-- <input type="text" class="form-control search-input" placeholder="Search Here"> -->
						<div class="dropdown">
							<!-- <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a> -->
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
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<!-- <div class="dashboard-setting user-notification">
				<div class="dropdown"> -->
			<!-- <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a> -->
			<!-- </div>
			</div> -->
			<div class="user-notification">
				<div class="dropdown">
					<!-- <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a> -->
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<!-- <span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span> -->
						<!-- <span class="user-name">Ross C. Lopez</span> -->
						<?php
						echo '<h6> Admin : ' . $_SESSION["USER_NAME"] . '</h6>';
						?>


					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a> -->
						<!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<!-- <div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div> -->
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


			<a href="index.php">
				<label class="label">CMS</label>
				<!-- <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo"> -->
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="index2.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<!-- <ul class="submenu">
							<li><a href="index.html">Dashboard style 1</a></li>
							<li><a href="index2.html">Dashboard style 2</a></li>
						</ul> -->
					</li>
					<li class="dropdown">
						<!-- <a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span><span class="mtext">Form</span>
						</a> -->
						<!-- <ul class="submenu">
							<li><a href="form-basic.html">Form Basic</a></li>
							<li><a href="advanced-components.html">Advanced Components</a></li>
							<li><a href="form-wizard.html">Form Wizard</a></li>
							<li><a href="html5-editor.html">HTML5 Editor</a></li>
							<li><a href="form-pickers.html">Form Pickers</a></li>
							<li><a href="image-cropper.html">Image Cropper</a></li>
							<li><a href="image-dropzone.html">Image Dropzone</a></li>
						</ul> -->
						<!-- </li>
					 <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle no-arrow">
                         <li><a href="basic-table.php">Basic Table</a></li> -->
						<!-- <span class="micon dw dw-library"></span><span class="mtext">List</span> 
						</a>
						<ul class="submenu"> -->
						<!-- <li><a href="basic-table.html">Basic Tables</a></li>
							<li><a href="datatable.html">DataTables</a></li> -->
				</ul>
				</li>
				<!--<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
						</a>
						<ul class="submenu">
							<li><a href="ui-buttons.html">Buttons</a></li>
							<li><a href="ui-cards.html">Cards</a></li>
							<li><a href="ui-cards-hover.html">Cards Hover</a></li>
							<li><a href="ui-modals.html">Modals</a></li>
							<li><a href="ui-tabs.html">Tabs</a></li>
							<li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
							<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
							<li><a href="ui-notification.html">Notification</a></li>
							<li><a href="ui-timeline.html">Timeline</a></li>
							<li><a href="ui-progressbar.html">Progressbar</a></li>
							<li><a href="ui-typography.html">Typography</a></li>
							<li><a href="ui-list-group.html">List group</a></li>
							<li><a href="ui-range-slider.html">Range slider</a></li>
							<li><a href="ui-carousel.html">Carousel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
						</a>
						<ul class="submenu">
							<li><a href="font-awesome.html">FontAwesome Icons</a></li>
							<li><a href="foundation.html">Foundation Icons</a></li>
							<li><a href="ionicons.html">Ionicons Icons</a></li>
							<li><a href="themify.html">Themify Icons</a></li>
							<li><a href="custom-icon.html">Custom Icons</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Highchart</a></li>
							<li><a href="knob-chart.html">jQuery Knob</a></li>
							<li><a href="jvectormap.html">jvectormap</a></li>
							<li><a href="apexcharts.html">Apexcharts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="video-player.html">Video Player</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
							<li><a href="reset-password.html">Reset Password</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="400.html">400</a></li>
							<li><a href="403.html">403</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="500.html">500</a></li>
							<li><a href="503.html">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.html">Blank</a></li>
							<li><a href="contact-directory.html">Contact Directory</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
							<li><a href="product.html">Product</a></li>
							<li><a href="product-detail.html">Product Detail</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="profile.html">Profile</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="pricing-table.html">Pricing Tables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
						</a>
						<ul class="submenu">
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Level 2</a></li>
									<li><a href="javascript:;">Level 2</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
						</ul>
					</li> -->
				<!-- <li>
						<a href="sitemap.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					<li> -->
				<!-- <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Landing Page <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
						</a> -->
				</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Material Information</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index2.php">Back</a></li>
									<!-- <li class="breadcrumb-item active" aria-current="page">Basic Tables</li> -->
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<!-- <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a> -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Material List</h4>
							<!-- <p>Add class <code>.table</code></p> -->
						</div>
						<div class="pull-right">
							<a href="add_material.php" class="btn btn-primary btn-sm scroll-click" rel="content-y">ADD</a>
						</div>
					</div>

					<?php
					include 'config.php';
					$sql = "SELECT ID,material_NAME,material_STATUS FROM material_master";
					$result = $conn->query($sql);

					if ($result) {
						echo "<table class='table'>
						
								<tr>
									<th scope='col'>Sr.No</th>
									<th scope='col'>Material Name</th>
									<th scope='col'>Status</th>
								
						
									
									<th scope='col'>Edit</th>
								
					
							    </tr>";

						$SrNo = 1;
						while ($row = $result->fetch(PDO::FETCH_OBJ)) {
							echo 	"<tr>

							   				<td>$SrNo</td>
											<td>$row->material_NAME</td>
											<td>$row->material_STATUS</td> 
										

											
											<td><a href='Material_update.php?PID=$row->ID'><big><i class='icon-copy fa fa-pencil-square-o' aria-hidden='true'</i><big></a></td>
											
											</tr>";


							$SrNo++;
						}
					}
					?>





					<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									<form method="post">
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Bank</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" placeholder="Enter Bank name" name="bank_name" readonly value="<?php echo $BNM; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">IFSC code</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" placeholder="Enter IFSC code" type="text" name="ifsc" readonly value="<?php echo $IFSC; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">MICR code</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" placeholder="Enter MICR code" type="number" name="micr" readonly value="<?php echo $MICR; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">State</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" type="text" placeholder="Enter State" name="ste" readonly value="<?php echo $ST; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Address</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" placeholder="Enter Address of bank" type="text" name="addd" readonly value="<?php echo $ADD; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Phone NO</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" placeholder="Enter phone no" type="number" name="ph_No" readonly value="<?php echo $PHO; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Email</label>
											<div class="col-sm-12 col-md-10">
												<input class="form-control" placeholder="Enter Email" type="email" name="email" readonly value="<?php echo $EML; ?>">
											</div>
										</div>

										<!-- <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" 
                                id="submit" value="Submit">
                            <span class="loginMsg"><?php echo @$msg; ?></span> -->

									</form>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>




					<div class="collapse collapse-box" id="basic-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="basic-table-code">
<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table> -->
							<!-- </code></pre>
						</div>
					</div>
				</div> -->
				<!-- basic table  End -->
				<!-- Bordered table  start -->
				<!-- <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20"> -->
				<!-- <div class="pull-left">
							<h4 class="text-blue h4">Bordered table</h4>
							<p>Add <code>.table  .table-bordered</code> for borders on all sides of the table and cells.</p>
						</div> -->
				<!-- <div class="pull-right">
							<a href="#border-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div> -->
				<!-- </div> -->
				<!-- <table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								<th scope="col">Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><span class="badge badge-primary">Primary</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
						</tbody>
					</table> -->
				<!-- <div class="collapse collapse-box" id="border-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#border-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#border-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div> -->
				<!-- <pre><code class="xml copy-pre" id="border-table-code"> -->
				<!-- <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table> -->
				<!-- </code></pre>
						</div>
					</div>
				</div> -->
				<!-- Bordered table End -->
				<!-- Striped table start -->
				<!-- <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Striped table</h4>
							<p>Add <code>.table  .table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
						</div>
						<div class="pull-right">
							<a href="#striped-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								<th scope="col">Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><span class="badge badge-primary">Primary</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="badge badge-secondary">Secondary</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="badge badge-success">Success</span></td>
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="striped-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="striped-table-code">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table> -->
				<!-- </code></pre>
						</div>
					</div>
				</div> -->
				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<!-- <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Responsive table</h4>
							<p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table  .table-responsive</code> Or, pick a maximum breakpoint with which to have a responsive table up to by using<code>.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
						</div>
						<div class="pull-right">
							<a href="#responsive-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
									<th scope="col">Tag</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td><span class="badge badge-primary">Primary</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="responsive-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#responsive-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#responsive-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="responsive-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div> -->
				<!-- </code></pre>
						</div>
					</div>
				</div> -->
				<!-- Responsive tables End -->
				<!-- Contextual classes Start -->
				<!-- <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Contextual classes</h4>
							<p>Use classes <code>( .table-active, .table-success, .table-info, .table-warning, .table-danger )</code> to color table rows or individual cells</p>
						</div>
						<div class="pull-right">
							<a href="#contextual-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
									<th scope="col">Tag</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td><span class="badge badge-primary">Primary</span></td>
								</tr>
								<tr class="table-primary">
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr class="table-secondary">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-success">
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><span class="badge badge-secondary">Secondary</span></td>
								</tr>
								<tr class="table-danger">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-warning">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-info">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-dark">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
								<tr class="table-light">
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><span class="badge badge-success">Success</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="contextual-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#contextual-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#contextual-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="contextual-table-code">
<div class="table-responsive"> -->
				<!-- <table class="table table-striped">
	  <tbody>
	    <tr class="table-active"><td></td></tr>
		<tr class="table-primary"><td></td></tr>
		<tr class="table-secondary"><td></td></tr>
		<tr class="table-success"><td></td></tr>
		<tr class="table-danger"><td></td></tr>
		<tr class="table-warning"><td></td></tr>
		<tr class="table-info"><td></td></tr>
		<tr class="table-light"><td></td></tr>
		<tr class="table-dark"><td></td></tr>
	  </tbody>
	</table>
</div> -->
				<!-- </code></pre>
						</div>
					</div>
				</div> -->
				<!-- Contextual classes End -->
				<!-- </div> -->
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div> -->
				<!-- </div>
	</div> -->
				<!-- js -->
				<script src="vendors/scripts/core.js"></script>
				<script src="vendors/scripts/script.min.js"></script>
				<script src="vendors/scripts/process.js"></script>
				<script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>