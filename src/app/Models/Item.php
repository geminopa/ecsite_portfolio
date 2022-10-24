<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemDetail;

class Item extends Model
{
    use HasFactory;
    public function itemsDetail()
    {
        return $this->hasMany(ItemDetail::class);
    }
}
