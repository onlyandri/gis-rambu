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
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-12 text-center" style="margin:50px; ">
            <h4>CETAK LAPORAN RAMBU LALU-LINTAS KOTA PEKALONGAN</h4>
        </div>
    </div>
    <div class="table-responsive" >
        <table class="table table-bordered table-hover table-striped bg-info" id="example1">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Tempat</th>
                    <th>Kategori</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Lokasi</th>
                    <th>Kondisi</th>
                </tr>
            </thead>

            <?php

            $id_kategori = $_POST['kategori'];
            $conn =  mysqli_connect("localhost","root","","gis-rambu");

            if($id_kategori == ''){
               $query = mysqli_query($conn ,"SELECT * FROM tb_kategori,tb_informasi,tb_tempat WHERE tb_kategori.id_kategori=tb_tempat.id_kategori AND tb_informasi.id_informasi=tb_tempat.id_informasi ORDER BY tb_tempat.id_tempat ASC");
           }else{
            $query = mysqli_query($conn ,"SELECT * FROM tb_kategori,tb_informasi,tb_tempat WHERE tb_kategori.id_kategori=tb_tempat.id_kategori AND tb_informasi.id_informasi=tb_tempat.id_informasi AND  tb_kategori.id_kategori=$id_kategori ORDER BY tb_tempat.id_tempat ASC");
        }

        $no = 0;
        while($row = mysqli_fetch_array($query)) :
                        # code...

            ?>

            <tr>
                <td><?=++$no?></td>
                <td width="100px"><img class="thumbnail" height="80" src="assets/images/informasi/<?=$row['gambar'];?>"></td>
                <td><?=$row['nama_tempat']?></td>
                <td><?=$row['nama_kategori']?></td>
                <td><?=$row['lat']?></td>
                <td><?=$row['lng']?></td>
                <td><?=$row['lokasi']?></td>
                <td><?=$row['kondisi']?></td>
            </tr>

        <?php endwhile; ?>
    </tbody>
</table>
</div>
<script type="text/javascript">
   
   $(document).ready(function(){

     window.print();


   })

   window.onafterprint = function(){window.history.back()}
</script>
</body>
</html>