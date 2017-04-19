<?php
namespace App;
use App\Seller;
use App\Category;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
	const PRODUCTO_DISPONIBLE = 'disponible';
	const PRODUCTO_NO_DISPONIBLE = 'no disponible';
    protected $fillable = [
    	'name',
    	'description',
    	'quantity',
    	'status',
    	'image',
    	'seller_id',
    ];
    public function estaDisponible()
    {
    	return $this->status == Product::PRODUCTO_DISPONIBLE;
    }

//un producto pertenece a un vendedor
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

//u producto posee muchas transacciones
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

//varios productos pertenecen a varias categorias
     public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}