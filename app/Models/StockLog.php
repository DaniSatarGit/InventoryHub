<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockLog extends Model
{
    protected $fillable = [

    'product_id',

    'user_id',

    'type',

    'quantity',

    'note'

];
}
