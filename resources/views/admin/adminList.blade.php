<?php session()->put('flag', 8); ?>
@extends('admin.adminPartial.master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Admin List</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align:center; width:5%;">No.</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">Account Type</th>
                    <th style="text-align:center; width:10%;">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no=0; ?>
                  @foreach($admins as $admin)
                  @if($admin->id !== $now)
                  <?php $no++; ?>
                  <tr>
                    <td style="text-align:center;">{{$no}}</td>
                    <td style="text-align:center;">{{$admin->name}}</td>
                    <td style="text-align:center;">{{$admin->email}}</td>
                    <?php
                      if($admin->superuser == 0) {
                        $status = 'Admin';
                      }
                      else if($admin->superuser == 1) {
                        $status = 'Super Admin';
                      }
                    ?>
                    <td style="text-align:center;">{{$status}}</td>
                    <td style="text-align:center;">
                      <a href="#delete{{$admin->id}}" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete</button></a>
                      <div id="delete{{$admin->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <form method="post" action="{{ url('deleteAdmin') }}">
                          {{ csrf_field() }}
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete</h4>
                              </div>
                              <div class="modal-body">
                                <input type="hidden" name="id" value={{$admin->id}}>
                                <p><div class="alert alert-danger">Are you sure you want delete {{$admin->name}} <strong>?</strong></div></p>
                                <div class="modal-footer">
                                  <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</button>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> No</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>

                      <a href="#edit{{$admin->id}}" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Edit</button></a>
                      <div id="edit{{$admin->id}}" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form" action="{{ url('updateAdmin') }}">
                        {{ csrf_field() }}
                          <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Item</h4>
                              </div>
                              <div class="modal-body" style="height:170px;">
                                <input type="hidden" name="id" value={{$admin->id}}>

                                <div class="form-group col-sm-6">
                                  <label class="control-label " for="item_name">Name</label>
                                  <div>
                                    <input class="form-control" id="item_description" name="name" value="{{$admin->name}}" required style="width: 70%;">
                                  </div>
                                  <label class="control-label " for="item_description">Email</label>
                                  <div>
                                    <input type="email" class="form-control" id="item_description" name="email" value="{{$admin->email}}" required style="width: 70%;">
                                  </div>
                                </div>

                                <div class="form-group col-sm-6">
                                  <label class="control-label " for="item_name">Account Type</label>
                                  <div>
                                    <input class="form-control" id="item_description" name="superuser" value="{{$admin->superuser}}" required style="width: 70%;">
                                  </div>
                                  <label class="control-label " for="item_name">Password</label>
                                  <div>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required/>
                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="update_item"><span class="glyphicon glyphicon-edit"></span> Save</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
