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

<body class="bg-warning">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body bg-light p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <!-- <form class="user" method="post" action="tambah_user"> -->
                            <form class="user" method="post" action="tambah_user">
                                <div class="form-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username"
                                            placeholder="Input Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama"
                                        placeholder="Input Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password"
                                        placeholder="Input Password">
                                </div> 
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat"
                                        placeholder="Input Alamat">
                                </div> 
                                <div class="form-group">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option> - pilih jenis kelamin - </option>
                                        <option value="1"> Laki-Laki </option>
                                        <option value="2"> Perempuan </option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a> <br>
                                <a class="small" href="/"> Back to home </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="riter/<?= FOLDER_DASHBOARD ?>vendor/jquery/jquery.min.js"></script>
    <script src="riter/<?= FOLDER_DASHBOARD ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="riter/<?= FOLDER_DASHBOARD ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="riter/<?= FOLDER_DASHBOARD ?>js/sb-admin-2.min.js"></script>

</body>

</html>