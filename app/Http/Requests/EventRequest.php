<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'eventName' => 'required|min:5',
            'bandNames' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'portfolio' => 'required',
            'ticketPrice' => 'required',
            'status' => 'required|min:1|max:3',
        ];
    }
}
