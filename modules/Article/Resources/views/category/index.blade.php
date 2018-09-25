@extends('admin::stackadmin.layouts._main')
@section('header')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
@endsection
@section('content')
    @include('admin::stackadmin.components.alert.warning')
    <!-- Both borders end-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">栏目列表</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <button type="button" class="btn mr-1 mb-1 btn-success" data-toggle="modal" data-target="#addCategory"><i class="fa fa-plus"></i>添加栏目</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">栏目列表信息</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th>编号</th>
                                <th>栏目标识</th>
                                <th>栏目名称</th>
                                <th>添加时间</th>
                                <th>修改时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $k => $v)
                                <tr>
                                    <td>{{$v['id']}}</td>
                                    <td>{{$v['name']}}</td>
                                    <td>{{$v['title']}}</td>
                                    <td>{{$v['created_at']}}</td>
                                    <td>{{$v['updated_at']}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{route('role.permission', $v['id'])}}" class="btn btn-success">权限设置</a>
                                            <button type="button" data-toggle="modal" data-target="#editRole{{$v['id']}}" class="btn btn-info">编辑栏目</button>

                                            <button type="button" class="btn btn-danger" onclick="deleteRole({{$v['id']}}, this)">删除栏目</button>
                                            <form action="{{route('role.destroy', $v['id'])}}" method="post" hidden>
                                                @csrf @method('DELETE')
                                            </form>
                                        </div>
                                        @component('admin::stackadmin.components.modal.loginFormModal',
        ['title' => '编辑角色', 'id' => "editRole{$v['id']}", 'method' => 'PUT', 'url' => route('role.update', "{$v['id']}")])
                                            <fieldset class="form-group floating-label-form-group">
                                                <label for="name">角色标识</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{$v['name']}}" placeholder="必须为英文">
                                            </fieldset>
                                            <fieldset class="form-group floating-label-form-group">
                                                <label for="title">角色名称</label>
                                                <input type="text" class="form-control" name="title" id="title" value="{{$v['title']}}" placeholder="请输入角色名称">
                                            </fieldset>
                                        @endcomponent
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Both borders end -->
    @component('admin::stackadmin.components.modal.inputFormModal',
    ['title' => '添加栏目', 'id' => 'addCategory', 'method' => 'POST', 'url' => route('category.store')])
        <fieldset class="form-group floating-label-form-group">
            <label for="title">栏目名称</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="请输入栏目名称">
        </fieldset>
        <fieldset class="form-group floating-label-form-group">
            <label for="name">栏目标识</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="必须为英文">
        </fieldset>
        <fieldset class="form-group floating-label-form-group">
            <label for="pid">父级栏目</label>
            <select class="form-control" id="pid" name="pid">
                <option value="0">顶级栏目</option>
                @foreach($categories as $k => $category)
                <option value="{{$category['id']}}">{{$category['title']}}</option>
                @endforeach
            </select>
        </fieldset>
    @endcomponent
@endsection
@section('vendorjs')
    <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
@endsection
@section('footer')
    <script type="text/javascript">
      function deleteRole(id, bt) {
        if(confirm('确定删除栏目吗？')){
          $(bt).next('form').trigger('submit')
        }
      }
    </script>
    @if(session()->has('success'))
        <script type="text/javascript">
          toastr.info('{{session()->get('success')}}', 'Success!', {positionClass: 'toast-top-center', containerId: 'toast-top-center'});
        </script>
    @endif
    <script src="/app-assets/js/scripts/modal/components-modal.js"></script>
@endsection
