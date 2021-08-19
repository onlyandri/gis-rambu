
<?php
    $row = $db->get_row("SELECT * FROM tb_informasi WHERE id_informasi='$_GET[ID]'"); 
?>

<div class="page-header">
    <h1>Ubah Informasi</h1>
</div>

<div class="row">
    <div class="col-sm-6">

        <?php if($_POST) include'aksi.php'?>

        <form method="post" action="?m=informasi_ubah&ID=<?=$row->id_informasi?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Informasi</label>
                <input class="form-control" type="text" name="judul_informasi" value="<?=$row->judul_informasi?>"/>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input class="form-control" type="file" name="gambar"/>
                <p class="help-block">Kosongkan jika tidak mengubah gambar</p>
                <img class="thumbnail" src="assets/images/informasi/small_<?=$row->gambar?>" height="60" />
            </div>
            <div class="form-group">
                <label>Isi Informasi</label>
                <textarea class="mce" name="isi_informasi"><?=$row->isi_informasi?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=informasi"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
        
    </div>
</div>