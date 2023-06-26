<?php

namespace App\Models;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';


    public  function category()
    {
       return  $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsToOne(User::class);

    }
    public function orders()
    {
        return $this->hashMany(Order::class);
    }
}
