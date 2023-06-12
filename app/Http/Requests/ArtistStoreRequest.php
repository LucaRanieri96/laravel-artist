<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'artista' => 'required',
            'nazionalita' => 'required',
            'prossimo_concerto' => 'nullable',
            'ultimo_album'=> 'nullable',
            'ultimo_singolo'=> 'nullable',
        ];
    }
}
