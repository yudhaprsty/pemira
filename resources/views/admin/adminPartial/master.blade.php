<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $value = Session::get('flag'); ?>
    <?php
    if($value==0) {
      $value = 'Login';
    }
    else if($value==1) {
      $value = 'Home';
    }
    else if($value==2) {
      $value = 'List Mahasiswa';
    }
    else if($value==3) {
      $value = 'List Pasangan Calon';
    }
    else if($value==4) {
      $value = 'Tambah Mahasiswa';
    }
    else if($value==5) {
      $value = 'Tambah Pasangan Calon';
    }
    else if($value==6) {
      $value = 'Add News';
    }
    else if($value==7) {
      $value = 'Add SlideShow';
    }
    else if($value==8) {
      $value = 'Admin List';
    }
    else if($value==9) {
      $value = 'Category List';
    }
    else if($value==10) {
      $value = 'News List';
    }
    else if($value==11) {
      $value = 'Product List';
    }
    else if($value==12) {
      $value = 'SlideShow List';
    }
    else if($value==13) {
      $value = 'Sub Category List';
    }
    else if($value==14) {
      $value = 'Add Product';
    }
    else if($value==15) {
      $value = 'Change Password';
    }
    else if($value==16) {
      $value = 'Company Profile';
    }
    ?>
    <title> <?php echo $value; ?> </title>
    <link rel="icon" type="image/png" href="{{ asset('user/images/icons/coffee-bean.png') }}"/>
    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('admin.adminPartial.sidebar')

        @include('admin.adminPartial.header')

        @yield('content')

        @include('admin.adminPartial.footer')

      </div>
    </div>

    @include('admin.adminPartial.script')
  </body>
</html>
