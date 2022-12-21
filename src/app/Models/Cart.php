<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemDetail;

class Cart extends Model
{
    use HasFactory;

    public function itemDetail()
    {
        return $this->belongsTo(ItemDetail::class, 'items_detail_id', 'id');
    }
}
