<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\ModelAdapters\UserAdapter as User;
use Auth;
use App\UIApplication\Factory as UIApplicationFactory;

class SectionRequestDispatcher extends FormRequest
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
        $slug = $this->slug;

        $UIApplication = request()->getUIApplication();

        $section = $UIApplication->getSectionBySlug($slug);

        return [
            'email' => 'required|email|unique:users,email',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Este email ya está en uso',
        ];
    }
}
