<?php

namespace App\Http\Requests;


class StorePackageRequest extends BaseRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'nullable|string',
            'age' => 'nullable|integer|min:0',
            'appointment_at' => 'nullable|date',
            'number_of_persons' => 'nullable|integer|min:1',
            'beneficiary' => 'required|array',
            'beneficiary.*.name' => 'nullable|string|max:255',
            'beneficiary.*.age' => 'nullable|integer|min:0',
            'beneficiary.*.gender' => 'nullable|integer|in:1,2',

        ];
    }
}
