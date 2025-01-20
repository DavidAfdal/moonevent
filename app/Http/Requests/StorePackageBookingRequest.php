<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageBookingRequest extends FormRequest
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
            //
        'venue_id' => [ 'nullable','integer'],
        'mc_id' => ['nullable', 'integer'],
        'catering_id' => ['nullable', 'integer'],
        'mua_id' => ['nullable', 'integer'],
        'entertainment_id' => ['nullable', 'integer'],
        'photographie_id' => ['nullable', 'integer'],
        'decoration_id' => ['nullable', 'integer'],
        ];
    }
}
