<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    // protected $stopOnFirstFailure = true;


    /**
     * The route that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirectRoute = 'dashboard.post.create';


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //TODO: check apakah user sudah login apa belum
        //TODO: apakah user_id nya ada di database
        return true; //temporary to authorize store post request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'category_id' => ['required'],
            'title' => [
                'required',
                'max:255'
            ],
            'slug' => [
                'required',
                'max:255',
                'unique:posts',
                'regex:/^[a-z0-9-]+$/',
            ],
            'excerpt' => ['max:255'],
            'content' => ['required'],
            'read_time_minutes' => [
                'required',
                'numeric',
                'min:1',
                'max:99',
            ],
        ];
    }


    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'category_id' => 'category',
            'read_time_minutes' => 'read time',
        ];
    }
}
