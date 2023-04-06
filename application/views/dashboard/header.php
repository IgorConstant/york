<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor And Bootstrap 5.3">
    <title>Gerenciador de Conteúdo - YORK</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/bootstrap.min.css') ?>">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- Upload -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/js/upload/jquery.fileuploader-theme-thumbnails.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/js/upload/jquery.fileuploader.css') ?>">

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">YORK</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">LOGOUT <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky sidebar-sticky" style="padding-top: 4em;">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Módulos</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <?php echo anchor('banners', '<span><i class="fas fa-laptop-code"></i> Banners Home</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('segmentos_admin', '<span><i class="fas fa-laptop-code"></i> Segmentos</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('linhas_admin', '<span><i class="fas fa-laptop-code"></i> Linhas</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('galeria', '<span><i class="fas fa-laptop-code"></i> Galeria</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('newsletter', '<span><i class="fas fa-laptop-code"></i> Newsletter</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('blog_admin', '<span><i class="fas fa-laptop-code"></i> Blog</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('politica_admin', '<span><i class="fas fa-laptop-code"></i> Politica de Priv.</span>', array('class' => 'nav-link')) ?>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Acessos</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <?php echo anchor('usuarios', '<i class="fas fa-users"></i> Usuários</span>', array('class' => 'nav-link')) ?>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Manutenção</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <?php echo anchor('backup/gerarsql', '<i class="fas fa-cloud-download-alt"></i> Backup SQL</span>', array('class' => 'nav-link')) ?>
                        </li>
                    </ul>
                </div>
            </nav>