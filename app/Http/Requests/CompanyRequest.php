<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Company;

class CompanyRequest extends FormRequest
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
        if (request()->routeIs('employees.update')) {
            $email = null;
        }
        else {
            $email = Rule::unique(Company::class);
        }
        return [
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['image','mimes:jpg,png,jpeg', 
            // 'dimensions:min_width=50,min_height=50,max_width=1000,max_height=1000', 
            'max:2048'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', $email],
            'description' => ['string', 'max:10000']
        ];
    }
}
