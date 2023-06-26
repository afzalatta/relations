<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function order()
    {
        return $this->belongsTo(User::class);
    }

    public function single()
    {
        return $this->belongsToOne(User::class);

    }
}
