<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $guarded=[];


    public function Product(){
        return $this->hasMany('Product');
    }

}
