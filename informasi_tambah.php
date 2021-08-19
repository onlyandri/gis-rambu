
<div class="page-header">
    <h1>Tambah Informasi</h1>
</div>

<div class="row">
    <div class="col-sm-6">

        <?php if($_POST) include'aksi.php'?>

        <form method="post" action="?m=informasi_tambah" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Informasi <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="judul_informasi" value="<?=$_POST[judul_informasi]?>"/>
            </div>
            <div class="form-group">
                <label>Gambar <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="gambar"/>
            </div>
            
            <div class="form-group">
                <label>Isi Informasi</label>
                <textarea class="mce" name="isi_informasi"><?=$_POST['isi_informasi']?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=informasi"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
        
    </div>
</div>