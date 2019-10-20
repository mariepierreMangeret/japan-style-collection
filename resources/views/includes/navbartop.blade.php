<div id="header" class="header navbar-default">
    <div class="navbar-header">
        <a href="#" class="navbar-brand"><span class="navbar-logo"></span> <b>{{ config('app.name') }}</b></a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline"></span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Out
                </a>

                <form id="logout-form" action="" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</div>