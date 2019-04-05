<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<!-- begin::Head -->
	<head>
    @include('frontend.admin.include._header')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="{{ route('landing-page.admin.index')}}">
					Desaku
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>
		<!-- end:: Header Mobile -->

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside -->
					@include('frontend.admin.include._aside-head')
					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					@include('frontend.admin.include._aside-menu')
					<!-- end:: Aside Menu -->
					
				</div>
				<!-- end:: Aside -->

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						@include('frontend.admin.include._navbar-right')
						<!-- end:: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							@include('frontend.admin.include._navbar-left')


							<!--begin: User Bar -->
							@include('frontend.admin.include._navbar-user')
							<!--end: User Bar -->

						</div>
						<!-- end:: Header Topbar -->

					</div>
					<!-- end:: Header -->
					
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
						@yield('content')
					</div>

					<!-- begin:: Footer -->
					@include('frontend.admin.include._footer')
					<!-- end:: Footer -->
					
			</div>
		</div>
		<!-- end:: Page -->


		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>
		<!-- end::Global Config -->

		@include('frontend.admin.include._vendor')

	</body>

	<!-- end::Body -->
</html>