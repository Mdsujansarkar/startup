<?php
declare(strict_types=1);
namespace App\Http\Requests\web\Podcasts;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'language' => ['required', 'string'],
            'external_url' => ['required', 'url'],
            'feed_url' => ['required', 'url'],
        ];
    }
}
