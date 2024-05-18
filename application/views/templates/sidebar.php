<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-bolt"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Sistem Bayar Listrik</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my">


    <!--QUERY MENU -->


    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
  FROM `user_menu`
  JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id` WHERE `user_access_menu` . `role_id` = $role_id
  ORDER BY `user_access_menu`.`menu_id` ASC
  ";

    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- SIAPKAN SUBMENU SESUAI MENU -->
        <?php
        $menuId = $m['id'];
        $querySubMenu =  "SELECT *
        FROM `user_sub_menu`
        JOIN `user_menu` ON `user_sub_menu` . `menu_id` = `user_menu` . `id` 
        WHERE `user_sub_menu` . `menu_id` = $menuId
        AND `user_sub_menu` . `is_active` =  1";

        $subMenu = $this->db->query($querySubMenu)->result_array();

        ?>

        <?php foreach ($subMenu as $sm) : ?>

            <li class="nav-item">


                <a class="nav-link collapsed" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span>
                </a>

            </li>

        <?php endforeach; ?>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

    <?php endforeach; ?>
    <!-- Nav Item - Pages Collapse Menu -->

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('akun/editprofile'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span>
        </a>

    </li> -->

    <!-- Divider -->
    <!-- //<hr class="sidebar-divider d-none d-md-block"> -->


    <!-- Heading
    <div class="sidebar-heading">
        Admin
    </div> -->

    <!-- Nav Item - Dashboard -->

    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/role'); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Role</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/datapelanggan'); ?>">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Data Pelanggan</span></a> -->
    <!-- </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/users'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li> -->

    <!-- Divider
    <hr class="sidebar-divider"> -->

    <!-- Heading
    <div class="sidebar-heading">
        Transaksi
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi/tagihan'); ?>">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Data Tagihan</span></a>
    </li> -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi/tarif'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Daftar Tarif</span></a>
    </li> -->

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
<!-- End of Sidebar -->