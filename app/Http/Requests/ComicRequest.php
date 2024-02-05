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
            'title' => 'required|unique:comics_models|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|string|max:10',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:30',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique' => 'Il titolo deve essere univoco',
            'title' => 'Il titolo deve essere in forma testuale di massimo 255 caratteri',
            'description' => 'La descrizione deve essere di tipo testuale',
            'thumb' => 'Devi inserire un URL',
            'price' => 'Inserisci un prezzo nel giusto formato',
            'series' => 'Devi inserire del testo di massimo 50 caratteri',
            'sale_date' => 'Devi inserire una data',
            'type' => 'Devi inserire del testo di massimo 30 caratteri',
            'artists' => 'Devi inserire del testo',
            'writers' => 'Devi inserire del testo',
        ];
    }
}
