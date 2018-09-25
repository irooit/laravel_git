@include('admin::stackadmin.layouts._header')
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('admin::stackadmin.layouts._navbar')
@include('admin::stackadmin.layouts._menu')
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body" id="app">
            @yield('content')
        </div>
    </div>
</div>
@include('admin::stackadmin.layouts._footer')
</body>
</html>
