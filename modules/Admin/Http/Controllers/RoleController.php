<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\RoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('admin::stackadmin.role.index', compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(RoleRequest $request)
    {
        $create = Role::create(["title" => $request->post('title'), "name" => $request->post('name')]);
        session()->flash('success', '角色添加成功');
        return back();
    }

    /**
     * Show the specified resource.
     * @return Response
     */


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
    }

    /**
     * 更新角色表
     * @param RoleRequest $request
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update(['name' => $request->name, 'title' => $request -> title]);
        session()->flash('success', '角色修改成功');
        return back();
    }

    /*public function update(RoleRequest $request)
    {
        $role = Role::findOrFail($request->route('role'))->fill($request->all())->save();
        session()->flash('success', '角色修改成功');
        return back();
    }*/

    /**
     *
     */
    public function destroy()
    {
    }

    public function permission(Role $role)
    {
        $roles = \HDModule::getPermissionByGuard('admin');
        return view('admin::stackadmin.role.permission', compact('roles', 'role'));
    }

    public function permissionStore(Request $request, Role $role)
    {
        $role->syncPermissions($request->permissions);
        session()->flash('success', '权限修改成功');
        return back();
    }
}
