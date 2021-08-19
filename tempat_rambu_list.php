
<div class="page-header">
    <h1>Data Rambu Lalu Lintas</h1>
</div>

<div class="panel panel-info">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="tempat_rambu_list" />
            <div class="form-group row">

                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" style="width: 880px" />   
                </div>

                <div class="col-sm-2" style="margin-left: -20px">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="glyphicon glyphicon-align-justify"></i> Kategori 
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?=get_kategori2_option($_POST[id_kategori])?>
                        </ul>
                    </div>
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
                    <th>Lat</th>
                    <th>Lng</th>
                    <th>Lokasi</th>
                    <th>Kondisi</th>
                </tr>
            </thead>
            <?php
                $q = esc_field($_GET['q']);

                // $sql = "SELECT tb_kategori.*, tb_tempat.* 
                // FROM tb_tempat
                // INNER JOIN tb_kategori ON tb_kategori.id_kategori=tb_tempat.id_kategori
                // WHERE nama_tempat LIKE '%$q%'
                // ORDER BY id_tempat";

                $sql="SELECT * FROM tb_kategori,tb_informasi,tb_tempat WHERE tb_kategori.id_kategori=tb_tempat.id_kategori AND tb_informasi.id_informasi=tb_tempat.id_informasi ORDER BY tb_tempat.id_tempat";
                
                $rows = $db->get_results($sql);

            foreach($rows as $row):?>
                
                <tr>
                    <td><?=++$no?></td>
                    <td><img class="thumbnail" height="60" src="assets/images/tempat/small_<?=$row->gambar?>" /></td>
                    <td><?=$row->nama_tempat?> <a href="?m=tempat_detail&ID=<?=$row->id_tempat?>" title="Lihat Tempat"><i class="glyphicon glyphicon-search" style="color: white;"></i></a></td>
                    <td><?=$row->nama_kategori?></td>
                    <td><?=$row->lat?></td>
                    <td><?=$row->lng?></td>
                    <td><?=$row->lokasi?></td>
                    <td><?=$row->kondisi?></td>
                </tr>
                
            <?php endforeach;    ?>
        </table>
    </div>
</div>