<?php

namespace App;

use App\Buyer;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    	'quantity',
    	'buyer_id',
    	'product_id',
    ];

//una transaccion pertenece a un comprador
    public function buyer()
    {
    	return $this->belongsTo(Buyer::class);
    }

    //una transaccion pertenece a un producto
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
