<?php

namespace App;

use App\Traits\ModelScopes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ModelScopes;
    public $table = 'products';
    //protected $fillable = ['name', 'price','slug','user_id','category_id'];
    protected $guarded = [];
   // public $timestamps=false;
    public function category()
    {

        return $this->belongsTo('App\Category');
    }


    public function user()
    {

        return $this->belongsTo('App\User');
    }


    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {

            $model->update([
                'slug' => str_slug("p{$model->id}-{$model->name}")
            ]);

        });
    }



    public function getRouteKeyname()
    {
        return 'slug';
    }

    public function getImageAttribute($image)
    {

        return asset("storage/$image");

    }

      public function  scopeProductall($query){
        return $query->orderBy('created_at', 'asc')->paginate(4);

      }

    /*  public static function created($request){


         return  static::create($request->all());

      }*/


}
