<?php session()->put('flag', 1); ?>
@extends('admin.adminPartial.master')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="count">{{ DB::table('users')->count() }}</div>
            <h3>Mahasiswa Ilkom</h3>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-shopping-cart"></i></div>
            <div class="count">{{ DB::table('paslons')->count() }}</div>
            <h3>Pasangan Calon</h3>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-shopping-cart"></i></div>
            <div class="count">{{ App\User::where('pilihan', '!=', 'NULL')->get()->count() }}</div>
            <h3>Jumlah Suara</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
