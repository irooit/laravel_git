<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $role = $this->route('role');
        $param = $role ? $role->id: null;
        return [
            "name" => "required|unique:roles,name,".$param,
            "title" => "required|unique:roles,title,".$param
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "角色名称不能为空",
            "title.unique" => "角色名称已经存在",
            "name.required" => "角色标识不能为空",
            "name.unique" => "角色标识已经存在"
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
