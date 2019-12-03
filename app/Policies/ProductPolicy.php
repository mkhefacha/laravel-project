<?php

namespace App\Policies;

use App\User;
use App\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;


   /* public function Before(User $user)
    {
        if ($user->id===1) return true;

    }*/

    public function viewAny(User $user)
    {


    }


    public function view(User $user, Product $product)
    {

    }


    public function create(User $user)
    {

    }


    public function update(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }


    public function delete(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }


    public function restore(User $user, Product $product)
    {

    }


    public function forceDelete(User $user, Product $product)
    {

    }
}
