<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- <link href="css/styles.css" rel="stylesheet" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" href="<?php echo base_url() ?>assets/img/books.png" type="image/x-icon">

    <!-- Link Font -->
    <!-- FONTS -->
    <!-- MANJARI 100 400 700-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400;700&display=swap" rel="stylesheet">

    <style>
        div {
            font-family: 'Manjari', sans-serif;
        }
    </style>
    <!-- Link Font -->

    <!-- Iconify -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-xl" style="background-color: #6EDCFF">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>homepage" style="vertical-align: middle">
                <img src="<?php echo base_url() ?>assets/img/books.png" alt="Book" width="40" height="40" class="d-inline-block align-text-middle">
                Buku Hehe
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url() ?>homepage">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>buku">Daftar Buku</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>denah">Denah</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>about">Tentang Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>contact">Kontak</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url() ?>loginGuest">Guest</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url() ?>loginAdmin">Admin</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-info" style="color: #0082B4" type="submit">
                        <span class="iconify" data-icon="fe:search"></span>
                    </button>
                </form>
            </div>
        </div>
    </nav>