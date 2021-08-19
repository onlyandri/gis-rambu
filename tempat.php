
<link rel="stylesheet" href="assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/datatables-responsive/css/responsive.bootstrap4.min.css">


<div class="page-header">
    <h1>Kelola Data Rambu Lalu Lintas</h1>
</div>

<div class="panel panel-info">
    <div class="panel-heading" style="margin-bottom: 30px;">        
        <form class="form-inline">
            <input type="hidden" name="m" value="tempat" />
            <div class="form-group">            
                <a class="btn btn-success" href="?m=tempat"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>      
                <!-- <button class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>  -->       
                <a class="btn btn-primary" href="?m=tempat_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>

            <div class="form-group" style="margin-right: 20px">

            </div>
            <div class="form-group">
                <select class="form-control" id="drop">
                   <option value="0">Semua Kategori</option>
                   <?php
                   $conn =  mysqli_connect("localhost","root","","gis-rambu");
                   $query = mysqli_query($conn ,"SELECT * FROM tb_kategori");

                   while($row = mysqli_fetch_array($query)) :
                        # code...
                    ?>
                    
                    <option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </form>

</div>
<div>
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
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody id="tttt">

            <?php
            $q = esc_field($_GET['q']);

            // $sql = "SELECT tb_kategori.id_kategori, tb_informasi.id_informasi
            //     FROM tb_tempat
            //     INNER JOIN tb_kategori ON tb_kategori.id_kategori=tb_tempat.id_kategori
            //     INNER JOIN tb_informasi ON tb_informasi.id_informasi=tb_tempat.id_informasi
            //     WHERE nama_tempat LIKE '%$q%'
            //     ORDER BY id_tempat";
            $sql="SELECT * FROM tb_kategori,tb_informasi,tb_tempat WHERE tb_kategori.id_kategori=tb_tempat.id_kategori AND tb_informasi.id_informasi=tb_tempat.id_informasi ORDER BY tb_tempat.id_tempat ASC";
            $rows = $db->get_results($sql);
            
            foreach($rows as $row):?>  
                
                <tr>
                    <td><?=++$no?></td>
                    <td width="100px"><img class="thumbnail" height="80" src="assets/images/informasi/<?=$row->gambar;?>"></td>
                    <td><?=$row->nama_tempat?></td>
                    <td><?=$row->nama_kategori?></td>
                    <td><?=$row->lat?></td>
                    <td><?=$row->lng?></td>
                    <td><?=$row->lokasi?></td>
                    <td><?=$row->kondisi?></td>
                    <td class="nw">
                        <a class="btn btn-xs btn-primary" href="?m=tempat_ubah&ID=<?=$row->id_tempat?>">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a class="btn btn-xs btn-danger" href="aksi.php?act=tempat_hapus&ID=<?=$row->id_tempat?>" onclick="return confirm('Hapus data?')">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
               
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

</div>

<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>

<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
    $('#drop').change(function(){

        var id_kategori = $('#drop').val()

             $.ajax({

            url :"kategoriii.php",
            method: "POST",
            data : {id_kategori:id_kategori},

            success:function(data){

                $('#tttt').html(data)
            }

        })
    });

     $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>