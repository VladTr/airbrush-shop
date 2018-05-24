@if($menu)
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                    <span class="sr-only">меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{--<a href="" class="navbar-brand">лого</a>--}}
            </div>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="nav navbar-nav" id="menu">
                    @include(env('THEME').'.customMenuItems', ['items'=>$menu->roots()])
                </ul>
            </div>
        </div>
    </div>
@endif
