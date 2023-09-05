<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">Maindza</span>
        </a>

        <ul class="sidebar-nav">
            {{-- <li class="sidebar-header">
                Pages
            </li> --}}

            <li class="sidebar-item {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->segment(2) == 'courses' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('courses.index') }}">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Courses</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->segment(2) == 'teachers' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('teachers.index') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Teachers</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->segment(2) == 'events' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('events.index') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Events</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->segment(2) == 'shop' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('shop.index') }}">
                    <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Shop</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->segment(2) == 'gallery' ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('gallery.index') }}">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>


        </ul>
        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <div class="d-grid">
                    <a href="/" class="btn btn-primary">go to Home</a>
                </div>
            </div>
        </div>


    </div>
</nav>
