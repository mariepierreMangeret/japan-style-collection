<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <small></small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub{{\Route::currentRouteName() == "actualities.create" ? ' active' : '' }} ">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fas fa-lg fa-fw m-r-10 fa-users"></i>
                    <span>Actualités</span>
                </a>
                <ul class="sub-menu">
                    <li{!!\Route::currentRouteName() == "actualities.index" ? ' class="active"' : '' !!}><a href="{{ route('actualities.index') }}">List</a></li>
                    <li{!!\Route::currentRouteName() == "actualities.create" ? ' class="active"' : '' !!}><a href="{{ url('admin/actualities/create') }}">Create</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>