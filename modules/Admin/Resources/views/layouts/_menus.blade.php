<div class="left-sidebar-scroll">
    <div class="left-sidebar-content">
        <ul class="sidebar-elements">
            @foreach(\HDModule::getMenus() as $menuname => $groups)
            <li class="divider">{{$menuname}}</li>
            @foreach($groups as $submenu)
            <li class="parent">
                <a href="#"><i class="{{$submenu['icon']}}"></i><span>{{$submenu['title']}}</span></a>
                @foreach($submenu['menus'] as $value)
                <ul class="sub-menu">
                    <li>
                        <a href="{{$value['url']}}">{{$value['title']}}</a>
                    </li>
                </ul>
                @endforeach
            </li>
            @endforeach
            @endforeach
        </ul>
    </div>
</div>
