
<div class="page-header">
    <h1>Data Informasi</h1>
</div>

<div class="panel panel-info">

    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="informasi" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />
                <a class="btn btn-success" href="?m=informasi"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
                <!-- <button class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>  -->            
                <a class="btn btn-primary" href="?m=informasi_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>   
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped bg-info">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Isi Informasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <?php

                $q = esc_field($_GET['q']);

                $sql = "SELECT * FROM tb_informasi 
                        WHERE judul_informasi LIKE '%$q%' 
                        ORDER BY id_informasi";

                $rows = $db->get_results($sql);


                foreach($rows as $row):?>
                    <tr>
                        <td><?=++$no?></td>
                        <td width="100px"><img class="thumbnail" height="70" src="assets/images/informasi/small_<?=$row->gambar?>" /></td>
                        <td width="200px"><?=$row->judul_informasi?></td>
                        <td><?=$row->isi_informasi?></td>
                        <td class="nw">
                            <a class="btn btn-xs btn-warning" href="?m=informasi_ubah&ID=<?=$row->id_informasi?>"><span class="glyphicon glyphicon-edit"></span></a>
                            <a class="btn btn-xs btn-danger" href="aksi.php?act=informasi_hapus&ID=<?=$row->id_informasi?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
            
            <?php endforeach;    ?>

        </table>
    </div>

</div>