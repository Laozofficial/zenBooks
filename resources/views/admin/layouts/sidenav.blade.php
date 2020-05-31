 <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand text-primary" href="/">
          <i class="fa fa-leaf text-primary"></i> Zaff
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav active">
            <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('admin/index')) ? 'active' : '' }}" href="{{ url('/admin/index') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-tachometer-alt text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                </li>
                  <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('admin/books')) ? 'active' : '' }}" href="{{ url('/admin/books') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-clock text-primary"></i>
                    <span class="nav-link-text">Books</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('admin/payments')) ? 'active' : '' }}" href="{{ url('/admin/payments') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-columns text-primary"></i>
                    <span class="nav-link-text">Payments</span>
                  </a>
                </li>
              <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('admin/profile')) ? 'active' : '' }}" href="{{ url('/admin/profile') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-user text-primary"></i>
                    <span class="nav-link-text">Admin Profile</span>
                  </a>
                </li>
                 {{--   <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('admin/transactions')) ? 'active' : '' }}" href="{{ url('/admin/transactions') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-money-check-alt text-primary"></i>
                    <span class="nav-link-text">Transactions</span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin/users')) ? 'active' : '' }}" href="{{ url('/admin/users') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-users text-primary"></i>
                    <span class="nav-link-text">Users</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin/bot')) ? 'active' : '' }}" href="{{ url('/admin/bot') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-users text-primary"></i>
                    <span class="nav-link-text">Bots</span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin/results')) ? 'active' : '' }}" href="{{ url('/admin/results') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-poll text-primary"></i>
                    <span class="nav-link-text">Results</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin/forum-tag')) ? 'active' : '' }}" href="{{ url('/admin/forum-tag') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-poll text-primary"></i>
                    <span class="nav-link-text">Forum Tags</span>
                  </a>
                </li>  --}}
                
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          {{--  <h6 class="navbar-heading p-0 text-muted">Documentation</h6>/  --}}
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <input type="hidden">
                <button type="submit" style="background-color: transparent;border: none;padding:0; margin:0">
                  <a class="nav-link" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="ni ni-user-run text-primary"></i> 
                    <span class="nav-link-text">Logout</span>
                  </a>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>