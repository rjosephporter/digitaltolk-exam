<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
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
     *
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'from_language_id' => 'required',
            'immediate' => 'required|in:yes,no',
            'due_date' => 'sometimes|required|date',
            'due_time' => 'sometimes|required|',
            'customer_phone_type' => 'required|in:yes,no',
            'customer_physical_type' => 'required|in:yes,no',
            'duration' => 'sometimes|required',
            // All other field validations should be added here..
            
        ];
    }
}