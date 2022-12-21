<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class ItemDetail extends Model
{
    use HasFactory;
    protected $table = 'items_detail';

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'id', 'items_detail_id');
    }
}
