
<div class="page-header row"> 
    <div class="col-sm-10">
        <h1>Tempat Rambu Lalu Lintas</h1>
    </div>

    <div class="col-sm-2">
        <div class="dropdown">
            <button class="btn btn-info btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <!-- default -->
                Kategori Rambu LaLin
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?=get_kategori3_option($_POST[id_kategori])?>
            </ul>
        </div>
    </div>
</div>

<div id="map" style="height: 500px;"></div>

<script>

    function tampilDekat(){
        getCurLocation();

        map_dekat = new google.maps.Map(document.getElementById('map'), {
            zoom: <?=get_option('default_zoom')?>,
            center: {
                lat : default_lat, 
                lng : default_lng
            }
        });
        var id_kategori = '<?= $_GET[ID] ?>';
        if (id_kategori == '') {
            var data =  <?=json_encode($db->get_results("SELECT * FROM tb_tempat t join tb_informasi i on t.id_informasi = i.id_informasi"))?>;
        }else{
            var data =  <?=json_encode($db->get_results("SELECT * FROM tb_tempat t join tb_informasi i on t.id_informasi = i.id_informasi join tb_kategori k on t.id_kategori = k.id_kategori  WHERE t.id_kategori = '$_GET[ID]'"))?>;
        }

        $.each(data, function(k, v){
            var pos = {
                lat : parseFloat(v.lat),
                lng : parseFloat(v.lng)
            };
            var contentString = '<img src="assets/images/tempat/'+v.gambar+'" style="width:150px; height:100px"><h5 align="center">'  + v.nama_tempat + '</h5>' + 
            '<p align="center"><a href="?m=tempat_detail&ID=' + v.id_tempat + '" class="link_detail btn btn-info"><i class="glyphicon glyphicon-info-sign"></i>Lihat Detail</a>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var marker = new google.maps.Marker({
                position: pos,
                map: map_dekat,
                animation: google.maps.Animation.DROP
            });         
            marker.addListener('click', function() {
                infowindow.open(map_dekat, marker);
            });
        });    
    }  

    $(function(){
        tampilDekat();
    })
    
</script>

<!-- <div id='map' style='width: 400px; height: 300px;'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicmFpc3NhYW1lbGlhIiwiYSI6ImNrN3poam8xYjA0Y2szbHNiYTRxYnd3b2EifQ.pqdyGArH7frWxrFjv5TDhQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11'
    });
    </script> -->