
<div class="page-header">
    <h1>Kelola Data Rambu Lalu Lintas</h1>
</div>

<div class="panel panel-info">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="tempat" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />            
                <a class="btn btn-success" href="?m=tempat"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>      
                <!-- <button class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>  -->       
                <a class="btn btn-primary" href="?m=tempat_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>

            <div class="form-group" style="margin-right: 20px">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="glyphicon glyphicon-align-justify"></i> Kategori Rambu Lalin
                            <span class="caret"></span>
                    </button>
                    
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <?=get_kategori2_option($_POST[id_kategori])?>
                    </ul>
                </div>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped bg-info">
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
        
        <?php
            $q = esc_field($_GET['q']);
                    
            // $sql = "SELECT tb_kategori.id_kategori, tb_informasi.id_informasi
            //     FROM tb_tempat
            //     INNER JOIN tb_kategori ON tb_kategori.id_kategori=tb_tempat.id_kategori
            //     INNER JOIN tb_informasi ON tb_informasi.id_informasi=tb_tempat.id_informasi
            //     WHERE nama_tempat LIKE '%$q%'
            //     ORDER BY id_tempat";
            $sql="SELECT * FROM tb_kategori,tb_informasi,tb_tempat WHERE tb_kategori.id_kategori=tb_tempat.id_kategori AND tb_informasi.id_informasi=tb_tempat.id_informasi ORDER BY tb_tempat.id_tempat";
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
                <a class="btn btn-xs btn-warning" href="?m=tempat_ubah&ID=<?=$row->id_tempat?>">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=tempat_hapus&ID=<?=$row->id_tempat?>" onclick="return confirm('Hapus data?')">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>

        <?php endforeach; ?>
        </table>
    </div>

</div>