<!doctype html>
<html lang="en">
@include('front.includes.head')
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="images/admin/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="welcome.blade.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="../../../../../../Downloads/x_lbd_free_v1.3.1/upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">

        @include('admin.includes.nav')


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-user text-darkpurple"></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class="text-darkpurple pt-10 pb-0 mt-0 mb-0">{{ $members }} members</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-clock-o text-darkpurple"></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class="text-darkpurple pt-10 pb-0 mt-0 mb-0">0 Minutes</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-archive text-darkpurple"></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class="text-darkpurple pt-10 pb-0 mt-0 mb-0">0 Projects</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <p class="copyright pull-left">
                        <b>Admin Dashboard v1</b>
                    </p>
                </nav>
                <p class="copyright pull-right">
                    <b>Designed &amp; Built</b> with <i class="fa fa-heart text-darkpurple"></i> by <b>Nathan Connor</b>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="/js/chartist.min.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="/js/light-bootstrap-dashboard.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
