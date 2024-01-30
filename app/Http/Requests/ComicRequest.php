<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'thumb' =>'required',
            'price' =>'required',
            'series' =>'required|min:3',
            'sale_date' => 'required|min:3|max:70',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Nel titolo non possono esserci meno di 3 caratteri',
            'title.max' => 'Nel titolo il numero massimo di caratteri è 200',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required'=> 'La serie è obbligatoria',
            'series.min' => 'Nella serie non possono esserci meno di 3 caratteri',
            'sale_date.required' => 'La data è obbligatoria',
            'sale_date.min' => 'Nella data non possono esserci meno 3 caratteri',
            'sale_date.max' => 'Nella data il numero massimo di caratteri 70',
            'type.required' => 'Il tipo è obbligatorio'
        ];
    }
}
