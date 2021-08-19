
<div class="page-header">
    <h1>Kelola Data Kategori</h1>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-info">

            <!-- <div class="panel-heading">        
                <form class="form-inline">
                    <input type="hidden" name="m" value="tempat" />
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>"/>            
                        <button class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>            
                    </div>
                </form>
            </div> -->

            <div class="table-responsive">
                <table id="data-kategori" class="table table-bordered table-hover table-striped bg-info">
                    <thead>
                        <tr class="nw">
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php
                        $q = esc_field($_GET['q']);

                        $sql = "SELECT * FROM tb_kategori ORDER BY id_kategori";
                        $rows = $db->get_results($sql);

                        foreach($rows as $row):?>
                        
                        <tr>
                            <td><?=++$no?></td>
                            <td><?=$row->nama_kategori?></td>
                            <td class="nw">
                                <a class="btn btn-xs btn-warning" id="btn-edit-kategori" data-id="<?=$row->id_kategori?>" data-nama="<?=$row->nama_kategori?>"><span class="glyphicon glyphicon-edit"></span></a>
                                <a class="btn btn-xs btn-danger" href="aksi.php?act=kategori_hapus&ID=<?=$row->id_kategori?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    <?php endforeach;    ?>

                </table>
            </div>

        </div>
    </div>

    <div class="col-sm-6">
        <form method="post" action="?m=kategori" enctype="multipart/form-data"> 
            
            <?php if($_POST) include'aksi.php' ?>
            
            <div class="form-group">
                <label>Nama Kategori <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_kategori" value="<?=$_POST['nama_kategori']?>"/>
            </div>
            <div class="form-group">
                <button class="btn btn-info"><span class="glyphicon glyphicon-save"></span> Simpan</button>
            </div>        
        </form>
    </div>
</div>



  <!-- Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form action="kategori_ubah.php" method="POST" enctype="multipart/form-data"> 
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Nama Kategori <span class="text-danger">*</span></h4>
            </div>
            <div class="modal-body">
                <input id="id_kategori_edit" class="form-control" type="hidden" name="id_kategori_edit"/>
                <input id="nama_kategori_edit" class="form-control" type="text" name="nama_kategori_edit"/>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" >Simpan Data</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">
    $('#data-kategori').on('click','#btn-edit-kategori',function () {
        $('#id_kategori_edit').val($(this).data('id'));
        $('#nama_kategori_edit').val($(this).data('nama'));
        $('#addModal').modal('show');
    })
</script>