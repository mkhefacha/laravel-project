<?php

namespace App\Http\Requests;
use App\User;
use App\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth;
class FieldRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'image'=>'required'



        ];
    }

    public function messages()
    {
        return [


            'name.required' => "le nom de produit doit etre  obligatoire",
            'price.required' => "le price de produit est obligatoire",
            'price.numeric' => "le prix doit etre un entier",
            'category_id' => "le category doit etre obligatoire"
        ];
    }

    public function created($request)
    {

        return Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'category_id' => $request->category_id,
        'user_id' => auth()->id(),
        'image'=>$request->image->store('uplod','public')
    ]);

    }
    public function storeImage($product)
    {
        if (request()->has('image')) {
            $product->update([
                'image' => request()->image->store('uplod', 'public')
            ]);

        }

    }

}
