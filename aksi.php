
<?php

    require_once'functions.php';

    /** LOGIN */ 
    if ($mod=='adm/login')
    {
        $admin = esc_field($_POST['admin']);
        $pass = esc_field($_POST['pass']);

        $row = $db->get_row("SELECT * FROM tb_admin WHERE admin='$admin' AND pass='$pass'");
        if($row)
        {
            $_SESSION['adm/login'] = $row->admin;
            $_SESSION['status']    = "Online";
            redirect_js("/gis-rambu/?m=tempat");
        } else{
            print_msg("Salah kombinasi username dan password.");
        }          
    }  
    else if ($mod=='password')
    {
        $pass1 = $_POST[pass1];
        $pass2 = $_POST[pass2];
        $pass3 = $_POST[pass3];

        $row = $db->get_row("SELECT * FROM tb_admin WHERE admin='$_SESSION[admin]' AND pass='$pass1'");        
        if($pass1=='' || $pass2=='' || $pass3=='')
            print_msg('Field bertanda * harus diisi.');
        elseif(!$row)
            print_msg('Password lama salah.');
        elseif( $pass2 != $pass3 )
            print_msg('Password baru dan konfirmasi password baru tidak sama.');
        else{        
            $db->query("UPDATE tb_admin SET pass='$pass2' WHERE admin='$_SESSION[admin]'");                    
            print_msg('Password berhasil diubah.', 'success');
        }
    } 
    elseif($act=='logout')
    {
        unset($_SESSION['status']);
        header("location:/gis-rambu");
    }

