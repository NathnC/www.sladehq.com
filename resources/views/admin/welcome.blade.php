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
                                    <i class="fa fa-3x fa-user "></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class=" pt-10 pb-0 mt-0 mb-0">{{ count($members) }} members</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-hourglass-3"></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class=" pt-10 pb-0 mt-0 mb-0">{{ $totalMinutes }} Minutes</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-archive "></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class=" pt-10 pb-0 mt-0 mb-0">{{ count($projects) }} @if(count($projects) > 1) Projects @else Project @endif</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="col-md-8">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Projects Directory</h4>
                                    <p class="category">All active, inactive and pending projects, {{ count($projects) }} in total</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <tr><th>ID</th>
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>Client</th>
                                            <th>Deadline</th>
                                        </tr></thead>
                                        <tbody>
                                        @foreach($projects as $proj)
                                            <tr>
                                                <td>{{ $proj->id }}</td>
                                                <td>{{ $proj->name }}</td>
                                                <td><a href="http://{!! $proj->live_url !!}">{{ $proj->live_url }}</a></td>
                                                <td>{{ $proj->client }}</td>
                                                <td>
                                                    @if($proj->deadline != '0000-00-00 00:00:00')
                                                        {{ $proj->deadline }}
                                                    @else
                                                        No Deadline
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>



                        <div class="col-md-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Minutes Directory</h4>
                                <p class="category">Overview of all logged minutes, {{ $totalMinutes }} minutes in total</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr><th>ID</th>
                                        <th>User</th>
                                        <th>Project</th>
                                        <th>Client</th>
                                        <th>Deadline</th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($projects as $proj)
                                        <tr>
                                            <td>{{ $proj->id }}</td>
                                            <td>{{ $proj->name }}</td>
                                            <td><a href="http://{!! $proj->live_url !!}">{{ $proj->live_url }}</a></td>
                                            <td>{{ $proj->client }}</td>
                                            <td>
                                                @if($proj->deadline != '0000-00-00 00:00:00')
                                                    {{ $proj->deadline }}
                                                @else
                                                    No Deadline
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Users Directory</h4>
                            <p class="category">Every active team member, {{ count($members) }} in total</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $mem)
                                    <tr>
                                        <td>
                                            @if($mem->leader == 2)
                                                <i class="fa fa-fw text-warning fa-star"></i>
                                            @elseif($mem->leader == 1)
                                                <i class="fa fa-fw text-darkpurple fa-star"></i>
                                            @else
                                                <i class="fa fa-fw text-darkpurple fa-user"></i>
                                            @endif
                                            {{ $mem->name }}
                                        </td>
                                        <td>{{ $mem->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

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
