<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">BMI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard') }}"
                   class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                       class="nav-link @if(request()->routeIs('dashboard')) active @endif ">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}"
                       class="nav-link @if(request()->routeIs('profile.edit')) active @endif ">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('booking_list') }}"
                       class="nav-link @if(request()->routeIs('booking_list')) active @endif ">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Buyurtmalar</p>
                    </a>
                </li>
                @if(auth()->id() == 1)
                    <li class="nav-item">
                        <a href="{{route('admin.health_centers.index')}}"
                           class="nav-link @if(request()->routeIs('admin.health_centers.index')) active @endif">
                            <i class="fa fa-user nav-icon"></i>
                            <p>Markazlar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.services.index')}}"
                           class="nav-link @if(request()->routeIs('admin.services.index')) active @endif">
                            <i class="fa fa-user nav-icon"></i>
                            <p>Xizmatlar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.doctors.index')}}"
                           class="nav-link @if(request()->routeIs('admin.doctors.index')) active @endif">
                            <i class="fa fa-user nav-icon"></i>
                            <p>Shifokorlar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.features.index')}}"
                           class="nav-link @if(request()->routeIs('admin.features.index')) active @endif">
                            <i class="fa fa-user nav-icon"></i>
                            <p>Xususiyatlar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('messages.index')}}"
                           class="nav-link @if(request()->routeIs('messages.index')) active @endif">
                            <i class="fa fa-mail-bulk nav-icon"></i>
                            <p>Xabarlar</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a href="{{ route('logout') }}"
                           class="nav-link" onclick="event.preventDefault();
                           this.closest('form').submit();">
                            <i class="fa fa-sign-out-alt nav-icon"></i>
                            <p>Chiqish</p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
