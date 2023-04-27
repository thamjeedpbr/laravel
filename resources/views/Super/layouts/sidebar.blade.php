<aside class="app-sidebar left-menu2">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="../../assets/images/brand/favicon.ico" alt="user-img" class="avatar avatar-lg brround">
            </div>
            <div class="user-info">
                <h2>{{ Auth::user()->name }}</h2>
                <span>{{  Auth::user()->roles->pluck('name')[0] }}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        @can('dashboard')
        <li>
            <a class="side-menu__item {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i
                    class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
    @endcan
        @can('calender.view')
            <li>
                <a class="side-menu__item {{ request()->is('calender') ? 'active' : '' }}" href="{{ route('calender') }}"><i
                        class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Calender</span></a>
            </li>
        @endcan

        @can('customer.view')
            <li>
                <a class="side-menu__item {{ request()->is('customer') ? 'active' : '' }}"
                    href="{{ route('customer.index') }}"><i class="side-menu__icon fe fe-box"></i><span
                        class="side-menu__label">Customers</span></a>
            </li>
        @endcan

        @can('appointment.view')
            <li>
                <a class="side-menu__item {{ request()->is('appointment') ? 'active' : '' }}"
                    href="{{ route('appointment.index') }}"><i class="side-menu__icon fe fe-box"></i><span
                        class="side-menu__label">Appointment</span></a>
            </li>
        @endcan

        @can('enquiry.view')
            <li>
                <a class="side-menu__item {{ request()->is('enquiry') ? 'active' : '' }}"
                    href="{{ route('enquiry.index') }}"><i class="side-menu__icon fe fe-box"></i><span
                        class="side-menu__label">Enquiry</span></a>
            </li>
        @endcan

        @can('data')
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon  fe fe-airplay"></i><span class="side-menu__label">Datas</span><i
                        class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item active" href="{{ route('brand.index') }}">Brand</a> </li>
                    <li><a class="slide-item" href="{{ route('devicetype.index') }}">Device Type</a> </li>
                    {{-- <li><a class="menu__item" href="{{ route('service_type.index') }}">Service Type</a> </li> --}}
                    <li><a class="slide-item" href="{{ route('AppointmentType.index') }}">Appointment Type</a> </li>
                    <li><a class="slide-item" href="{{ route('device.index') }}">Model</a> </li>
                    <li><a class="slide-item" href="{{ route('staff.index') }}">Staff</a> </li>
                    <li><a class="slide-item" href="{{ route('issue.index') }}">Issues</a> </li>
                    <li><a class="slide-item" href="{{ route('pricing.index') }}">Pricing</a> </li>
                    <li><a class="slide-item" href="{{ route('EnquiryLabel.index') }}">Enquiry Label</a> </li>
                    <li><a class="slide-item" href="{{ route('note.index') }}">Notes</a> </li>
                    <li><a class="slide-item" href="{{ route('user.index') }}">User</a> </li>
                </ul>
            </li>
        @endcan
    </ul>
</aside>
