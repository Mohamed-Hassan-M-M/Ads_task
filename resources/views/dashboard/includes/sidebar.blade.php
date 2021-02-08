<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset("assets/admin/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MHMM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-3" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">{{auth('admin')->user()->name}}</a>
                <div class="icon text-center">
                    <a href="{{route('admin.logout')}}" class="d-block text-danger">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route("admin.advertisement.index")}}" class="nav-link @if(\Illuminate\Support\Facades\Request::is('admin/ads*')) active @endif ">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>
                            Advertisement
                            <span class="badge badge-info right">{{\App\Models\Ads::count()}}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.location.index")}}" class="nav-link @if(\Illuminate\Support\Facades\Request::is('admin/location*')) active @endif ">
                        <i class="nav-icon fas fa-location-arrow"></i>
                        <p>
                            Location
                            <span class="badge badge-info right">{{\App\Models\Location::count()}}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.customer.index")}}" class="nav-link @if(\Illuminate\Support\Facades\Request::is('admin/customer*')) active @endif ">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Customer
                            <span class="badge badge-info right">{{\App\Models\User::count()}}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
