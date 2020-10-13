<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
    	'name', 'photo', 'price','is_approve', 'created_by', 'updated_by','deleted_by' //doldurulabilir alanlar
    ];

    public function user()
    {
    	return $this->hasMany('App\User','id','created_by','name'); //hasMany ile ilişkilendirilen table
    }


     

}
