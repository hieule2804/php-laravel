<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Uppercase;

class CreateValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student_code' => 'required|string|min:6|max:6', // required : bắt buộc phải nhập , validate nhiều thứ
            //thay vì dùng
            'name' => 'required',
            //cta sẽ dùng
            // 'name' => new Uppercase(), // custom  validation
            'class' => 'required',
        ];
    }
}
