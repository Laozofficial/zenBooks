 <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand text-primary" href="/">
          <i class="fa fa-leaf text-primary"></i> Lil Vera Group
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
            @if(Auth::user()->role == 'admin')
                @include('admin.partials.admin-nav')
            @elseif(Auth::user()->role == 'super_admin')
                @include('admin.partials.admin-nav')
            @elseif(Auth::user()->role == 'project_lead')
                @include('admin.partials.projectlead-nav')
            @elseif(Auth::user()->role == 'sales_rep')
                @include('admin.partials.salesrep')
            @endif

               <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('profile')) ? 'active' : '' }}" href="/profile" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-users text-primary"></i>
                    <span class="nav-link-text">Profile</span>
                  </a>
                </li>
            
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