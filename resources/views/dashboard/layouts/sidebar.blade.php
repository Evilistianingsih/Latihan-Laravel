<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    My Post
                </a>
            </li>

        </ul>

        @can('admin')
            
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 test-muted">
            <span>Administrator</span>
        </h6>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" aria-current="page" href="/dashboard/users">
                    <span data-feather="user"></span>
                    Users
                </a>
            </li>

        </ul>
        @endcan

    </div>
</nav>