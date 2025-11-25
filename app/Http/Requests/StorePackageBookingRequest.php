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
            'venue_id' => ['nullable', 'integer', 'exists:venues,id'],
            'mc_id' => ['nullable', 'integer', 'exists:m_c_s,id'],
            'catering_id' => ['nullable', 'integer', 'exists:caterings,id'],
            'mua_id' => ['nullable', 'integer', 'exists:m_u_a_s,id'],
            'entertainment_id' => ['nullable', 'integer', 'exists:entertainments,id'],
            'photographie_id' => ['nullable', 'integer', 'exists:photographies,id'],
            'decoration_id' => ['nullable', 'integer', 'exists:decorations,id'],
            'username' => ["required", "string"],
            'phone_number' => ["required", 'string'],
            // 🔹 Field booking
            'booking_date' => ['required', 'date', 'after_or_equal:today'],
            'booking_time' => ['required',],
        ];
    }
}
