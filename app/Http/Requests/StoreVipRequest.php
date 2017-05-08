<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'company' => 'required',
            'job' => 'required',
            'phone' => 'required|digits:11',
            'province' => 'required',
            'trade' => 'required',
            'identity' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名 不能为空',
            'company.required' => '单位 不能为空',
            'job.required' => '职务 不能为空',
            'phone.required' => '手机号码 不能为空',
            'phone.digits' => '手机号码 格式不正确',
            'province.required' => '省份 不能为空',
            'trade.required' => '行业 不能为空',
            'identity.required' => '身份 不能为空',
        ];
    }
}
