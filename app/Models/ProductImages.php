<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class ProductImages extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'product_id',
    ];

    public function posts(){
        return $this->belongsTo(Product::class);
    }
}
