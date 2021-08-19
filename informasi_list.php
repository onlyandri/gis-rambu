
<div class="page-header">
    <h1>Informasi</h1>
</div>

<div class="panel panel-info">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="informasi_list" />
            <div class="form-group row">
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" style="width: 1100px" />   
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
                <th>Judul</th>
                <th>Isi Informasi</th>
            </tr>
        </thead>
        <?php
            $q = esc_field($_GET['q']);

            $sql = "SELECT *
            FROM tb_informasi
            WHERE judul_informasi LIKE '%$q%'
            ORDER BY id_informasi";
            $rows = $db->get_results($sql);

        foreach($rows as $row):?>

            <tr>
                <td><?=++$no?></td>
                <td width="100px"><img class="thumbnail" height="70" src="assets/images/informasi/small_<?=$row->gambar?>" /></td>
                <td width="200px"><?=$row->judul_informasi?></td>
                <td><?=$row->isi_informasi?></td>
            </tr>
            
        <?php endforeach;    ?>
    </table>
</div>
</div>