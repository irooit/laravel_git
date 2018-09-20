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
            <li class=" nav-item"><a href="#"><i class="ft-user"></i><span class="menu-title" data-i18n="">Users</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="user-profile.html">Users Profile</a>
                    </li>
                    <li><a class="menu-item" href="user-cards.html">Users Cards</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-plus-square"></i><span class="menu-title" data-i18n="">Calender</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="full-calender-basic.html">Full Calender Basic</a>
                    </li>
                    <li><a class="menu-item" href="full-calender-events.html">Full Calender Events</a>
                    </li>
                    <li><a class="menu-item" href="full-calender-advance.html">Full Calender Advance</a>
                    </li>
                    <li><a class="menu-item" href="full-calender-extra.html">Full Calender Extra</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-image"></i><span class="menu-title" data-i18n="">Gallery</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="gallery-grid.html">Gallery Grid</a>
                    </li>
                    <li><a class="menu-item" href="gallery-grid-with-desc.html">Gallery Grid with Desc</a>
                    </li>
                    <li><a class="menu-item" href="gallery-masonry.html">Masonry Gallery</a>
                    </li>
                    <li><a class="menu-item" href="gallery-masonry-with-desc.html">Masonry Gallery with Desc</a>
                    </li>
                    <li><a class="menu-item" href="gallery-hover-effects.html">Hover Effects</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-search"></i><span class="menu-title" data-i18n="">Search</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="search-page.html">Search Page</a>
                    </li>
                    <li><a class="menu-item" href="search-website.html">Search Website</a>
                    </li>
                    <li><a class="menu-item" href="search-images.html">Search Images</a>
                    </li>
                    <li><a class="menu-item" href="search-videos.html">Search Videos</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-unlock"></i><span class="menu-title" data-i18n="">Authentication</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="login-simple.html">Login Simple</a>
                    </li>
                    <li><a class="menu-item" href="login-with-bg.html">Login with Bg</a>
                    </li>
                    <li><a class="menu-item" href="login-with-bg-image.html">Login with Bg Image</a>
                    </li>
                    <li><a class="menu-item" href="register-simple.html">Register Simple</a>
                    </li>
                    <li><a class="menu-item" href="register-with-bg.html">Register with Bg</a>
                    </li>
                    <li><a class="menu-item" href="register-with-bg-image.html">Register with Bg Image</a>
                    </li>
                    <li><a class="menu-item" href="unlock-user.html">Unlock User</a>
                    </li>
                    <li><a class="menu-item" href="recover-password.html">Recover Password</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-alert-triangle"></i><span class="menu-title" data-i18n="">Error</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="error-400.html">Error 400</a>
                    </li>
                    <li><a class="menu-item" href="error-401.html">Error 401</a>
                    </li>
                    <li><a class="menu-item" href="error-403.html">Error 403</a>
                    </li>
                    <li><a class="menu-item" href="error-404.html">Error 404</a>
                    </li>
                    <li><a class="menu-item" href="error-500.html">Error 500</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-watch"></i><span class="menu-title" data-i18n="">Coming Soon</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="coming-soon-flat.html">Flat</a>
                    </li>
                    <li><a class="menu-item" href="coming-soon-bg-image.html">Bg image</a>
                    </li>
                    <li><a class="menu-item" href="coming-soon-bg-video.html">Bg video</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="under-maintenance.html"><i class="ft-cloud-off"></i><span class="menu-title" data-i18n="">Maintenance</span></a>
            </li>
            <li class=" navigation-header">
                <span>UI</span><i class="ft-droplet ft-minus" data-toggle="tooltip" data-placement="right"
                                  data-original-title="UI"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-globe"></i><span class="menu-title" data-i18n="">Content</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="content-grid.html">Grid</a>
                    </li>
                    <li><a class="menu-item" href="content-typography.html">Typography</a>
                    </li>
                    <li><a class="menu-item" href="content-text-utilities.html">Text utilities</a>
                    </li>
                    <li><a class="menu-item" href="content-syntax-highlighter.html">Syntax highlighter</a>
                    </li>
                    <li><a class="menu-item" href="content-helper-classes.html">Helper classes</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-square"></i><span class="menu-title" data-i18n="">Cards</span><span class="badge badge badge-pill badge-success float-right mr-2">Hot</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="card-bootstrap.html">Bootstrap</a>
                    </li>
                    <li><a class="menu-item" href="card-headings.html">Headings</a>
                    </li>
                    <li><a class="menu-item" href="card-options.html">Options</a>
                    </li>
                    <li><a class="menu-item" href="card-actions.html">Action</a>
                    </li>
                    <li><a class="menu-item" href="card-draggable.html">Draggable</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Advance Cards</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="card-statistics.html">Statistics</a>
                    </li>
                    <li><a class="menu-item" href="card-weather.html">Weather</a>
                    </li>
                    <li><a class="menu-item" href="card-charts.html">Charts</a>
                    </li>
                    <li><a class="menu-item" href="card-maps.html">Maps</a>
                    </li>
                    <li><a class="menu-item" href="card-social.html">Social</a>
                    </li>
                    <li><a class="menu-item" href="card-ecommerce.html">E-Commerce</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Color Palette</span><span class="badge badge badge-warning badge-pill float-right mr-2">14</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="color-palette-primary.html">Primary palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-danger.html">Danger palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-success.html">Success palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-warning.html">Warning palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-info.html">Info palette</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="color-palette-red.html">Red palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-pink.html">Pink palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-purple.html">Purple palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-blue.html">Blue palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-cyan.html">Cyan palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-teal.html">Teal palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-yellow.html">Yellow palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-amber.html">Amber palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-blue-grey.html">Blue Grey palette</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-eye"></i><span class="menu-title" data-i18n="">Icons</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="icons-feather.html">Feather</a>
                    </li>
                    <li><a class="menu-item" href="icons-font-awesome.html">Font Awesome</a>
                    </li>
                    <li><a class="menu-item" href="icons-simple-line-icons.html">Simple Line Icons</a>
                    </li>
                    <li><a class="menu-item" href="icons-meteocons.html">Meteocons</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span>Components</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
                                          data-original-title="Components"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-briefcase"></i><span class="menu-title" data-i18n="">Bootstrap Components</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="component-alerts.html">Alerts</a>
                    </li>
                    <li><a class="menu-item" href="component-callout.html">Callout</a>
                    </li>
                    <li><a class="menu-item" href="#">Buttons</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="component-buttons-basic.html">Basic Buttons</a>
                            </li>
                            <li><a class="menu-item" href="component-buttons-extended.html">Extended Buttons</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="component-carousel.html">Carousel</a>
                    </li>
                    <li><a class="menu-item" href="component-collapse.html">Collapse</a>
                    </li>
                    <li><a class="menu-item" href="component-dropdowns.html">Dropdowns</a>
                    </li>
                    <li><a class="menu-item" href="component-list-group.html">List Group</a>
                    </li>
                    <li><a class="menu-item" href="component-modals.html">Modals</a>
                    </li>
                    <li><a class="menu-item" href="component-pagination.html">Pagination</a>
                    </li>
                    <li><a class="menu-item" href="component-navs-component.html">Navs Component</a>
                    </li>
                    <li><a class="menu-item" href="component-tabs-component.html">Tabs Component</a>
                    </li>
                    <li><a class="menu-item" href="component-pills-component.html">Pills Component</a>
                    </li>
                    <li><a class="menu-item" href="component-tooltips.html">Tooltips</a>
                    </li>
                    <li><a class="menu-item" href="component-popovers.html">Popovers</a>
                    </li>
                    <li><a class="menu-item" href="component-badges.html">Badges</a>
                    </li>
                    <li><a class="menu-item" href="component-pill-badges.html">Pill Badges</a>
                    </li>
                    <li><a class="menu-item" href="component-progress.html">Progress</a>
                    </li>
                    <li><a class="menu-item" href="component-media-objects.html">Media Objects</a>
                    </li>
                    <li><a class="menu-item" href="component-scrollable.html">Scrollable</a>
                    </li>
                    <li><a class="menu-item" href="component-spinners.html">Spinners</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-box"></i><span class="menu-title" data-i18n="">Extra Components</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="ex-component-sweet-alerts.html">Sweet Alerts</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-ratings.html">Ratings</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-toastr.html">Toastr</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-noui-slider.html">NoUI Slider</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-knob.html">Knob</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-block-ui.html">Block UI</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-date-time-picker.html">DateTime Picker</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-file-uploader-dropzone.html">File Uploader</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-image-cropper.html">Image Cropper</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Forms</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">Form Elements</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="form-inputs.html">Form Inputs</a>
                            </li>
                            <li><a class="menu-item" href="form-input-groups.html">Input Groups</a>
                            </li>
                            <li><a class="menu-item" href="form-input-grid.html">Input Grid</a>
                            </li>
                            <li><a class="menu-item" href="form-extended-inputs.html">Extended Inputs</a>
                            </li>
                            <li><a class="menu-item" href="form-checkboxes-radios.html">Checkboxes &amp; Radios</a>
                            </li>
                            <li><a class="menu-item" href="form-switch.html">Switch</a>
                            </li>
                            <li><a class="menu-item" href="form-select2.html">Select2</a>
                            </li>
                            <li><a class="menu-item" href="form-tags-input.html">Tags Input</a>
                            </li>
                            <li><a class="menu-item" href="form-validation.html">Validation</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">Form Layouts</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="form-layout-basic.html">Basic Forms</a>
                            </li>
                            <li><a class="menu-item" href="form-layout-horizontal.html">Horizontal Forms</a>
                            </li>
                            <li><a class="menu-item" href="form-layout-hidden-labels.html">Hidden Labels</a>
                            </li>
                            <li><a class="menu-item" href="form-layout-form-actions.html">Form Actions</a>
                            </li>
                            <li><a class="menu-item" href="form-layout-bordered.html">Bordered</a>
                            </li>
                            <li><a class="menu-item" href="form-layout-striped-rows.html">Striped Rows</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="form-dual-listbox.html" data-i18n="nav.form_elements.form_dual_listbox">Dual Listbox</a>
                    </li>
                    <li><a class="menu-item" href="form-wizard.html">Form Wizard</a>
                    </li>
                    <li><a class="menu-item" href="form-repeater.html">Form Repeater</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Tables</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">Bootstrap Tables</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="table-basic.html">Basic Tables</a>
                            </li>
                            <li><a class="menu-item" href="table-border.html">Table Border</a>
                            </li>
                            <li><a class="menu-item" href="table-sizing.html">Table Sizing</a>
                            </li>
                            <li><a class="menu-item" href="table-styling.html">Table Styling</a>
                            </li>
                            <li><a class="menu-item" href="table-components.html">Table Components</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">DataTables</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="dt-basic-initialization.html">Basic Initialisation</a>
                            </li>
                            <li><a class="menu-item" href="dt-advanced-initialization.html">Advanced initialisation</a>
                            </li>
                            <li><a class="menu-item" href="dt-styling.html">Styling</a>
                            </li>
                            <li><a class="menu-item" href="dt-data-sources.html">Data Sources</a>
                            </li>
                            <li><a class="menu-item" href="dt-api.html">API</a>
                            </li>
                            <li><a class="menu-item" href="#" data-i18n="nav.datatable_extensions.main">DataTables Ext.</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="dt-extensions-autofill.html" data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</a>
                                    </li>
                                    <li><a class="menu-item" href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="dt-extensions-buttons-basic.html"
                                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic Buttons</a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-html-5-data-export.html"
                                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML 5 Data Export</a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-flash-data-export.html"
                                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash Data Export</a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-column-visibility.html"
                                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column Visibility</a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-print.html"
                                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-api.html"
                                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-column-reorder.html"
                                           data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column Reorder</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-fixed-columns.html"
                                           data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed Columns</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-key-table.html" data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-row-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row Reorder</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-select.html" data-i18n="nav.datatable_extensions.dt_extensions_select">Select</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-fix-header.html" data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix Header</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-responsive.html" data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-column-visibility.html"
                                           data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="table-jsgrid.html">jsGrid</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">Echarts</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="echarts-line-area-charts.html">Line &amp; Area charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-bar-column-charts.html">Bar &amp; Column charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-pie-doughnut-charts.html">Pie &amp; Doughnut charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-scatter-charts.html">Scatter charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-radar-chord-charts.html">Radar &amp; Chord charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-funnel-gauges-charts.html">Funnel &amp; Gauges charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-combination-charts.html">Combination charts</a>
                            </li>
                            <li><a class="menu-item" href="echarts-advance-charts.html">Advance charts</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">Chartjs</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="chartjs-line-charts.html">Line charts</a>
                            </li>
                            <li><a class="menu-item" href="chartjs-bar-charts.html">Bar charts</a>
                            </li>
                            <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html">Pie &amp; Doughnut charts</a>
                            </li>
                            <li><a class="menu-item" href="chartjs-scatter-charts.html">Scatter charts</a>
                            </li>
                            <li><a class="menu-item" href="chartjs-polar-radar-charts.html">Polar &amp; Radar charts</a>
                            </li>
                            <li><a class="menu-item" href="chartjs-advance-charts.html">Advance charts</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="morris-charts.html">Morris Charts</a>
                    </li>
                    <li><a class="menu-item" href="#">Flot Charts</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="flot-line-charts.html">Line charts</a>
                            </li>
                            <li><a class="menu-item" href="flot-bar-charts.html">Bar charts</a>
                            </li>
                            <li><a class="menu-item" href="flot-pie-charts.html">Pie charts</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">Chartist</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="chartist-line-charts.html">Line charts</a>
                            </li>
                            <li><a class="menu-item" href="chartist-bar-charts.html">Bar charts</a>
                            </li>
                            <li><a class="menu-item" href="chartist-pie-charts.html">Pie charts</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-map"></i><span class="menu-title" data-i18n="">Maps</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">google Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="gmaps-basic-maps.html">Maps</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-services.html">Services</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-overlays.html">Overlays</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-routes.html">Routes</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-utils.html">Utils</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="vector-maps-jvector.html">jVector Map</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span>Others</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
                                      data-original-title="Others"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-align-left"></i><span class="menu-title" data-i18n="">Menu levels</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">Second level</a>
                    </li>
                    <li><a class="menu-item" href="#">Second level child</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">Third level</a>
                            </li>
                            <li><a class="menu-item" href="#">Third level child</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#">Fourth level</a>
                                    </li>
                                    <li><a class="menu-item" href="#">Fourth level</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="changelog.html"><i class="ft-file"></i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge badge-pill badge-info float-right">3.0</span></a>
            </li>
            <li class="disabled nav-item"><a href="#"><i class="ft-slash"></i><span class="menu-title" data-i18n="">Disabled Menu</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation"><i class="ft-folder"></i>
                    <span class="menu-title" data-i18n="">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
