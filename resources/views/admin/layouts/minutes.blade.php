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
                            <form method="POST">
                                {{ csrf_field() }}

                                <div class="col-md-12 pb-25">
                                        <h4 class="title"><i class="pe-7s-pen"></i> New Time</h4>
                                        <p class="category">Log your new time in minutes here.</p>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Time (Minutes)</label>
                                        <input type="number" class="form-control" name="minutes" id="minutes"  placeholder="60" required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Project ID</label>
                                        <input type="number" class="form-control" name="project" id="project" placeholder="1" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="desc" id="desc" placeholder="Made a few changes..." required>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-fill mt-25">
                                            <i class="fa fa-save"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                        <div class="card">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title"><i class="pe-7s-bookmarks"></i> Minutes Logging Directory</h4>
                                    <p class="category">Logs of minute logs by members, <b>{{ $totalMinutes }} minutes in total.</b></p>
                                </div>
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th><i class="pe-7s-clock"></i> Minutes</th>
                                        <th><i class="pe-7s-pen"></i> Description</th>
                                        <th><i class="pe-7s-user"></i> User</th>
                                        <th><i class="pe-7s-box1"></i> Project</th>
                                        <th><i class="pe-7s-browser"></i> Date</th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($minutes as $min)
                                        <tr>
                                            <td>{{ $min->minutes }}</td>
                                            <td>{{ $min->description }}</td>
                                            <td>{{ $min->user->forename }} {{ $min->user->surname }}</td>
                                            <td>{{ $min->project->name }}</td>
                                            <td>{{ $min->created_at }}</td>
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
