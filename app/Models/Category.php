<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function orders()
{
    return $this->hasMany(Order::class);
}

}
