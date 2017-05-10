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
            'email' => 'required',
            'identity' => 'required',
            'trade' => 'required',
            'province' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名 为必填项',
            'company.required' => '单位 为必填项',
            'job.required' => '职务 为必填项',
            'phone.required' => '手机号码 为必填项',
            'phone.digits' => '手机号码 格式不正确',
            'identity.required' => '身份 为必填项',
            'trade.required' => '行业 为必填项',
            'province.required' => '省份 为必填项',
            'email.required' => '邮箱 为必填项'
        ];
    }
}