/** PAGE */
elseif($mod=='page_ubah')
{
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    if($judul=='' || $isi=='' )
    {
        print_msg("Field yang bertanda * tidak boleh kosong!");
    }
    else
    {
        $db->query("UPDATE tb_page SET judul='$judul', isi='$isi' WHERE nama_page='$_GET[nama]'");                   
        print_msg("Data tersimpan", 'success');
    }
} 

    /** TEMPAT */    
    if($mod=='tempat_tambah')
    {
        $id_kategori = $_POST['id_kategori'];
        $id_informasi = $_POST['id_informasi'];
        $nama_tempat = $_POST['nama_tempat'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $lokasi = $_POST['lokasi'];
        $kondisi = $_POST['kondisi'];
        $keterangan = esc_field($_POST['keterangan']);

        if($nama_tempat=='' || $lat=='' || $lng=='' || $lokasi=='' || $kondisi=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {
            
            $db->query("INSERT INTO tb_tempat (id_tempat,id_kategori, id_informasi, nama_tempat, lat, lng, lokasi, kondisi, keterangan) 
                VALUES (NULL,'$id_kategori', '$id_informasi','$nama_tempat', '$lat', '$lng', '$lokasi', '$kondisi','$keterangan')");                       
            redirect_js("/gis-rambu/?m=tempat");
        }                    
    } 
    else if($mod=='tempat_ubah')
    {
        $id_kategori = $_POST['id_kategori'];
        $nama_tempat = $_POST['nama_tempat'];
        $id_informasi = $_POST['id_informasi'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $lokasi = $_POST['lokasi'];
        $kondisi = $_POST['kondisi'];
        $keterangan = esc_field($_POST['keterangan']);

        if($nama_tempat=='' || $lat=='' || $lng=='' || $lokasi=='' || $kondisi=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {   
            $db->query("UPDATE tb_tempat SET id_kategori='$id_kategori', id_informasi='$id_informasi',nama_tempat='$nama_tempat', lat='$lat', lng='$lng', lokasi='$lokasi', kondisi='$kondisi', keterangan='$keterangan' WHERE id_tempat='$_GET[ID]'");
            redirect_js("/gis-rambu/?m=tempat");
        }    
    } 
    else if ($act=='tempat_hapus')
    {
        hapus_gambar($_GET['ID']);
        $db->query("DELETE FROM tb_tempat WHERE id_tempat='$_GET[ID]'");
        header("location:/gis-rambu/?m=tempat");
    }

    /** GAMBAR */    
    if($mod=='galeri_tambah')
    {
        $id_tempat = $_POST['id_tempat'];
        $gambar = $_FILES['gambar'];
        $nama_galeri = $_POST['nama_galeri'];
        $ket_galeri = $_POST['ket_galeri'];

        if($id_tempat=='' || $gambar[name]=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {            
            $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);

            $img = new SimpleImage($gambar['tmp_name']);
            if($img->get_width()>800)
                $img->fit_to_width(800);
            if($img->get_height()>600);
            $img->fit_to_height(600);
            $img->save('assets/images/galeri/' . $file_name);
            $img->thumbnail(180, 120);
            $img->save('assets/images/galeri/small_' . $file_name);

            $db->query("INSERT INTO tb_galeri (id_tempat, gambar, nama_galeri, ket_galeri) 
                VALUES('$id_tempat', '$file_name', '$nama_galeri', '$ket_galeri')");                       
            redirect_js("/gis-rambu/?m=galeri");
        }                    
    } 
    else if($mod=='galeri_ubah')
    {
        $id_tempat = $_POST['id_tempat'];
        $gambar = $_FILES['gambar'];
        $nama_galeri = $_POST['nama_galeri'];
        $ket_galeri = $_POST['ket_galeri'];

        if($id_tempat=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {  
            if($gambar[tmp_name]!='')
            {
                hapus_galeri($_GET['ID']);
                $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
                $img = new SimpleImage($gambar['tmp_name']);
                if($img->get_width()>800)
                    $img->fit_to_width(800);
                if($img->get_height()>600);
                $img->fit_to_height(600);
                $img->save('assets/images/galeri/' . $file_name);
                $img->thumbnail(180, 120);
                $img->save('assets/images/galeri/small_' . $file_name);
                $sql_gambar = ", gambar='$file_name'";
            }
            $db->query("UPDATE tb_galeri SET id_tempat='$id_tempat', nama_galeri='$nama_galeri' $sql_gambar, ket_galeri='$ket_galeri' WHERE id_galeri='$_GET[ID]'");
            redirect_js("/gis-rambu/?m=galeri");
        }    
    } 
    else if ($act=='galeri_hapus')
    {
        hapus_galeri($_GET['ID']);
        $db->query("DELETE FROM tb_galeri WHERE id_galeri='$_GET[ID]'");
        header("location:/gis-rambu/?m=galeri");
    }                        

    /** KATEGORI */    
    if($mod=='kategori')
    {
        $nama_kategori = $_POST['nama_kategori'];
        if($nama_kategori=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {            
            $db->query("INSERT INTO tb_kategori (nama_kategori) 
                VALUES('$nama_kategori')");                       
            redirect_js("/gis-rambu/?m=kategori");
        }                    
    } 
    else if ($act=='kategori_edit')
    {
        // edit_kategori($_GET['id_kategori']);
        $db->query("UPDATE FROM tb_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$_GET[ID]'");
        header("location:/gis-rambu/?m=kategori");
    }
    else if ($act=='kategori_hapus')
    {
        // hapus_kategori($_GET['id_kategori']);
        $db->query("DELETE FROM tb_kategori WHERE id_kategori='$_GET[ID]'");
        header("location:/gis-rambu/?m=kategori");
    }
    
    /** INFORMASI */    
    if($mod=='informasi_tambah')
    {
        $judul_informasi = $_POST['judul_informasi'];
        $gambar = $_FILES['gambar'];
        $isi_informasi = $_POST['isi_informasi'];

        if($judul_informasi=='' || $gambar[name]=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {            
            $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);

            $img = new SimpleImage($gambar['tmp_name']);
            if($img->get_width()>800)
                $img->fit_to_width(800);
            if($img->get_height()>600);
            $img->fit_to_height(600);
            $img->save('assets/images/informasi/' . $file_name);
            $img->thumbnail(180, 120);
            $img->save('assets/images/informasi/small_' . $file_name);

            $db->query("INSERT INTO tb_informasi (judul_informasi, gambar, isi_informasi) 
                VALUES('$judul_informasi', '$file_name', '$isi_informasi')");                       
            redirect_js("/gis-rambu/?m=informasi");
        }                     

    } 
    else if($mod=='informasi_ubah')
    {
        $judul_informasi = $_POST['judul_informasi'];
        $gambar = $_FILES['gambar'];
        $isi_informasi = $_POST['isi_informasi'];

        if($judul_informasi=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {  
            if($gambar[tmp_name]!='')
            {
                hapus_informasi($_GET['ID']);
                $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
                $img = new SimpleImage($gambar['tmp_name']);
                if($img->get_width()>800)
                    $img->fit_to_width(800);
                if($img->get_height()>600);
                $img->fit_to_height(600);
                $img->save('assets/images/informasi/' . $file_name);
                $img->thumbnail(180, 120);
                $img->save('assets/images/informasi/small_' . $file_name);
                $sql_gambar = ", gambar='$file_name'";
            }
            $db->query("UPDATE tb_informasi SET judul_informasi='$judul_informasi' $sql_gambar, isi_informasi='$isi_informasi' WHERE id_informasi='$_GET[ID]'");
            redirect_js("/gis-rambu/?m=informasi");
        }    
    } 
    else if ($act=='informasi_hapus')
    {
        hapus_galeri($_GET['ID']);
        $db->query("DELETE FROM tb_informasi WHERE id_informasi='$_GET[ID]'");
        header("location:/gis-rambu/?m=informasi");
    }                   

    /** PENGAJUAN */    
    if($mod=='pengajuan_tambah')
    {
        $nama_tempat = $_POST['nama_tempat'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $lokasi = $_POST['lokasi'];
        $keterangan = $_POST['keterangan'];
        if($nama_tempat=='' || $lat=='' || $lng=='' || $lokasi=='' || $keterangan=='')
        {
            print_msg("Field bertanda * tidak boleh kosong!");
        }
        else
        {
            $db->query("INSERT INTO tb_pengajuan (nama_tempat, lat, lng, lokasi, status, keterangan) 
                VALUES ('$nama_tempat', '$lat', '$lng', '$lokasi', 'Tertunda', '$keterangan')");   
            echo '<div class="alert alert-success" role="alert">Data berhasil diajukan, tunggu admin memprosesnya !!</div>';
        }                    

    } 
    else if ($act=='pengajuan_selesai')
    {
        $db->query("UPDATE tb_pengajuan SET status = 'Selesai' WHERE id_pengajuan='$_GET[ID]'");
        header("location:/gis-rambu/?m=pengajuan_list");
    } 
    else if ($act=='pengajuan_hapus')
    {
        $db->query("DELETE FROM tb_pengajuan WHERE id_pengajuan='$_GET[ID]'");
        header("location:/gis-rambu/?m=pengajuan_list");
    }