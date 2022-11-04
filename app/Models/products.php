<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
		'product_id', 'product_title', 'product_brand', 'product_in_stock', 'product_price', 'product_image', 'product_desc',
	];
}
