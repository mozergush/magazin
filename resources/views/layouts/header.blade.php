<header class="header">
    <div class="header-liks">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-xs-1 hidden-lg">
                            <button class="menu-button buttons" onmouseout="querySelector('img').src='{!! asset('images/icons/MenuStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/MenuHover.ico') !!}'"><img src="{!! asset('images/icons/MenuStandart.ico') !!}"></button>
                        </div>
                        <div class="logo col-lg-3 col-sm-10 col-xs-10">
                            SPRINT <span class="logo-color">SERVICE</span>
                        </div>
                        <div class="menu ">
                            <a href="{{ url('/') }}" ><div class="col-lg-2 menu-item @if( $activemenu == 'main') active @endif ">Главная</div></a>
                            <a href="{{ url('/shop') }}" ><div class="col-lg-2 menu-item @if( ($activemenu == 'shop') ) active @endif ">Товары</div></a>
                            <a href="{{ url('/about') }}" ><div class="col-lg-2 menu-item @if( ($activemenu == 'about') ) active @endif ">О нас</div></a>
                            @if (Auth::guest())
                                <a href="{{ url('/login') }}" ><div class="menu-item  hidden-lg">Вход</div></a>
                            @else
                                <a href="{{ url('/cabinet') }}" ><div class="menu-item hidden-lg ">Мой заказ (<span class="count_order"></span>)</div></a>
                                <a href="{{ url('/logout') }}" ><div class="menu-item hidden-lg">Выход</div></a>
                            @endif
                        </div>
                        @if (Auth::guest())
                            <a href="{{ url('/login') }}" >
                                <div class="auth" onmouseout="querySelector('img').src='{!! asset('images/icons/AuthStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/AuthHover.ico') !!}'">
                                    Вход
                                    <img src="{!! asset('images/icons/AuthStandart.ico') !!}">
                                </div>
                            </a>
                        @else
                            <a href="{{ url('/logout') }}" >
                                <div class="auth" >
                                    Выход
                                </div>
                            </a>
                            <a href="{{ url('/cabinet') }}" >
                                <div class="auth">
                                    Мой заказ (<span class="count_order"></span>)
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>