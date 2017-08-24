<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                <img src="../images/branding/slade_white.png" width="174" height="58.5" alt="SladeHQ description">
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ route('adminhome') }}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('adminmembers') }}">
                    <i class="pe-7s-user"></i>
                    <p>Members</p>
                </a>
            </li>
            <li>
                <a href="{{ route('adminminutes') }}">
                    <i class="pe-7s-clock"></i>
                    <p>Minutes</p>
                </a>
            </li>
            <li>
                <a href="{{ route('adminprojects') }}">
                    <i class="pe-7s-box2"></i>
                    <p>Projects</p>
                </a>
            </li>
            <li>
                <a href="{{ route('adminteams') }}">
                    <i class="pe-7s-id"></i>
                    <p>Teams</p>
                </a>
            </li>

            <li class="active active-pro">
                <a href="{{ route('adminprofile') }}">
                    <i>
                        <img class="img-circle" src="https://i0.wp.com/cloud.digitalocean.com/avatars/default22.png?ssl=1" height="30" width="30">
                    </i>
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>
