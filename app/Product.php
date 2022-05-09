<?php

namespace App;
use App\Manufacture;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $fillable = ['name','color','price','status'];
        protected $guarded=[];
    public function scopeActive($query){
        return $query->Where('status',0);
    }
    public function scopeInactive($query){
        return $query->Where('status',1);
    }

    public function manufacture(){
        // return $this->belongsTo(Manufacture::class);
        return $this->belongsTo('app\Manufacture');
    }
}
