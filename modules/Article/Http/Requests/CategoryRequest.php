<?php

namespace Modules\Article\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $category = $this->route('category');
        $data = $category ? $category->id : null;
        return [
            'name' => 'required|unique:categories,name,'.$data,
            "title" => "required",
            'pid' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "栏目名称不能为空",
            "title.unique" => "栏目名称已经存在",
            "name.required" => "栏目标识不能为空",
            "pid.integer" => "父栏目必须为数字"
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
