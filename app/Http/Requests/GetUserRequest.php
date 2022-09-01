<?php

namespace App\Http\Requests;

use App\Models\User;

class GetUserRequest extends FormRequestWrapper
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'first_name' => 'string',
            'last_name' => 'require',
            'user_type' => 'string|in:'
                . User::USER_CUSTOMER . ','
                . User::USER_BABY_SISTER . ','
                . User::USER_ADMIN . ',',
            'address' => 'string'
        ];
    }
}
