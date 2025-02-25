<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:25',
            'email' => 'required|email|max:25',
            'phone_number' => 'required|string|max:15',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:750',
            // 'terms' => 'nullable|accepted',
            // 'g-recaptcha-response' => 'nullable|captcha',
        ];
    }
}
