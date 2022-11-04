<!DOCTYPE html>
<html>

<head>

    <title>App System</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
</head>

<body onload="viewdata()">
    <div class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">App System</a>
                <h5>Cara Insert Update Delete Data Tanpa Loading Halaman dengan PHP dan jQuery</h5>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span> Pesan</a></li>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hy , Admin&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- modal input -->
    <div id="modalpesan" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Pesan Notification</h4>
                </div>
                <div class="modal-body">
                    <?php
                    $periksa = mysqli_query("SELECT * FROM barang WHERE jumlah <=3");
                    while ($q = mysqli_fetch_array($periksa)) {
                        if ($q['jumlah'] <= 3) {
                            echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>" . $q['nama'] . "</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!</div>";
                        }
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="row">

        </div>

        <div class="row"></div>
        <ul class="nav nav-pills nav-stacked">
        </ul>
    </div>
    <div class="col-md-10">