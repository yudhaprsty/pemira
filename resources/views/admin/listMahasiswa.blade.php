<?php session()->put('flag', 2); ?>
@extends('admin.adminPartial.master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Mahasiswa</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align:center; width:5%;">No.</th>
                    <th style="text-align:center;">Nama</th>
                    <th style="text-align:center;">NIM</th>
                    <th style="text-align:center;">Angkatan</th>
                    <th style="text-align:center;">Pilihan</th>
                    <th style="text-align:center; width:10%;">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no=0; ?>
                  @foreach($mahasiswa as $mahasiswas)
                  @if($mahasiswas->admin != 1)
                  <?php $no++; ?>
                  <tr>
                    <td style="text-align:center;">{{ $no }}</td>
                    <td style="text-align:center;">{{ $mahasiswas->name }}</td>
                    <td style="text-align:center;">{{ $mahasiswas->nim }}</td>
                    <td style="text-align:center;">{{ $mahasiswas->angkatan }}</td>
                    <td style="text-align:center;">{{ $mahasiswas->pilihan }}</td>
                    <td style="text-align:center;">
                      <a href="#delete{{ $mahasiswas->id }}" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</button></a>
                      <div id="delete{{ $mahasiswas->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <form method="post" action="{{ url('admin/deleteMahasiswa') }}">
                          {{ csrf_field() }}
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Hapus</h4>
                              </div>
                              <div class="modal-body">
                                <input type="hidden" name="id" value="">
                                <p><div class="alert alert-danger">Apakah anda yakin ngin menghapus pasangan {{ $mahasiswas->name }} <strong>?</strong></div></p>
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
