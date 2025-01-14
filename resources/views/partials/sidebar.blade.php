<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="https://via.placeholder.com/150" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">AMS Admin</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-school"></i>
                            <p>
                                Data Kelas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="{{ route('input_kelas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Kelas</p>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="{{ route('view_kelas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Data Kelas</p>
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                Data Siswa
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('input_siswa') }}" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Data Siswa</p>
                                </a>
                            </li>
                        </ul> 

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>
                                Pembayaran
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="{{ route('pembayaran_spp') }}" class="nav-link {{ request()->is('pembayaran_spp') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pembayaran SPP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="{{ route('view_data_spp') }}" class="nav-link {{ request()->is('view_data_spp') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Data Pembayaran</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Pengaturan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="{{ route('setting_app') }}" class="nav-link {{ request()->is('setting_app') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pengaturan Umum</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="{{ route('setting_th_ajaran') }}" class="nav-link {{ request()->is('setting_th_ajaran') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pengaturan Th Ajaran</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
</aside>
