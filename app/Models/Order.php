<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_name',
        'user_surname',
        'user_email',
        'user_phone',
        'shipping_address',
        'shipping_city',
        'shipping_state',
        'shipping_postal_code',
        'shipping_method',
        'payment_method_nonce',
        'amount',
        'transaction_id',
    ];
    use HasFactory;
    public function mangas()
    {
        return $this->belongsToMany(Manga::class, 'order_manga')->withPivot('quantity');;
    }
}
