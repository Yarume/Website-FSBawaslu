<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                        <a class="nav-link" href="<?= base_url(); ?>dashboard/dashboardadm">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Divisi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url(); ?>hukum/hukumadm">Hukum & Penyelesaian Sengketa</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>pencegahan/pencegahanadm">Pencegahan, PARMAS & HUMAS</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>penanganan/penangananadm">Penanganan Pelanggaran, Data & Informasi</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>sdm/sdmadm">SDM, Organisasi, Pendidikan & Pelatihan</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>tamanpustaka/tamanpustakaadm">Taman Pustaka</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary text-white my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>