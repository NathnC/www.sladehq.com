<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('front.includes.head', ['title' => 'Admin - Home'])
    <body>

    <div class="container third-width pt-25">
        @include('admin.includes.nav')

        <div class="col-md-9 rounded-border-nop dash-header">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="statcard">
                        <div class="col-md-3 pull-left padding-no">
                            <i class="fa fa-3x phpdebugbar-fa-users"></i>
                        </div>
                        <div class="col-md-9 pull-right padding-no stat-line">
                            <h3 class="margin-no text-center">{{ $members }}</h3>
                            <h4 class="margin-no text-center">Members</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="statcard">
                        <div class="col-md-3 pull-left padding-no">
                            <i class="fa fa-3x phpdebugbar-fa-clock-o"></i>
                        </div>
                        <div class="col-md-9 pull-right padding-no stat-line">
                            <h3 class="margin-no text-center">{{ $members }}</h3>
                            <h4 class="margin-no text-center">Minutes Logged</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 ">
                    <div class="statcard">
                        <div class="col-md-3 pull-left padding-no">
                            <i class="fa fa-3x phpdebugbar-fa-archive"></i>
                        </div>
                        <div class="col-md-9 pull-right padding-no stat-line">
                            <h3 class="margin-no text-center">{{ $members }}</h3>
                            <h4 class="margin-no text-center">Projects</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 ">
                    <div class="statcard">
                        <div class="col-md-3 pull-left padding-no">
                            <i class="fa fa-3x fa-book"></i>
                        </div>
                        <div class="col-md-9 pull-right padding-no stat-line">
                            <h3 class="margin-no text-center">{{ $members }}</h3>
                            <h4 class="margin-no text-center">Teams</h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-9 rounded-border">
            <div class="col-md-12 heading-box pb-25">
                <h3 class="text-purple text-left">Projects</h3>
            </div>

            <div class="col-md-12 pt-50">
                <small>Legend:</small><br>
                <div class="col-md-3 bg-success">
                    <span>Active</span>
                </div>
                <div class="col-md-3 bg-warning">
                    <span>Pending</span>
                </div>
                <div class="col-md-3 bg-info">
                    <span>Inactive</span>
                </div>
                <div class="col-md-3 bg-danger">
                    <span>Trashed</span>
                </div>


            </div>
            <div class="col-md-12 pt-50">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Type</th>
                        <th>Minutes Logged</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-success">
                        <th scope="row">1</th>
                        <td>sladehq.com</td>
                        <td>Website - Front&Back</td>
                        <td>345345</td>
                    </tr>
                    <tr class="bg-info">
                        <th scope="row">2</th>
                        <td>confidential</td>
                        <td>Website - Front&Back</td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
    </body>
</html>
