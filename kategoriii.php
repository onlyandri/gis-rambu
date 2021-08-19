<?php

if(isset($_POST["id_kategori"])){



	$conn = mysqli_connect("localhost","root","","gis-rambu");
	$output ='';

	if($_POST['id_kategori'] == 0){

		$qr = "SELECT * from tb_tempat a join tb_kategori b on a.id_kategori = b.id_kategori join tb_informasi c on a.id_informasi = c.id_informasi order by a.id_tempat";
	}
	else{
		$qr = "SELECT * from tb_tempat a join tb_kategori b on a.id_kategori = b.id_kategori join tb_informasi c on a.id_informasi = c.id_informasi where a.id_kategori =".$_POST["id_kategori"]."";
	}
	
	$result = mysqli_query($conn, $qr);

	if(mysqli_num_rows($result) > 0 ){

		// $output .=' <div class="table-responsive" >
		//  <table id="example1" class="table table-bordered table-hover table-striped bg-info">
  //       <thead>
  //           <tr class="nw">
  //               <th>No</th>
  //               <th>Gambar</th>
  //               <th>Nama Tempat</th>
  //               <th>Kategori</th>
  //               <th>Latitude</th>
  //               <th>Longitude</th>
  //               <th>Lokasi</th>
  //               <th>Kondisi</th>
  //               <th>Aksi</th>
  //           </tr>
  //       </thead>';
		$i = 0;
		while($row = mysqli_fetch_array($result)){
			$i++;
			$nama_tempat = $row["nama_tempat"];
			
			$lat = $row["lat"];
			$lng = $row["lng"];
			$lokasi = $row["lokasi"];
			$kondisi = $row["kondisi"];
			$gambar = $row["gambar"];
			$nama_kategori = $row["nama_kategori"];
			$id_tempat = $row['id_tempat'];			


			$output .='
			<tr>
			<td>'.$i.'</td>
            <td width="100px"><img class="thumbnail" height="80" src="assets/images/informasi/'.$gambar.'"></td>
            <td>'.$nama_tempat.'</td>
             <td>'.$nama_kategori.'</td>
            <td>'.$lat.'</td>
            <td>'.$lng.'</td>
            <td>'.$lokasi.'</td>
            <td>'.$kondisi.'</td>
            <td class="nw">
            <a class="btn btn-xs btn-warning" href="?m=tempat_ubah&ID='.$id_tempat.'">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=tempat_hapus&ID='.$id_tempat.'" onclick="return confirm(`Hapus data?`)">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
            </tr>';
		}

		// $output .='</table>
		// </div>';

	}

	else{

		$output .=' <tr>
			<td>not found</td>
           <td>not found</td>
            <td>not found</td>
            <td>not found</td>
           <td>not found</td>
           <td>not found</td>
           <td>not found</td>
           <td>not found</td>
            <td>not found</td>
            </tr>';

			}


				echo $output;


}
?>