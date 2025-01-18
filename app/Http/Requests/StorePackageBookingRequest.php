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
        'mc_id' => ['required', 'integer'],
        'catering_id' => ['required', 'integer'],
        'mua_id' => ['required', 'integer'],
        'entertainment_id' => ['required', 'integer'],
        'photographie_id' => ['required', 'integer'],
        'decoration_id' => ['required', 'integer'],
        ];
    }
}
