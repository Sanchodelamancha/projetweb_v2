
<div class="bg-black border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
        <ul class="navbar-nav mr-auto">
            @guest
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link" href="{{ url('/home') }}">
                    Home
                </a>
            </li>
            @else
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link" href="{{ url('/home') }}">
                    {!! trans('titles.adminDashboard') !!}
                </a>
            </li>

            @endguest
            @role('admin')
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ (Request::is('roles') || Request::is('permissions')) ? 'active' : null }}" href="{{ route('laravelroles::roles.index') }}">
                    {!! trans('titles.laravelroles') !!}
                </a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/routes') }}">
                    {!! trans('titles.adminRoutes') !!}
                </a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ Request::is('blocker') ? 'active' : null }}" href="{{ route('laravelblocker::blocker.index') }}">
                    {!! trans('titles.laravelBlocker') !!}
                </a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">
                    {!! trans('titles.adminUserList') !!}
                </a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ Request::is('themes','themes/create') ? 'active' : null }}" href="{{ url('/themes') }}">
                    {!! trans('titles.adminThemesList') !!}
                </a>
            </li>
            @endrole
            @role('supervisor')
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">
                    {!! trans('titles.adminUserList') !!}
                </a>
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <a class="nav-link {{ Request::is('themes','themes/create') ? 'active' : null }}" href="{{ url('/themes') }}">
                    {!! trans('titles.adminThemesList') !!}
                </a>
            </li>
            @endrole
        </ul>
    </div>
</div>
