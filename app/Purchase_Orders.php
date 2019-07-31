<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Orders extends Model
{
    //
    protected $table = 'purchase_orders';
    protected $fillable = ['supplier_id', 'void_reason'];

}
