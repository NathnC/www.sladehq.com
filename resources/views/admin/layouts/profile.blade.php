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
                            <div class="col-md-2">
                           <span>
                                <img class="img-circle" src="https://i0.wp.com/cloud.digitalocean.com/avatars/default22.png?ssl=1" height="75" width="75">
                            </span>
                            </div>
                            <div class="col-md-9">
                                <h3>Welcome Back, {{ Auth::user()->forename }}.</h3>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                <p>User Details</p>
                                <ul class="pl-0 pt-25" style="list-style: none;">
                                    <li class="fw-100"><b>Name:</b></li>
                                    <li ><b>Email:</b></li>
                                    <li ><b>Join Date:</b></li>
                                    <li ><b>Team:</b></li>
                                    <li ><b>Team Position:</b></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="pl-0 pt-25" style="list-style: none;">
                                    <p>&nbsp;</p>
                                    <li >{{ Auth::user()->forename }} {{ Auth::user()->surname }}</li>
                                    <li >{{ Auth::user()->email }}</li>
                                    <li >{{ Auth::user()->created_at }}</li>
                                    <li >{{ Auth::user()->team->name }}</li>
                                    <li >
                                        @if(Auth::user()->leader > 1)
                                            Team Leader
                                        @else
                                            Member
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-1 col-md-offset-2 pt-50 text-center">
                                <img class="img-circle" src="https://i0.wp.com/cloud.digitalocean.com/avatars/default22.png?ssl=1" height="105" width="105">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 pl-0">
                            <small><i>Updated: {{ Auth::user()->updated_at }}</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="col-md-6 col-md-offset-2 text-center pb-25">
                            <i class="fa text-purple fa-4x fa-coffee"></i>
                        </div>
                        <p>You are a member of the <b class="text-purple">{{ Auth::user()->team->name }}</b> team.</p>
                        <p><b>{{ Auth::user()->team->description }}</b></p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-12">
                            <h4 class="mt-0 mb-0">Your minute logs at a glance.</h4>
                        </div>
                        <div class="col-md-12">
                            <small>Your total minutes logged: {{ $totalMinutes }} minutes</small>
                        </div>

                        <div class="col-md-12">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th><i class="pe-7s-clock"></i> Minutes</th>
                                        <th><i class="pe-7s-pen"></i> Project</th>
                                        <th><i class="pe-7s-user"></i> Description</th>
                                        <th><i class="pe-7s-box1"></i> Date</th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($minutes as $min)
                                        <tr>
                                            <td> {{ $min->minutes }} </td>
                                            <td> {{ $min->project->name }} </td>
                                            <td> {{ $min->description }} </td>
                                            <td> {{ $min->created_at }} </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-12">
                            <h4 class="mt-0 mb-0">Personal Progress.</h4>
                            <small>Your personal progress represents your target for this month, try to hit it!</small>
                        </div>
                        <div class="col-md-12 pt-25">
                            <div class="progress pb-0 mb-0 no-radius">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                                     aria-valuenow="{{ $totalMinutes / 10 }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $totalMinutes / 10 }}%;">
                                    {{ $totalMinutes / 10 }}%
                                </div>
                            </div>
                            <small class="pull-right">{{ $totalMinutes }} minutes / 1000 goal</small>

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
