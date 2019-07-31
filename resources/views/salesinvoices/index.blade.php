@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Sales Invoices - View</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><a href="/add-sales-invoices"><span title="Add User" class="icon-plus icons icon text-right"></span></a></h3>
                          </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-hover table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Sales Invoices ID</th>
                          <th>Item ID</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Discount</th>
                          <th>Line Total</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data_si as $siitem)
                        <tr>
                          <td>{{$siitem->si_id}}</td>
                          <td>{{$siitem->item_id}}</td>
                          <td>{{$siitem->qty}}</td>
                          <td>{{$siitem->price}}</td>
                          <td>{{$siitem->discount}}</td>
                          <td>{{$siitem->linetotal}}</td>
                          <td>Edit | Delete</td>
                        </tr>
                        @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
