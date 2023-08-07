<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImages;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'quantity',
        'price',
        'image',
        'size',
        'color',
        'brand',
        'type',
        'material',
        'cover',
        'status'];

    public function images(){
        return $this->hasMany(ProductImages::class);
    }
}
