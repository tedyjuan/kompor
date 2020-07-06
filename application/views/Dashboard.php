<!DOCTYPE html>
<!-- -->
<html lang="en">
<!-- begin::Head -->

<head>
	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="<?php echo base_url();?>">
	<!--end::Base Path -->
	<meta charset="utf-8" />

	<title>MNC | Dashboard</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700"]
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Fonts -->

	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles -->


	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="public/assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="public/assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<!--end::Layout Skins -->

	<!-- <link rel="shortcut icon" href="public/assets/media/logos/favicon.ico" />  -->
	<link rel="shortcut icon" href="public/assets/media/logos/images.jpg" />
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body
	class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

	<!-- begin::Page loader -->

	<!-- end::Page Loader -->
	<!-- begin:: Page -->
	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="<?php echo base_url();?>">
				<img alt="Logo" src="public/assets/media/logos/mnc.png" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">

			<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
					class="flaticon-more"></i></button>
		</div>
	</div>
	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on"
					style="background-image: url(public/assets/media/layout/header-bg-demo3.jpg)">
					<div class="kt-header__top">
						<div class="kt-container ">
							<!-- begin:: Brand -->
							<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
								<div class="kt-header__brand-logo">
									<a href="<?php echo base_url();?>">
										<img alt="Logo" src="public/assets/media/logos/mnc.png"
											class="kt-header__brand-logo-default" />
										<img alt="Logo" src="public/assets/media/logos/mnc.png"
											class="kt-header__brand-logo-sticky" />
									</a>
								</div>
							</div>
							<!-- end:: Brand -->
							<!-- begin:: Topbar -->
							<div class="kt-header__topbar">
								<!--begin: Search -->
								<div class="kt-header__topbar-item kt-header__topbar-item--search">
									<div class="kt-header__topbar-wrapper">
										<div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact"
											id="kt_quick_search_inline">
											<form method="get" class="kt-quick-search__form">
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i
																class="flaticon2-search-1"></i></span></div>
													<input type="text" class="form-control kt-quick-search__input"
														placeholder="Search...">
													<div class="input-group-append"><span class="input-group-text"><i
																class="la la-close kt-quick-search__close"></i></span>
													</div>
												</div>
											</form>

											<div data-toggle="dropdown" data-offset="0,10px"></div>

											<div
												class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
												<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true"
													data-height="325" data-mobile-height="200">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end: Search -->



							</div>
							<!-- end:: Topbar -->
						</div>
					</div>
					<div class="kt-header__bottom">
						<div class="kt-container ">
							<!-- begin: Header Menu -->
							<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
									class="la la-close"></i></button>
							<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
								<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
									<ul class="kt-menu__nav ">

										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
											aria-haspopup="true">
											<a href="<?php echo base_url();?>" class="kt-menu__link">
												<span class="kt-menu__link-text">HOME</span>
											</a>
										</li>

										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
											aria-haspopup="true">
											<a onclick="ToController('konten/tes1','tes1')"
												class="kt-menu__link kt-menu__toggle">
												<span class="kt-menu__link-text">Paket Promo</span>
											</a>
										</li>

										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
											aria-haspopup="true">
											<a onclick="ToController('konten/tes2','tes2')"
												class="kt-menu__link kt-menu__toggle">
												<span class="kt-menu__link-text">Paket Jual Putus</span>
											</a>
										</li>


									</ul>
								</div>
								<div class="kt-header-toolbar">
									<a href="#" class="btn btn-wide btn-bold btn-danger btn-upper">Hubungi Kami</a>
								</div>
							</div>
							<!-- end: Header Menu -->
						</div>
					</div>
				</div>
				<!-- end:: Header -->
				<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
						id="kt_body">
						<div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Subheader -->
							<div class="kt-subheader   kt-grid__item" id="kt_subheader">
								<div class="kt-container ">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title"></h3>


									</div>
								</div>
							</div>
							<!-- end:: Subheader -->
							<!-- begin:: Content -->

							<div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1" id="contentdata">
								<!-- =================== slider =========== -->
								<!--begin::Portlet-->
								<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-14">
									<div class="kt-portlet__body">
										<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
										<div id="kt-widget-slider-14-1" class="kt-slider carousel slide"
											data-ride="carousel" data-interval="3500">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<div class="kt-widget-14__body">
														<div class="kt-widget-14__product">
															<div class="kt-blog-list__head">
																<a href="#"><img
																		src="<?php echo base_url(); ?>public/image/special.jpg"
																		width="69%" height="200%" /></a>
															</div>
														</div>
													</div>
												</div>

												<div class="carousel-item">
													<div class="kt-widget-14__body">
														<div class="kt-widget-14__product">
															<div class="kt-blog-list__head">
																<a href="#"><img
																		src="<?php echo base_url(); ?>public/image/service.jpg"
																		width="105%" height="50%" /></a>
															</div>
														</div>
													</div>
												</div>
												<div class="carousel-item">
													<div class="kt-widget-14__body">
														<div class="kt-widget-14__product">
															<div class="kt-blog-list__head">
																<a href="#"><img
																		src="<?php echo base_url(); ?>public/image/service.jpg"
																		width="105%" height="50%" /></a>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Portlet-->
								<!-- ============= end::slider============= -->
								<!-- ============ chard deck ============== -->

								<!--begin::Portlet-->
								<div class="kt-portlet">
									<div class="kt-portlet__body">
										<div class="kt-section">
											<div class="kt-section__info text-center">
												<h1>
													Kenapa Harus Pasang MNC Vision ?
												</h1>

											</div>
											<div class="kt-section__content kt-section__content--border">
												<div class="card-deck">
													<div class="card">
														<div
															class="kt-bg-white w-100 kt-padding-t-0 kt-padding-b-60 text-center">
															<img src="public/image/a3.png" width="100%" height="100%">
														</div>
														<div class="card-body">
															<h5 class="card-title">Jaringan Luas </h5>
															<p class="card-text">
																Lebih dari 104 kantor cabang yang tersebar di Ibu kota
																Provinsi dan kabupaten.</p>
														</div>
													</div>
													<div class="card">
														<div
															class="kt-bg-white w-100 kt-padding-t-0 kt-padding-b-0 text-center">
															<img src="public/image/a2.jpg" width="90%" height="100%">
														</div>
														<div class="card-body">
															<h5 class="card-title">Teknologi Cangih</h5>
															<p class="card-text">
																Di dukung oleh satelit Indostar 2 dengan Frukuensi S-
																Band yang tahan terhadap Cuaca.</p>
														</div>
													</div>
													<div class="card">
														<div
															class="kt-bg-white w-100 kt-padding-t-0 kt-padding-b-30 text-center">
															<img src="public/image/a1.jpg" width="100%" height="120%">
														</div>
														<div class="card-body">
															<h5 class="card-title">Teknisi Handal</h5>
															<p class="card-text">
																Pelayanan pemasangan cepat MNC Vision dengan prosedur
																yang Baik</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Portlet-->
								<!-- ============ begin::qustions ============ -->
								<div class="kt-portlet bg-primary">
									<div class="kt-portlet__body">
										<div class="kt-section">
											<div class="kt-section__info text-center text-white">
												<h1>
													Pertanyaan Yang Sering Diajukan!
												</h1>
											</div>
										</div>
										<p>
											<p>
												<p></p>
												<div class="container">
													<div class="row row-cols-4 text-white">
														<div class="col-4">
															<h1><i class="fa fa-comments center"></i></h1>
															<h3>
																saya tinggal di rumah kontrakan apa bisa di pasang MNC vision ?
															</h3>
															<p></p>
															<h5>
																Bisa, silahkan langsung hubungi CS kami Untuk Info lebih
																Lanjut.
															</h5>
														</div>
														<div class="col-4">
															<h1><i class="fa fa-comments"></i></h1>
															<h3>
																Berapa lama Proses pengajuannya?
															</h3>
															<h5>
																proses sangat cepat sekitar 2-3 hari dari pengajuan.
															</h5>
														</div>
														<div class="col-4">
															<h1><i class="fa fa-comments"></i></h1>
															<h3>
																Apa kah bisa untuk belangaganan?
															</h3>
															<h5>

																bisa pembayaran bulanan / tahunan, untuk pembayaran
																tahunan ada diskon khusus
															</h5>
														</div>
													</div>
												</div>
									</div>
								</div>
								<!-- ============ end::qustions ============= -->


							</div>
						</div>

						<!--end::Row-->
						<!--end::Dashboard 4-->
					</div>
					<!-- end:: Content -->
				</div>
			</div>
		</div>

		<!-- begin:: Footer -->
		<div class="kt-footer kt-grid__item"
			style="background-image: url(public/assets/media/layout/footer-bg-demo3.jpg)" id="kt_footer">
			<div class="kt-container ">
				<div class="kt-footer__top">
					<div class="row">
						<div class="col-lg-4">
							<div class="kt-footer__section">
								<h3 class="kt-footer__title">Tentang</h3>
								<div class="kt-footer__about">
									PT. MNC Sky Vision Tbk adalah pelopor dalam industri televisi berlangganan di
									Indonesia
									yang memulai layanan DTH pada 1994 dan memberikan pilihan 137 saluran terbaiknya
									dengan 32 channel eksklusif.
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="kt-footer__section">
								<h3 class="kt-footer__title">Quick Links</h3>
								<div class="row">
									<div class="col">
										<ul class="kt-footer__nav">
											<li><a href="#" class="kt-link">Pravicy Policy</a></li>
											<li><a href="#" class="kt-link">Terms & Conditions</a></li>
											<li><a href="#" class="kt-link">Help Center</a></li>
										</ul>
									</div>
									<div class="col">
										<ul class="kt-footer__nav">
											<li><a href="#" class="kt-link">Community</a></li>
											<li><a href="#" class="kt-link">Documentation</a></li>
											<li><a href="#" class="kt-link">Support</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="kt-footer__section">
								<h3 class="kt-footer__title">Get In Touch</h3>
								<form action="#" class="kt-footer__subscribe">
									<div class="kt-input-icon kt-input-icon--right">
										<input type="text" class="form-control" placeholder="Subscribe...">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="la la-arrow-right"></i></span>
										</span>
									</div>
								</form>
								<div class="kt-footer__social">
									<div class="kt-footer__social-label">
										Sosial links:
									</div>
									<ul class="kt-footer__social-nav">
										<li><a href="#"><i class="flaticon-facebook-logo-button"></i></a></li>
										<li><a href="#"><i class="flaticon-twitter-logo-button"></i></a></li>
										<li><a href="#"><i class="flaticon-instagram-logo"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-footer__bottom">
					<div class="kt-footer__copyright">
						2019&nbsp;&copy;&nbsp;<a href="#" target="_blank"
							class="kt-link">Tedyzhuand</a>
					</div>
					<div class="kt-footer__menu">
						<a href="#" target="_blank" class="kt-link">Tentang</a>
						<a href="#" target="_blank" class="kt-link">kontak</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Footer -->
	</div>
	</div>
	</div>

	<!-- end:: Page -->

	<!-- begin:: Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end:: Scrolltop -->


	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#4d5cf2",
					"metal": "#c4c5d6",
					"light": "#ffffff",
					"accent": "#00c5dc",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995",
					"focus": "#9816f4"
				},
				"base": {
					"label": [
						"#c5cbe3",
						"#a1a8c3",
						"#3d4465",
						"#3e4466"
					],
					"shape": [
						"#f0f3ff",
						"#d9dffa",
						"#afb4d4",
						"#646c9a"
					]
				}
			}
		};
	</script>
	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="public/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
	<script src="public/assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->


	<!--begin::Page Vendors(used by this page) -->
	<script src="public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!-- begin:: page load coontroller -->
	<script type="text/javascript">
		var content, urlmenu, root;
		content = $('#contentdata');

		var root = {
			'site_url': '<?php echo site_url(); ?>',
			'base_url': '<?php echo base_url(); ?>',
		};

		function ToController(controller, title) {
			urlmenu = root.site_url + '/' + controller;
			content.load(urlmenu);
			return false;
			urlmenu.empty();
		}

		function load_form(url, title) {
			content.load(url);
		}
	</script>
	<!-- end:: page load coontroller -->


</body>
<!-- end::Body -->

</html>
