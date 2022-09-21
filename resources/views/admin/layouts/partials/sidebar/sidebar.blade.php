{{-- @php
use App\Models\Akun\MenuRole;
use App\Models\Pengaturan\Menu;
@endphp --}}

<style>
    .skin-blue .sidebar-menu>li.active>a {
        border-left-color: #008d4c;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu {
        padding-left: 0;
        margin-right: 0;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li.active>i {
        padding-left: 100px;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li.active {
        background-color: #0071BB;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li a {
        margin-left: 3px;
    }
</style>

<ul class="sidebar-menu" data-widget="tree">
    <li class="{{ Request::is('/') ? 'active' : '' }}">
        <a href="{{ url('/master/') }}">
            <i class="fa fa-building"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="treeview">
        <a href="#">
          <i class="fa fa-gear"></i> <span>Configuration</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('/master/users/role') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/users/role') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Users Type Role</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/users') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/users') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/customer') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/customer') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Create New Customers</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/product') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/product') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Product</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/teritory') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/teritory') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Teritory</span>
                </a>
            </li>
        </ul>
      </li>


    <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Route</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('/master/route/setup') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/route/setup') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Route Setup</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/route/assign-outlet') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/route/assign-outlet') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Route Assign Outlet</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/route/bulk-assignment') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/route/bulk-assignment') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Route Bulk Assignment</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/route/assign-date') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/route/assign-date') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Route Assign Date</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/route/bulk-scheduling') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/route/bulk-scheduling') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Route Bulk Scheduling</span>
                </a>
            </li>
            <li class="{{ Request::is('/master/route/route-calender') ? 'active' : 'teritory' }}">
                <a href="{{ url('/master/route/route-calender') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Route Calender</span>
                </a>
            </li>
        </ul>
      </li>



{{-- ///////////////////////////////////////////////////////////////////////////////////////////////// --}}
    {{-- <li class="{{ Request::is('/customerTeritory') ? 'active' : '' }}">
        <a href="{{ url('/master/customerTeritory') }}">
            <i class="fa fa-circle-o"></i>
            <span>customer to teritory</span>
        </a>
    </li>
    <li class="{{ Request::is('/routeTeritory') ? 'active' : '' }}">
        <a href="{{ url('/master/routeTeritory') }}">
            <i class="fa fa-circle-o"></i>
            <span>route toteritory</span>
        </a>
    </li>
    <li class="{{ Request::is('/customerRoute') ? 'active' : '' }}">
        <a href="{{ url('/master/customerRoute') }}">
            <i class="fa fa-circle-o"></i>
            <span>customer to route</span>
        </a>
    </li>
    <li class="{{ Request::is('/teritory') ? 'active' : '' }}">
        <a href="{{ url('/master/teritory') }}">
            <i class="fa fa-circle-o"></i>
            <span>bulk scheduling</span>
        </a>
    </li> --}}
</ul>

