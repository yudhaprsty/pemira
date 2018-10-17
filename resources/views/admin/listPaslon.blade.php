<?php session()->put('flag', 3); ?>
@extends('admin.adminPartial.master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Pasangan Calon</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align:center;">Nomer Urut</th>
                    <th style="text-align:center;">Foto</th>
                    <th style="text-align:center;">Nama Ketua</th>
                    <th style="text-align:center;">Nama Wakil Ketua</th>
                    <th style="text-align:center;">Angkatan Ketua</th>
                    <th style="text-align:center;">Angkatan Wakil Ketua</th>
                    <th style="text-align:center;">Jumlah Suara</th>
                    <th style="text-align:center; width:10%;">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($paslon as $paslons)
                  <?php
                  // use App\User;
                    // dd($test);
                  ?>
                  <tr>
                    <td style="text-align:center;">{{ $paslons->nomerurut }}</td>
                    <td style="text-align:center;"><img src="{{asset($paslons->image)}}" style="width:100px; height:100px;"></td>
                    <td style="text-align:center;">{{ $paslons->namaketua }}</td>
                    <td style="text-align:center;">{{ $paslons->namawakilketua }}</td>
                    <td style="text-align:center;">{{ $paslons->angkatanketua }}</td>
                    <td style="text-align:center;">{{ $paslons->angkatanwakilketua }}</td>
                    <td style="text-align:center;">{{ App\User::where(['pilihan' => $paslons->id])->get()->count() }}</td>
                    <td style="text-align:center;">
                      <a href="#delete{{ $paslons->id }}" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</button></a>
                      <div id="delete{{ $paslons->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <form method="post" action="{{ route('admin.deletepaslon') }}">
                          {{ csrf_field() }}
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Hapus</h4>
                              </div>
                              <div class="modal-body">
                                <input type="hidden" name="id" value="{{$paslons->id}}">
                                <p><div class="alert alert-danger">Apakah anda yakin ngin menghapus pasangan nomer urut {{ $paslons->nomerurut }}<strong>?</strong></div></p>
                                <div class="modal-footer">
                                  <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Ya</button>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Tidak</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
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
