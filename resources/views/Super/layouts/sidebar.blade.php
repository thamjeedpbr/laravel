<aside class="app-sidebar left-menu2">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="../../assets/images/brand/favicon.ico" alt="user-img" class="avatar avatar-lg brround">
            </div>
            <div class="user-info">
                <h2>{{ Auth::user()->name }}</h2>
                <span>{{ Auth::user()->type }}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li>
            <a class="side-menu__item {{ request()->is('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}"><i class="side-menu__icon fe fe-box"></i><span
                    class="side-menu__label">Dashboard</span></a>
        </li>

        <li>
            <a class="side-menu__item {{ request()->is('candidate') ? 'active' : '' }}"
                href="{{ route('candidate.index') }}"><i class="side-menu__icon fe fe-box"></i><span
                    class="side-menu__label">Candidate</span></a>
        </li>

    </ul>
</aside>
