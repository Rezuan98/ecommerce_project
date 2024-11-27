<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

  

    protected $fillable = ['name','slug','icon','display_grid'];


    public function subcategories()
{
    return $this->hasMany(Subcategory::class);
}

public function product(){

    return $this->hasMany(Product::class);
    }

}