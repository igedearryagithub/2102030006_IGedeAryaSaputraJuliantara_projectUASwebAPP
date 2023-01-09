<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span>
        </a>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'mahasiswas' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='fas fa-user-tie' style='font-size:24px'></i>
            <span>Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswas/add') ?>">Mahasiswa Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswas') ?>">Daftar Mahasiswa</a>
        </div>
    </li>

    
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'dosens' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='fas fa-chalkboard-teacher' style='font-size:24px'></i>
            <span>Dosen</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/dosens/add') ?>">Dosen Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/dosens') ?>">Daftar Dosen</a>
        </div>
    </li>


    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelass' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='fas fa-school' style='font-size:24px'></i>
            <span>Daftar Kelas</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/kelass/add') ?>">Kelas Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/kelass') ?>">Daftar Kelas</a>
        </div>
    </li>

       
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'matkuls' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='fas fa-book-open' style='font-size:24px'></i>
            <span>Daftar Matakuliah</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/matkuls/add') ?>">Matakuliah Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/matkuls') ?>">Daftar Matakuliah</a>
        </div>
    </li>

        
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'jadwals' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='far fa-calendar-alt' style='font-size:24px'></i>
            <span>Jadwal Perkuliahan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/jadwals/add') ?>">Jadwal Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/jadwals') ?>">Daftar Jadwal</a>
        </div>
    </li>
    
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'jurusans' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='fas fa-book' style='font-size:24px'></i>
            <span>Jurusan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/jurusans/add') ?>">Jurusan Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/jurusans') ?>">Daftar Jurusan</a>
        </div>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'users' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class='fas fa-user-circle' style='font-size:24px'></i>
            <span>Users</span>
        </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/users/add') ?>">User Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/users') ?>">Daftar User</a>
        </div>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li> -->
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/login') ?>">
        <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

</ul>
