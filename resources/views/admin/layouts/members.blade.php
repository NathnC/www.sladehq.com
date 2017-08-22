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
                            <div class="header">
                                <h4 class="title">Team Members Directory</h4>
                                <p class="category">All active, inactive and pending members of sladehq, {{ count($members) }} in total</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr><th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Join Date</th>
                                        <th>Team Role</th>
                                        <th>Actions</th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($members as $mem)
                                        <tr>
                                            <td>{{ $mem->id }}</td>
                                            <td>{{ $mem->forename }} {{ $mem->surname }}</td>
                                            <td>{{ $mem->email }}</td>
                                            <td>{{ $mem->created_at }}</td>
                                            <td>
                                                @if($mem->leader == 2)
                                                    <i class="fa fa-star text-warning"></i> Global Leader
                                                @elseif($mem->leader == 1)
                                                    <i class="fa fa-star text-darkpurple"></i> Team Leader
                                                @else
                                                    <i class="fa fa-user text-darkpurple"></i> Member
                                                @endif
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-info btn-fill btn-square">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
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
