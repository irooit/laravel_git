@extends('admin::stackadmin.layouts._main')
@section('header')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$role->title}}权限设置</h5>
        </div>
        <div class="card-content">
        @foreach($roles as $k => $module)
            @foreach($module['rules'] as $rk => $rule)
            <div class="card-body">
                <h5>{{$rule['group']}}</h5>
                @foreach($rule['permissions'] as $pk => $permission)
                    <div class="d-inline-block custom-control custom-checkbox mr-1">
                    <input type="checkbox" class="checkbox" name="colorCheck" id="{{$permission['name']}}">
            <label class="checkbox" for="{{$permission['name']}}">{{$permission['title']}}</label>
        </div>
                @endforeach
            </div>
            @endforeach
        @endforeach
        </div>
    </div>
    {{--<div class="card">
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
                <p class="card-text">角色列表信息</p>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>角色标识</th>
                        <th>角色名称</th>
                        <th>添加时间</th>
                        <th>修改时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $k => $v)
                        <tr>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['name']}}</td>
                            <td>{{$v['title']}}</td>
                            <td>{{$v['created_at']}}</td>
                            <td>{{$v['updated_at']}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{route('role.permission', $v['id'])}}" class="btn btn-success">权限设置</a>
                                    <button type="button" data-toggle="modal" data-target="#editRole{{$v['id']}}" class="btn btn-info">编辑角色</button>

                                    <button type="button" class="btn btn-danger">删除角色</button>
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
    </div>--}}
@endsection
@section('vendorjs')
@endsection
@section('footer')
    @if(session()->has('success'))
        <script type="text/javascript">
        </script>
    @endif

@endsection
