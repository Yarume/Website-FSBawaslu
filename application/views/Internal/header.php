<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <title>FILE SHARING | Bawaslu Provinsi Bali</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-white mt-3 mb-3 mx-5">
        <div class="container">
            <a class="navbar-brand">FILE SHARING | Bawaslu Provinsi Bali |</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>dashboard">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                    if ($this->session->userdata('peringkat') == 'superadmin') {
                        echo '<li class="nav-item active">
                        <a class="nav-link" href="'.base_url().'verifikasi">Verifikasi</a>
                    </li>';
                    }
                    ?>
                    
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Divisi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>hukum">Hukum & Penyelesaian Sengketa</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>pencegahan">Pencegahan, PARMAS & HUMAS</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>penanganan">Penanganan Pelanggaran, Data & Informasi</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>sdm">SDM, Organisasi, Pendidikan & Pelatihan</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>tamanpustaka">Taman Pustaka</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>