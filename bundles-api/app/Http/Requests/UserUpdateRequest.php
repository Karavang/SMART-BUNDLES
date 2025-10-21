<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'country' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'postcode' => 'nullable|string|max:20',
            'idCode' => 'nullable|string|max:50',
            'birthday' => 'nullable|string|max:10',
            'idPhoto' => 'nullable|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'phones' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:255',
            'home' => 'nullable|string|max:255',
            'interests' => 'nullable|json',
        ];
    }
}
