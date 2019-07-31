<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Order_Details extends Model
{
    //
    protected $table = 'sales_order_details';
    protected $primaryKey = 'so_detail_id';
    // protected $fillable = ['user_id', 'customer_id'];
}
