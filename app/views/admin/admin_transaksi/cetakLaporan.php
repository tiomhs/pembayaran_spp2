<?php 
    if($_SESSION['login'] != true){
        redirect("/login");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 || <?= $data['judul']; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan Pembayaran Siswa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <?php foreach($data['bulan'] as $bulan): ?>
                                    <th>Bulan ke-<?= $bulan; ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['siswa'] as $siswa): ?>
                                <tr>
                                    <td><?= $siswa['nama']; ?></td>
                                    <?php foreach($data['bulan'] as $bulan): ?>
                                        <td>
                                            <?php if(in_array($bulan, $data['transaksi'][$siswa['id']])): ?>
                                                <h2 class="text-success">O</h2>
                                                <?php else: ?>
                                                    <h2 class="text-danger">X</h2>
                                            <?php endif; ?>
                                        </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="btnLaporan" class="btn btn-primary">Cetak Laporan</a>



    <script>
        const btn = document.getElementById('btnLaporan');

        btn.addEventListener('click',()=>{
            btn.setAttribute('class','d-none');
            window.print();
            btn.setAttribute('class','d-inline btn btn-primary');
        })
    </script>
    <script src="<?= BASEURL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL ?>/js/sb-admin-2.min.js"></script>

</body>

</html>