<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Upload Buku</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Upload Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Upload</label>
                                <input type="date" class="form-control" id="tanggalupload" name="tanggalupload">
                            </div>
                            <div class="form-group">
                                <label for="kode">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="silahkan masukkan nama buku...">
                            </div>
                            <div class="form-group">
                                <label for="uraian">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="silahkan masukkan nama penulis...">
                            </div>
                            <div class="form-group">
                                <label for="uraian">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="silahkan masukkan nama penerbit...">
                            </div>
                            <div class="form-group">
                                <label for="file">Sampul Buku</label>
                                <input type="file" class="form-control-file" id="file">
                            </div>
                            <div class="submit">
                                <a href="<?= base_url(); ?>tamanpustaka/buku" class="btn btn-primary float-right">Upload</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>