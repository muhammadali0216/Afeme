  <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/dashboard"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">{{ auth()->user()->name}}</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
            <a href="{{route('admin.abouts.index')}}" class="nav-link"><i data-feather="monitor"></i><span>About</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="briefcase"></i><span>Permission</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.roles.index')}}">Roles</a></li>
                <li><a class="nav-link" href="{{route('admin.users.index')}}">User</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Dashboard</span></a></li>
            <li class="menu-header">Otika</li>
          </ul>
        </aside>
      </div>
