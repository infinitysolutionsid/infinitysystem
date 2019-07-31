<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Invoices extends Model
{
    //
    protected $table = 'sales_invoices_details';
    protected $fillable = ['customer_id'];
}
