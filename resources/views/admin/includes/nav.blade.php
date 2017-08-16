<div class="col-md-3">
    <div class="col-md-12 pb-25 main-sidebar-header">
        <a class="btn btn-circle-sm bg-white"><i class="fa fa-fw fa-spin fa-cog"></i> </a>
        <span>Logged in as {{ Auth::user()->name }}</span>
    </div>
    <div class="col-md-12 pt-10 main-sidebar">
        <ul>
            <li>
                <i class="fa fa-fw fa-home"></i><a>Home</a>
            </li>
            <li>
                <i class="fa fa-fw phpdebugbar-fa-bar-chart"></i><a>Time</a>
            </li>
            <li>
                <i class="fa fa-fw phpdebugbar-fa-users"></i><a href="members">Members</a>
            </li>
            <li>
                <i class="fa fa-fw phpdebugbar-fa-archive"></i><a>Projects</a>
            </li>
            <li>
                <i class="fa fa-fw phpdebugbar-fa-comment"></i><a>Suggestions</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12 pt-25 main-sidebar">
        <ul>
            <li>
                <i class="fa fa-fw fa-sign-out"></i><a href="logout">Logout</a>
            </li>
            <li>
                <i class="fa fa-fw fa-desktop"></i><a href="/">Main Site</a>
            </li>
        </ul>
    </div>
</div>
