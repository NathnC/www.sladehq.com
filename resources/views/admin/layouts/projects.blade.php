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

                        <div class="card">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title"><i class="pe-7s-box2"></i> Projects Directory</h4>
                                    <p class="category">All past, present and future projects including their status, <b>{{ count($projects) }} projects in total.</b></p>
                                </div>
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th><i class="pe-7s-clock"></i> Name</th>
                                        <th><i class="pe-7s-pen"></i> Description</th>
                                        <th><i class="pe-7s-user"></i> Client</th>
                                        <th><i class="pe-7s-box1"></i> URL Link</th>
                                        <th><i class="pe-7s-browser"></i> Status</th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($projects as $proj)
                                        <tr>
                                            <td>{{ $proj->name }}</td>
                                            <td>{{ $proj->description }}</td>
                                            <td>{{ $proj->client }}</td>
                                            <td><a class="text-purple" href="http://{{ $proj->test_url }}">{{ $proj->test_url }}</a></td>
                                            <td>
                                                @if($proj->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @elseif($proj->status == 2)
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif($proj->status == 3)
                                                    <span class="badge badge-error">Cancelled</span>
                                                @else
                                                    <span class="badge badge-info">Unknown</span>
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
        </div>

        @include('admin.includes.footer')

    </div>
</div>


</body>

@include('admin.includes.scripts')



</html>
