<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Si_Controller extends Controller
{
    public function index()
    {
        $data_si = \App\Sales_Invoices::all();
        return view('salesinvoices.index', ['data_si' => $data_si]);
    }
}
