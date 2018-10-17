<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ route('home') }}" class="site_title"><span>HIMALKOM</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('admin/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ Auth::user()->name }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a><i class="fa fa-shopping-cart"></i> Pasangan Calon <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('admin.paslon') }}">Daftar Pasangan Calon</a></li>
              <li><a href="{{ route('admin.tambahpaslon') }}">Tambah Pasangan Calon</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-list-alt"></i> Mahasiswa Ilkom <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('admin.mahasiswa') }}">Daftar Mahasiswa</a></li>
              <li><a href="{{ route('admin.tambahmahasiswa') }}">Tambah Mahasiswa</a></li>
            </ul>
          </li>
          <!-- <li><a href="{{ route('admin.hasilperolehan') }}"><i class="fa fa-list-alt"></i> Hasil Perolehan </a>
          </li> -->
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

  </div>
</div>
