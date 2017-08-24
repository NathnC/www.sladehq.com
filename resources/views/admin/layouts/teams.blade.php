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

                <div class="nav nav-tabs col-md-12" role="tablist">
                    <div class="active col-md-4" role="presentation">
                        <a href="#digital" aria-controls="digital" role="tab" data-toggle="tab">
                            <div class="card">
                                <div class="row text-darkpurple">
                                    <div class="col-md-4">
                                        <i class="fa fa-3x fa-github-alt"></i>
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <h2 class=" pt-10 pb-0 mt-0 mb-0">Digital Team</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" role="presentation">
                        <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                        <div class="card">
                            <div class="row text-darkpurple">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-camera"></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class=" pt-10 pb-0 mt-0 mb-0">Design Team</h2>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4" role="presentation">
                        <a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">
                        <div class="card">
                            <div class="row text-darkpurple">
                                <div class="col-md-4">
                                    <i class="fa fa-3x fa-server "></i>
                                </div>
                                <div class="col-md-7 text-right">
                                    <h2 class=" pt-10 pb-0 mt-0 mb-0">Technical Team</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-50">
                    <div class="card">
                        <div class="tab-content text-darkpurple">
                            <div role="tabpanel" class="tab-pane active" id="digital">
                                <div class="col-md-12">
                                    <h2>{{ $tinfo_digital->name }} Team</h2>
                                    <h5>
                                        {{ $tinfo_digital->description }}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th><i class="pe-7s-user"></i> Position</th>
                                                <th><i class="pe-7s-clock"></i> User</th>
                                                <th><i class="pe-7s-clock"></i> Email</th>
                                                <th><i class="pe-7s-clock"></i> Join Date</th>

                                            </tr></thead>
                                            <tbody>
                                            @foreach($team_digital as $usr)
                                                <tr>
                                                    <td>
                                                        @if($usr->leader >= 1)
                                                            <i class="fa fa-fw text-warning fa-star"></i> Leader
                                                        @else
                                                            <i class="fa fa-fw text-darkpurple fa-user"></i> Member
                                                        @endif
                                                    </td>
                                                    <td>{{ $usr->forename }} {{ $usr->surname }}</td>
                                                    <td>{{ $usr->email }}</td>
                                                    <td>{{ $usr->created_at }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="design">
                                <div class="col-md-12">
                                    <h2>{{ $tinfo_design->name }} Team</h2>
                                    <h5>
                                        {{ $tinfo_design->description }}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th><i class="pe-7s-user"></i> Position</th>
                                                <th><i class="pe-7s-clock"></i> User</th>
                                                <th><i class="pe-7s-clock"></i> Email</th>
                                                <th><i class="pe-7s-clock"></i> Join Date</th>

                                            </tr></thead>
                                            <tbody>
                                            @foreach($team_design as $usr)
                                                <tr>
                                                    <td>
                                                        @if($usr->leader >= 1)
                                                            <i class="fa fa-fw text-warning fa-star"></i> Leader
                                                        @else
                                                            <i class="fa fa-fw text-darkpurple fa-user"></i> Member
                                                        @endif
                                                    </td>
                                                    <td>{{ $usr->forename }} {{ $usr->surname }}</td>
                                                    <td>{{ $usr->email }}</td>
                                                    <td>{{ $usr->created_at }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="technical">
                                <div class="col-md-12">
                                    <h2>{{ $tinfo_technical->name }} Team</h2>
                                    <h5>
                                        {{ $tinfo_technical->description }}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th><i class="pe-7s-user"></i> Position</th>
                                                <th><i class="pe-7s-clock"></i> User</th>
                                                <th><i class="pe-7s-clock"></i> Email</th>
                                                <th><i class="pe-7s-clock"></i> Join Date</th>

                                            </tr></thead>
                                            <tbody>
                                            @foreach($team_technical as $usr)
                                                <tr>
                                                    <td>
                                                        @if($usr->leader >= 1)
                                                            <i class="fa fa-fw text-warning fa-star"></i> Leader
                                                        @else
                                                            <i class="fa fa-fw text-darkpurple fa-user"></i> Member
                                                        @endif
                                                    </td>
                                                    <td>{{ $usr->forename }} {{ $usr->surname }}</td>
                                                    <td>{{ $usr->email }}</td>
                                                    <td>{{ $usr->created_at }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
