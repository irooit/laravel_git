<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach(\HDModule::getMenus() as $moduleName => $moduleMenu)
                @foreach($moduleMenu as $menuKey => $menuValue)
                    {{--一级菜单--}}
                <li class="navigation-header">
                    <span>{{$menuValue['title']}}</span><i class="ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="{{$menuValue['title']}}"></i>
                </li>
                    @if(isset($menuValue['menus']))
                    @foreach($menuValue['menus'] as $subKey => $sub)
                        {{--二级菜单--}}
                    <li class="nav-item"><a href="{{$sub['url']}}">
                            @isset($sub['icon'])
                                <i class="{{$sub['icon']}}"></i>
                            @endisset
                            <span class="menu-title" data-i18n="">{{$sub['title']}}</span></a>
                        @if(isset($sub['menus']))
                        <ul class="menu-content">
                            @foreach($sub['menus'] as $secSubKey => $secSub)
                            <li
                                @if($secSub['permission'] === Route::currentRouteName())
                                    class="active"
                                @endif
                            >
                                <a class="menu-item" href="{{$secSub['url']}}">{{$secSub['title']}}</a>
                            </li>
                             @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    @endif
                @endforeach
            @endforeach
        </ul>
    </div>
</div>
