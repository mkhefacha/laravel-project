<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $table = 'categories';
    protected $fillable = ['name'];


    public function products()
    {

        return $this->hasMany('App\Product');
    }


    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {

            $category->products->each->delete();
        });
    }

    /*public function scopePlucked($query)
    {

        return $query->pluck('name', 'id');
    }*/

    public static function Plucked()
    {
        return static::pluck('name', 'id');

    }


}
