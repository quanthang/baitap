<?php

namespace App\Http\Requests;

use App\Enums\EventStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'eventName' => ['required|min:20'],
            'bandNames' => ['required'],
            'startDate' => ['required|after:today'],
            'endDate' => ['required|after:startDate'],
            'portfolio' => ['required'],
            'ticketPrice' => ['required|min:1'],
            'status' => ['required|min:0|max:3'],
            //
        ];
    }

    public function messages()
    {
        return [
            'eventName.required' => 'Vui lòng nhập thông tin event name',
            'eventName.min' => 'Vui lòng nhập event lớn hơn 20 ký tự',
            'bandNames.required' => 'Vui lòng nhập thông tin band names',
            'startDate.required' => 'Vui lòng nhập ngày bắt đầu event',
            'startDate.after' => 'Ngày bắt đầu phải sau ngày hiện tại',
            'endDate.required' => 'Vui lòng nhập ngày kết thúc event',
            'endDate.after' => 'Ngày kết thúc phải sau ngày bắt đầu',
            'portfolio.required' => 'Vui lòng nhập thông tin port folio',
            'ticketPrice.required' => 'Vui lòng nhập thông tin ticket price',
            'ticketPrice.min' => 'ticket price phải lớn hơn 1',
            'status.required' => 'Vui lòng nhập thông tin status',
            'status.max' => 'Trạng thái tối thiểu là 3',
            'status.min' => 'Trạng thái tối thiểu là 0',
        ];
    }
}
