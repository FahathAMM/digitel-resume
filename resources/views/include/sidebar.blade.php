<div class="nk-sidebar" style="position: fixed">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    @hasanyrole('admin|developer')
                        <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                    @endhasanyrole
                </ul>
            </li>

            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Portfolio</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('Portfolio.skill') }}">Skills</a></li>
                    <li><a href="{{ route('Portfolio.education') }}">Education</a></li>
                    <li><a href="{{ route('Portfolio.experiences') }}">Experiences</a></li>
                    <li><a href="{{ route('Portfolio.projects') }}">Projects</a></li>
                    <li><a href="{{ route('Portfolio.services') }}">Services</a></li>
                    <li><a href="{{ route('Portfolio.about') }}">About Us</a></li>
                    <li><a href="{{ route('Portfolio.contact') }}">Contact</a></li>
                </ul>
            </li>

            @hasanyrole('admin|developer')
                <li class="nav-label">Permissions</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-menu menu-icon"></i><span class="nav-text">Permission</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('user.list') }}" aria-expanded="false">Users Roles</a></li>
                        <li><a href="{{ route('permission.index') }}" aria-expanded="false">User Permissions</a></li>
                    </ul>
                </li>
            @endhasanyrole
        </ul>
    </div>
</div>
