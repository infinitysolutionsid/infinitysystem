@extends('layouts.layout')
@section('content')
              <!-- <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                  <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Data Users Details</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <a href="/add-user"><span class="icon-user-follow icons icon text-right"></span></a>
                                           </h4>
                                      </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Full Name</th>
                        <th>Type</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                        <tr>
                          <th>bintangjtobing</th>
                          <th>Bintang J Tobing</th>
                          <th>Administrator</th>
                          <th>IT</th>
                          <th>Active</th>
                          <th><a href="#">Edit</a> | <a href="#">Delete</a></th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div> -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Users Data Management</h3></div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h3><a href="/add-user"><span title="Add User" class="icon-user-follow icons icon text-right"></span></a></h3>
                          </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Fullname</th>
                          <th>Type</th>
                          <th>Position</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>admin</td>
                          <td>Administrator</td>
                          <td>Administrator</td>
                          <td>-</td>
                          <td>Active</td>
                          <td><a href="#">Edit </a>| <a href="#">Delete</a></td>
                        </tr>
                        <tr>
                          <td>bintangjtobing</td>
                          <td>Bintang Tobing</td>
                          <td>Administrator</td>
                          <td>IT</td>
                          <td>Active</td>
                          <td><a href="#">Edit </a>| <a href="#">Delete</a></td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
