@extends('admin::stackadmin.layouts._main')
@section('header')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/jsgrid/jsgrid.min.css">
@endsection
@section('content')
    <!-- Both borders end-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">角色管理</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <button type="button" class="btn mr-1 mb-1 btn-success" data-toggle="modal" data-target="#addRole"><i class="fa fa-plus"></i>添加角色</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Example of table having both column & row borders. Add <code>.table-bordered</code>class with <code>.table</code> for both borders table.</p>
                        <p>{{Route::currentRouteName()}}</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Both borders end -->
    @component('admin::stackadmin.components.modal.loginFormModal',
    ['title' => '添加角色', 'id' => 'addRole', 'method' => 'PUT', 'url' => route('role.store')])
        <fieldset class="form-group floating-label-form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" id="email" placeholder="Email Address">
        </fieldset>
        <fieldset class="form-group floating-label-form-group">
            <label for="title">Password</label>
            <input type="password" class="form-control" id="title" placeholder="Password">
        </fieldset>
        <fieldset class="form-group floating-label-form-group">
            <label for="title1">Description</label>
            <textarea class="form-control" id="title1" rows="3" placeholder="Description"></textarea>
        </fieldset>
    @endcomponent
@endsection
@section('footer')
    $("#jsgrid").jsGrid();
    <script src="/app-assets/vendors/js/tables/jsgrid/jsgrid.min.js"></script>
    <script src="/app-assets/vendors/js/tables/jsgrid/griddata.js"></script>
    <script src="/app-assets/js/scripts/modal/components-modal.js"></script>
@endsection
