<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PutRequest extends FormRequest
{
   /*  protected function prepareForValidation()
    {
        $this->merge([
            //'slug' => Str::slug($this->title)
            'slug' => Str($this->title)->slug()
        ]);
    } */

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
            "title"         => "required|min:5|max:50",
            "slug"          => "required|min:5|max:50|unique:posts,slug," . $this->route("post")->id,
            "content"       => "required|min:3",
            "category_id"   => "required",
            "description"   => "required|min:3",
            "posted"        => "required",
            "image"         => "",
        ];
    }
}
