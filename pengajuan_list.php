
<style type="text/css">
    .not-active { 
        pointer-events: none; 
        cursor: default; 
    } 
</style> 

<div class="page-header">
    <h1>Data Pengaduan</h1>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            
            <div class="panel-heading">        
                <form class="form-inline">
                    
                    <input type="hidden" name="m" value="pengajuan_list" />
                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>"/>            
                        <a class="btn btn-success" href="?m=pengajuan_list"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>  
                        <!-- <button class="btn btn-info" href="?m=pengajuan_list"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>  -->         
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped bg-info">
                    
                    <thead>
                        <tr class="nw">
                            <th>No</th>
                            <th>Nama Tempat</th>
                            <th>Lat</th>
                            <th>Lng</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php

                        $q = esc_field($_GET['q']);

                        $sql = "SELECT * FROM tb_pengajuan WHERE nama_tempat LIKE '%$q%' 
                                ORDER BY id_pengajuan";
                        $rows = $db->get_results($sql);

                        foreach($rows as $row):?>
                
                        <tr>
                            <td><?=++$no?></td>
                            <td><?=$row->nama_tempat?></td>
                            <td><?=$row->lat?></td>
                            <td><?=$row->lng?></td>
                            <td><?=$row->lokasi?></td>
                            <td><?=$row->keterangan?></td>
                            <td><?=$row->status?></td>
                            <td class="nw">
                                <!-- <a class="btn btn-xs btn-primary <?php if($row->status == 'Selesai'){ ?> not-active <?php } ?>" <?php if($row->status == 'Selesai'){ ?> disabled <?php } ?> href="aksi.php?act=pengajuan_selesai&ID=<?=$row->id_pengajuan?>" onclick="return confirm('Pengajuan Selesai?')">
                                    <span class="glyphicon glyphicon-check"></span>
                                </a> -->
                                <a class="btn btn-xs btn-danger" href="aksi.php?act=pengajuan_hapus&ID=<?=$row->id_pengajuan?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>

                    <?php endforeach;    ?>

                </table>
            </div>
        </div>
    </div>
</div>
