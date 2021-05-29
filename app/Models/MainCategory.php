<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function related_categories_id_and_name()
    {
        return $this->hasMany('App\Models\Category','main_category_id')->select('name','id');
    }

    public function related_categories()
    {
        return $this->hasMany('App\Models\Category','main_category_id')->with('related_sub_categories')->withCount('related_products');
    }

    public function related_products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function related_products_according_to_size()
    {
        return $this->belongsToMany('App\Models\Product')->with('filter_by_size');
    }
}
