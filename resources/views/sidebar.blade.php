<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
    @include('adminlte::partials.common.brand-logo-xl')
    @else
    @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}

    <div class="sidebar">
        <nav class="pt-2 mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu" @if(config('adminlte.sidebar_nav_animation_speed') !=300)
                data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}" @endif
                @if(!config('adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p>User</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link"><i
                            class="fa fa-circle-o"></i> Users List</a></li>
                        <li class="nav-item"><a href="{{ route('users.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create User</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fa fa-key"></i>
                        <p>Role and Permission</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('admin.roles') }}" class="nav-link"><i
                            class="fa fa-list"></i> Role</a></li>
                        <li class="nav-item"><a href="{{ route('admin.permissions') }}" class="nav-link"><i
                            class="fa fa-list"></i>Permission</a></li>
                            <li class="nav-item"><a href="{{ route('admin.assignments') }}" class="nav-link"><i
                            class="fa fa-list"></i>Assign Role</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-image"></i>
                        <p>Artwork</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('artworks.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Artworks List</a></li>
                        <li class="nav-item"><a href="{{ route('artworks.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Artwork</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-handshake"></i>
                        <p>Collaboration</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('collaborations.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Collaborations List</a></li>
                        <li class="nav-item"><a href="{{ route('collaborations.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Collaboration</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p>Group</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('groups.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Groups List</a></li>
                        <li class="nav-item"><a href="{{ route('groups.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Group</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-calendar"></i>
                        <p>Event</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('events.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Events List</a></li>
                        <li class="nav-item"><a href="{{ route('events.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Event</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-comments"></i>
                        <p>Interaction</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('interactions.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Interactions List</a></li>
                        <li class="nav-item"><a href="{{ route('interactions.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Interaction</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-sitemap"></i>
                        <p>Categories</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Categories List</a></li>
                        <li class="nav-item"><a href="{{ route('categories.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Category</a></li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" menu-open>
                    <a href="#" class="nav-link">
                        <i class="fa fa-tags"></i>
                        <p>Tags</p>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ route('tags.index') }}" class="nav-link"><i
                                    class="fa fa-circle-o"></i> Tags List</a></li>
                        <li class="nav-item"><a href="{{ route('tags.create') }}" class="nav-link"><i
                            class="fa fa-plus"></i>Create Tag</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
