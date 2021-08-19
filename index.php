
<?php

    include 'functions.php';
    /*if(empty($_SESSION['admin']))
    header("location:login.php");*/
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>    
    <link rel="icon" href="favicon.ico"/>
    <link href="assets/images/logo.png" rel="shortcut icon"/>
    <title>Sistem Informasi Pemetaan</title>
    <link href="assets/css/solar-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
    <script src="assets/tinymce/tinymce.min.js"></script>

    <!-- source modal -->
    <!-- end source -->


    <script>
        tinymce.init({
            selector: "textarea.mce",
            plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
            ],
            menubar : false,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>  

    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>


    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=Eqi92x2w8LsGuYPh9AMSuA8Yvz3JXaoARL8M3dQ7BaQ9tn38FPBm3Fi4RmEAfWk&callback=initMap" async defer></script> -->

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZcCW0SQla4wHKTN8jZyX9hMBU5HBQcRo&language=id&region=ID"></script>  -->

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZcCW0SQla4wHKTN8jZyX9hMBU5HBQcRo"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDRqVp7_B0LwM0StKTw5qPKmZnnqds7Hg"></script> -->
    
    <script>
        var default_lat = <?=get_option('default_lat')?>; 
        var default_lng = <?=get_option('default_lng')?>;
        var default_zoom = <?=get_option('default_zoom')?>;
    </script>
    <script src="assets/js/script.js"></script>
</head>

<body style="background-color: #ffffff"> <!-- #dedede, #d9d7d7 -->
    <nav class="navbar">
        <div class="container">
            <div class="row hidden">
                <!-- <div class="col-sm-1"> -->
                <div class="col-xs-1">
                    <a href="https://pekalongankota.go.id"><img src="assets/images/logo.png" class="img-responsive" style="width: 60px; height: 80px; margin-top: 20px"></a>
                </div>
                <div class="col-xs-10"> <!-- 2aa198 -->
                <h3> Sistem Informasi Pemetaan</h3><hr style="margin-top: -3px; margin-bottom: -5px; border: 1px solid #2285c7;"> <h4>Rambu Lalu Lintas Di Kota Pekalongan</h4>
                </div>
                <div class="col-xs-1">
                    <img src="assets/images/dinhub.png" class="img-responsive" style="width: 150px; height: 80px; margin-top: 20px; margin-left: -49px" >
                </div>
            </div> 
        </div>
     </nav>

    <nav class="navbar navbar-default navbar-static-top" style="background-color: #2285c7;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"> <!-- ? -->
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </div>
            
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                    <?php if($_SESSION['status']):?>
                        <li><a href="?m=tempat"><span class="glyphicon glyphicon-map-marker"></span> Data Rambu</a></li>
                        <li><a href="?m=galeri"><span class="glyphicon glyphicon-picture"></span> Galeri Rambu</a></li>
                        <li><a href="?m=kategori"><span class="glyphicon glyphicon glyphicon-list-alt"></span> Kategori Rambu</a></li>
                        <li><a href="?m=informasi"><span class="glyphicon glyphicon glyphicon-info-sign"></span> Informasi Rambu</a></li>
                        <li><a href="?m=pengajuan_list"><span class="glyphicon glyphicon glyphicon-list-alt"></span> Pengaduan Rambu</a></li>
                        <li><a href="?m=laporan_rambu"><span class="glyphicon glyphicon glyphicon-list-alt"></span> Laporan</a></li>
                        <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                    <?php else:?>            
                        <li><a href="?m=tempat_list"><span class="glyphicon glyphicon-map-marker"></span> Peta Rambu Lalu Lintas</a></li>
                        <!-- <li><a href="?m=tempat_rambu_list"><span class="glyphicon glyphicon glyphicon-list-alt"></span> Data Rambu Lalu Lintas</a></li> -->
                        <li><a href="?m=informasi_list"><span class="glyphicon glyphicon-info-sign"></span> Informasi Rambu Lalu Lintas</a></li>
                        <li><a href="?m=pengajuan_tambah"><span class="glyphicon glyphicon-list-alt"></span> Pengaduan Rambu Lalu Lintas </a></li>
                        <!-- <li><a href="?m=login"><span class="glyphicon glyphicon-user"></span>Login</a></li> -->
                    <?php endif?>                   
                </ul>          
            </div>
        </div>
    </nav>

    <div class="container" style="color: #2285c7">
        <?php
            if(file_exists($mod.'.php'))
                include $mod.'.php';
            else
                include 'home.php';
        ?>
    </div>

    <footer class="footer bg-info"><!-- success -->
        <div class="container">
            <em class="pull-right">
                <p>Copyright &copy; <?=date('Y')?>
                    <a href="#"style=" color:white">Raissa Amelia | 17.240.0065</a> 
                    <!-- <em class="pull-right">Otw S.Kom Bismillah</em> &#128540; -->
                </p>
            </em>
        </div>
    </footer>

</body>
</html>