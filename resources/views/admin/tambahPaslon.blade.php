<?php session()->put('flag', 5); ?>
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
              <h2>Tambah Pasangan Calon</h2>
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
              <form class="form-horizontal needs-validation" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate method="POST" action="{{ route('admin.addpaslon') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Nama Ketua') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" type="text" class="form-control{{ $errors->has('nameketua') ? ' is-invalid' : '' }}" name="namaketua" value="{{ old('nameketua') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Nama Wakil Ketua') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" type="text" class="form-control{{ $errors->has('namewakilketua') ? ' is-invalid' : '' }}" name="namawakilketua" value="{{ old('namewakilketua') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="super-user" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Angkatan Ketua') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="angkatanketua" id="" class="form-control center" required>
                            <option value="" disabled selected hidden>Pilih Angkatan</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="super-user" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Angkatan Wakil Ketua') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="angkatanwakilketua" id="" class="form-control center" required>
                            <option value="" disabled selected hidden>Pilih Angkatan</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('Nomer Urut') }}<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="email" type="number" class="form-control{{ $errors->has('nomerurut') ? ' is-invalid' : '' }}" name="nomerurut" value="{{ old('nomerurut') }}" required>
                    </div>
                </div>

                <div class="form-group">
                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Foto Pasangan Calon<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" class="form-control" name="image" id="img" required="required">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">
                            Submit
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
