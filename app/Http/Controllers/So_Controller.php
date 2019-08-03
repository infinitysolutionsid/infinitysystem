<?php

namespace App\Http\Controllers;

use app\itemModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class So_Controller extends Controller
{
    //
    public function index()
    {
        $data_so = \App\Sales_Order::all();
        return view('salesorder.index', ['data_so' => $data_so]);
    }
    public function create(Request $request)
    {
        $data_so = new \App\Sales_Order();
        $data_so->so_number = $request->so_number;
        $data_so->so_date = $request->so_date;
        $data_so->customer_id = $request->customer_id;
        $data_so->total_price = $request->total_price;
        $data_so->discount = $request->discount;
        $data_so->grandtotal = $request->grandtotal;
        $data_so->created_by = auth()->user()->fullname;
        $data_so->updated_by = auth()->user()->fullname;
        $data_so->save();

        return redirect('/so')->with('sukses', 'New sales order has been successfully added!');
    }
    public function edit($so_id)
    {
        $data_so = \App\Sales_Order::find($so_id);
        return view('salesorder.edit', ['data_so' => $data_so]);
    }
    public function update(Request $request, $so_id)
    {
        $data_so = \App\Sales_Order::find($so_id);
        $data_so->update($request->all());
        $data_so->updated_by = auth()->user()->fullname;
        $data_so->save();

        return redirect('/so')->with('sukses', 'Sales order data has been successfully updated!');
    }
    public function delete($so_id)
    {
        $data_so = \App\Sales_Order::find($so_id);
        $data_so->delete();
        return redirect('/so')->with('sukses', 'Sales Order Item has been deleted!');
    }
    public function details($so_id)
    {
        // DATA LAMA 27 JULY 2019
        $data_so = \App\Sales_Order::find($so_id);
        $data_detailso = DB::table('sales_order_details')
            ->join('items', 'sales_order_details.item_id', '=', 'items.item_id')
            ->where('sales_order_details.so_id', '=', $data_so->so_id)
            ->select('sales_order_details.*', 'items.item_name')
            ->get();
        $itemList = DB::table('items')
            ->groupBy('item_name')
            ->get();
        $datacustomer = \App\Customer_Model::all();
        $itemdata = \App\itemModel::all();
        return view('salesorder.details', ['data_detailso' => $data_detailso, 'data_so' => $data_so, 'datacustomer' => $datacustomer, 'itemdata' => $itemdata, 'itemList' => $itemList]);
    }
    public function itemadd(Request $request)
    {
        $itemdatafunc = \App\itemModel::all();
        // $nilaiitem = \App\itemModel::where('')
        $data_detailso = new \App\Sales_Order_Details;
        $data_detailso->so_id = auth()->so()->so_id;
        $data_detailso->item_id = $request->item_id;
        $data_detailso->qty = $request->qty;
    }
    public function updatedetails(Request $request, $so_id)
    {
        $data_so = \App\Sales_Order::find($so_id);
    }
}
