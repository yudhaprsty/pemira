<?php session()->put('flag', 3); ?>
@extends('admin.adminPartial.master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tambah Mahasiswa</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
              @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Errors:</strong>
                  <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                </div>
              @endif
              <form class="form-horizontal needs-validation" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate method="POST" action="{{ route('admin.addmahasiswa') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Nama') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('NIM') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="email" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="super-user" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Angkatan') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="angkatan" id="" class="form-control center" required>
                            <option value="" disabled selected hidden>Pilih Angkatan</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="super-user" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Posisi') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="admin" id="" class="form-control center" required>
                            <option value="" disabled selected hidden>Pilih Posisi</option>
                            <option value="1">Admin</option>
                            <option value="0">Mahasiswa</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12t">{{ __('Password') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Confirm Password') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
