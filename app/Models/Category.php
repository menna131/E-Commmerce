<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // protected $table=categorys;
    protected $fillable = [
        'name_en','name_ar','photo', 'subCategory_num', 'created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at'
    ];

    public function subcategory(){
        return $this->hasMany('App\Models\Subcategory','Category_id');
    }
}
