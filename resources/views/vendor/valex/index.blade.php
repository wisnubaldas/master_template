<!doctype html>
<html lang="en" dir="ltr">
    @include('vendor.valex.head')
	<body class="main-body">
        @include('vendor.valex.loader')
		<!-- Page -->
		<div class="page">
			@include('vendor.valex.top-header')
            @include('vendor.valex.menu-horizontal')
            @include('vendor.valex.horizontal-content')
            @include('vendor.valex.sidebar-right')
            @include('vendor.valex.sidebar.message-modal')
            @include('vendor.valex.sidebar.audio-modal')
            @include('vendor.valex.sidebar.video-modal')
			@include('vendor.valex.footer')
		</div>
		<!-- End Page -->
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
		@include('vendor.valex.js')
	</body>
</html>