<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class submitCompleteProfile extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'mobile' => 'required|max:50',
            'birth_date' => 'required|date',
            'gender' => 'required|in:male,female',
            'country' => 'required|string|max:60',
            'occupation' => 'required|max:255',
            'pain_id' => 'required|exists:pains,id',
        ];
    }
}
