<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dale Nguyen - Dashboard Admin</title>
		<link rel="icon" href="/favicon.png"/>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		 @yield('header_script')

		<link rel="stylesheet" href="/public/css/admin/admin.css">

		<!-- ace styles -->
		<link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="http://ace.jeka.by/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="http://ace.jeka.by/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="http://ace.jeka.by/assets/js/html5shiv.min.js"></script>
		<script src="http://ace.jeka.by/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		@include('admin.layouts.navbar')
    <div class="main-container ace-save-state" id="main-container">
		    @include('admin.layouts.main-container')
    </div><!-- /.main-container -->
	  @include('admin.layouts.scripts')
	</body>
</html>
