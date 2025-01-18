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
           'venue_id' => ['string'],
           'mc_id' => ['string', 'required'],
           'catering_id' => ['string', 'required'],
           'mua_id' => ['string', 'required'],
           'entertainment_id' => ['string', 'required'],
           'photography_id' => ['string', 'required'],
           'decorations_idS' => ['string', 'required']
        ];
    }
}
