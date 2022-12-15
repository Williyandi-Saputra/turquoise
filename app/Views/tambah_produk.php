<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Riter Bakery </title>

    <!-- Custom fonts for this template-->
    <link href="<?= FOLDER_DASHBOARD ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= FOLDER_DASHBOARD ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                         
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"> Tambah Produk </h1>
                                    </div>
                                    <form class="user" method="post" action="tambah-produk" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nama_produk"
                                                placeholder="Nama Produk">
                                        </div>                                       
                                        <div class="form-group">
                                            <select class="form-control" name="jenis_produk">
                                                <option> - Jenis Produk - </option>
                                                <option value="roti"> Roti </option>
                                                <option value="kue"> Kue </option>
                                                <option value="pie"> Pie </option>
                                                <option value="pastry"> Pastry </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="deskripsi_produk"
                                                placeholder="Deskripsi Produk">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" name="harga_produk"
                                                placeholder="Harga Produk">
                                        </div>
                                        <div class="mb-3">
                                             <label for="formFile" class="form-label"> Pilih gambar </label>
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Tambah Produk
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= FOLDER_DASHBOARD ?>vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= FOLDER_DASHBOARD ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= FOLDER_DASHBOARD ?>js/sb-admin-2.min.js"></script>

</body>

</html>