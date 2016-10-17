<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Boompow Adminpanel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript">
		addEventListener("load", function()
		{ setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar()
		{ window.scrollTo(0,1);
		}
		</script>
<!-- Bootstrap Core CSS -->
<link href="{{URL::asset('admin/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{URL::asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('admin/css/mycss.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->

<!-- font-awesome icons -->
<link href="{{URL::asset('admin/css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{URL::asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::asset('admin/js/modernizr.custom.js')}}"></script>
<!--webfonts-->

<!--//webfonts-->
<!--animate-->
<link href="{{URL::asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{URL::asset('admin/js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="{{URL::asset('admin/css/clndr.css')}}" type="text/css" />
<script src="{{URL::asset('admin/js/underscore-min.js')}}" type="text/javascript"></script>
<script src= "{{URL::asset('admin/js/moment-2.2.1.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/clndr.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('admin/js/site.js')}}" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="{{URL::asset('admin/js/metisMenu.min.js')}}"></script>
<script src="{{URL::asset('admin/js/custom.js')}}"></script>
<link href="{{URL::asset('admin/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="position: fixed;">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.html" class="active"><i class="fa fa-tachometer nav_icon"></i>
							<p style="margin-left: -9px;">Dashboard</p></a>
						</li>
						<li>
							<a href="user.html"><i class="fa fa fa-user nav_icon" style="margin-left: 5px;"></i>
							<p style="margin-left: 6px;">Users <span class="nav-badge">12</span></p></a>
						</li>
						<li>
							<a href="post.html"><i class="fa fa fa-book nav_icon" style="margin-left: 5px;"></i>
							<p style="margin-left: 10px;">Post</p></a>
						</li>
						<li>
							<a href="report.html"><i class="fa fa fa-bug nav_icon"></i>
							<p style="margin-left: 2px;">Report <span class="nav-badge">12</span></p></a>
						</li>

					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->

				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<img src="images/logo_boom2.png" style="width: 169px; margin-left: -5%; margin-top: 2px;">


					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box" style="margin-left: 3%; margin-top: 16px;">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">

				<!--notification menu end -->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">


									<div class="user-name">
										<p>Thida Sriprasert</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="{{url('/admin/register')}}"><i class="fa fa-plus"></i> Add new admin</a> </li>
								<li> <a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
	@yield('main')
  <div class="footer">
     <p>&copy; 2016 Boompow Admin Panel. All Rights Reserved | Design by Boompow</a></p>
  </div>
      <!--//footer-->
  </div>
  <!-- Classie -->
  <script src="js/classie.js"></script>
  <script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
      showLeftPush = document.getElementById( 'showLeftPush' ),
      body = document.body;

    showLeftPush.onclick = function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'cbp-spmenu-push-toright' );
      classie.toggle( menuLeft, 'cbp-spmenu-open' );
      disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
      if( button !== 'showLeftPush' ) {
        classie.toggle( showLeftPush, 'disabled' );
      }
    }
  </script>
  <!--scrolling js-->
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.js"> </script>
  </body>
  </html>
