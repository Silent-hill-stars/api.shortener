<?php


namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class Validate extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules():array
    {
        return [
            'link' => ['url'],
            'domain' => ['url']
        ];
    }
}
