<html lang="en">

<head>
    <title>ADMIN</title>
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>assets/css/materialize.css"
        type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>assets/css/style.css"
        type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>assets/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"
        media="screen,projection">

</head>

<body>
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="<?php echo base_url(); ?>petugas/profil">Profil</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
            </ul>
            <nav class="blue">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper">
                        <a href="<?php echo base_url('admin'); ?>" class="brand-logo darken-1">
                            XYZ
                        </a>
                    </h1>

                    <ul>
                        <li>
                            <a href="#" data-activates="mobile-demo" class="button-collapse">
                                <i class="mdi-action-view-headline"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <!-- Dropdown-->
                        <li>
                            <a class="dropdown-button" href="#!" data-activates="dropdown2">
                                <i class="mdi-action-settings" style='font-size: 40px'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div id="main">
        <div class="wrapper">
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li>
                                        <a href="<?php echo base_url(); ?>admin/profil">
                                            <i class="mdi-action-face-unlock"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>login/logout">
                                            <i class="mdi-hardware-keyboard-tab"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waveseffect waves-light white-text profile-btn" href="#" dataactivates="profile-dropdown">
                                    <?= $admin->nama ?>
                                    <i class="mdi-navigationarrow-drop-down right"></i>
                                </a>
                                <p class="user-roal">
                                    Administrator
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="bold">
                        <a href="<?php echo base_url(); ?>admin" class="waves-effect waves-cyan">
                            <i class="mdi-actiondashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="bold">
                        <a href="<?php echo base_url(); ?>barang/dataBarang" class="waves-effect waves-cyan">
                            <i class="mdiaction-list"></i>
                            Data Barang
                        </a>
                    </li>
                    <li class="bold">
                        <a href="<?php echo base_url(); ?>penjualan/dataPenjualan" class="waves-effect waves-cyan">
                            <i class="mdiaction-list"></i>
                            Data Penjualan
                        </a>
                    </li>
                    <li class="bold">
                        <a href="<?php echo base_url(); ?>petugas/dataPetugas" class="waves-effect waves-cyan">
                            <i class="mdiaction-list"></i>
                            Data Petugas
                        </a>
                    </li>
                </ul>
                <!-- <a href="#" data-activates="slide-out" class="sidebarcollapse btn-floating btn-medium waves-effect waves-light hide-on-largeonly darken-2"><i class="mdi-navigation-menu"></i></a> -->
            </aside>

            <!-- Kode tambahan -->
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <a href="<?php echo base_url(); ?>admin">
                        <i class="mdiaction-home" style='font-size: 30px'>
                            Dashboard
                        </i>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo base_url(); ?>barang/barang">
                        <i class="mdi-editor-format-list-bulleted" style='font-size: 30px'>
                            Barang
                        </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>penjualan/penjualan">
                        <i class="mdi-editor-format-list-bulleted" style='font-size: 30px'>
                            Penjualan
                        </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>petugas/dataPetugas">
                        <i class="mdi-editor-format-list-bulleted" style='font-size: 30px'>
                            Petugas
                        </i>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo base_url(); ?>petugas/profil">
                        <i class="mdi-action-face-unlock" style='font-size: 30px'>
                            Profil
                        </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>login/logout ">
                        <i class="mdi-hardware-keyboard-tab" style='font-size: 30px'>
                            Logout
                        </i>
                    </a>
                </li>
            </ul>