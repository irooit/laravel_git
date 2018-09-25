@extends('admin::stackadmin.layouts._main')
@section('header')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$role->title}}权限设置</h5>
        </div>
        <form action="{{route('role.permission.store', $role->id)}}" method="POST">
            @csrf
            <div class="card-content">
            @foreach($roles as $k => $module)
                @foreach($module['rules'] as $rk => $rule)
                <div class="card-body">
                    <h5>{{$rule['group']}}</h5>
                    @foreach($rule['permissions'] as $pk => $permission)
                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                        <input type="checkbox" class="checkbox" name="permissions[]"
                               {{$role->hasPermissionTo($permission['name']) ? 'checked=' : ''}}
                               id="{{$permission['name']}}" value="{{$permission['name']}}">
                <label class="checkbox" for="{{$permission['name']}}">{{$permission['title']}}</label>
            </div>
                    @endforeach
                </div>
                @endforeach
            @endforeach
            </div>
            <div class="form-actions center">
                <button type="submit" class="btn btn-primary mr-4">
                    <i class="fa fa-check-square-o"></i> 保存
                </button>
                <button type="button" class="btn btn-warning">
                    <i class="ft-x"></i> 取消
                </button>
            </div>
        </form>
    </div>
@endsection
@section('vendorjs')
    <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
@endsection
@section('footer')
    @if(session()->has('success'))
        <script type="text/javascript">
          toastr.info('{{session()->get('success')}}', 'Success!', {positionClass: 'toast-top-center', containerId: 'toast-top-center'});
        </script>
    @endif

@endsection
