        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('/assets/img/home/home.png')?>"
                        style="width:50px; height:50px; margin-right:3%">
                </div>
                <div class="sidebar-brand-text mx-3">Kelurahan Palmerah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Profile
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <div class="<?=($active=='user'?'active':'')?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>My Profile</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/profil'); ?>">
                    <div class="<?=($active=='edit_profil'?'active':'')?>">
                        <i class="fas fa-fw fa-user-edit"></i>
                        <span>Edit Account</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/changepassword'); ?>">
                    <div class="<?=($active=='change_password'?'active':'')?>">
                        <i class="fas fa-fw fa-key"></i>
                        <span>Change Password</span>
                    </div>
                </a>
            </li>

            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                Pengajuan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('layanan/status_layanan'); ?>">
                    <div class="<?=($active=='status_layanan'?'active':'')?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Status Surat</span>
                    </div>
                </a>
            </li>

            <hr class="sidebar-divider mt-3">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar -->