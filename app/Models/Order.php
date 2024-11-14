<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_name',
        'pricclent_address',
        'total_price',
        'status',
        'order_date',
    ];
    use HasFactory;
    public function manga()
    {
        return $this->belongsToMany(Manga::class, 'order_manga');
    }
}
