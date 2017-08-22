<!doctype html>
<html lang="en">
@include('admin.includes.head')
<body>

<div class="wrapper">

    @include('admin.includes.sidebar')

    <div class="main-panel">

        @include('admin.includes.nav')


        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
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
                                        <th>Description</th>
                                        <th>Minutes</th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($minutes as $min)
                                        <tr>
                                            <td>{{ $min->id }}</td>
                                            <td>{{ $min->user_id }}</td>
                                            <td>{{ $min->project_id }}</td>
                                            <td>{{ $min->description }}</td>
                                            <td>{{ $min->minutes }}</td>
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
                                            {{ $mem->forename }}
                                            <?php echo(substr($mem->surname, 0, 1)); ?>
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

        @include('admin.includes.footer')

    </div>
</div>


</body>

@include('admin.includes.scripts')



</html>
