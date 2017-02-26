<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | @yield('page_title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('plugins/data-tables/datatables.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('plugins/data-tables/Buttons-1.2.4/css/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE PLUGINS STYLES-->
@stack('plugins_css')
<!-- END PAGE PLUGINS STYLES-->
<!-- BEGIN THEME STYLES -->
<link href="{{asset('')}}css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}css/style.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('')}}css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{asset('')}}css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
@include('templates.header')
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	@include('templates.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					@yield('page_title') <small>@yield('page_desc')</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{URL::to('/')}}">
								Home
							</a>
                            @if(count($breadcrumbs))
							<i class="fa fa-angle-right"></i>
                            @endif
						</li>
                        @foreach($breadcrumbs as $t=>$l)
						<li>
							<a href="{{$loop->last===false?$l:'#'}}">
								{{$t}}
							</a>
                            @if ($loop->last===false)
                                <i class="fa fa-angle-right"></i>
                            @endif
						</li>
                        @endforeach
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 {{date('Y')}} &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
   <script src="{{asset('')}}plugins/respond.min.js"></script>
   <script src="{{asset('')}}plugins/excanvas.min.js"></script> 
   <![endif]-->
<script src="{{asset('')}}plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('')}}plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="{{asset('')}}plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src='{{asset('plugins/data-tables/datatables.min.js')}}'></script>
<script src='{{asset('plugins/data-tables/Buttons-1.2.4/js/buttons.bootstrap.min.js')}}'></script>
<script src='{{asset('plugins/data-tables/Buttons-1.2.4/js/buttons.html5.min.js')}}'></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE PLUGINS -->
@stack('plugins_js')
<!-- END PAGE PLUGINS -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="{{asset('')}}scripts/core/app.js"></script>
@stack('scripts')
<!-- END PAGE SCRIPTS -->
<script>
      jQuery(document).ready(function() {    
         App.init();
         @yield('page_scripts').init();
      });
   </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>