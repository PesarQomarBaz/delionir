<?php require_once ("../header.php");?>


<style>
.coordinates {
    background: rgba(255, 255, 255, 0.5);
    color: #000;
    position: absolute;
    bottom: 40px!important;
    left: 10px!important;
    padding: 5px 10px!important;
    margin: 0!important;
    font-size: 11px!important;
    line-height: 18px!important;
    border-radius: 3px;
    display: none;
}
</style>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-md-6 ">

                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">اطلاعات رستوران</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>نام رستوران</label>
                                    <input class="form-control form-control-lg" type="text">
                                </div>
                                <div class="form-group">
                                    <label>آدرس</label>
                                    <input class="form-control form-control-lg" type="text">
                                </div>
                                <div class="form-group">
                                    <label>استان</label>
                                    <select class="form-control "  id="select_province" style="width: 100%;"></select>
                                </div>
                                <div class="form-group">
                                    <label>شهر</label>
                                    <select class="form-control" id="select_city"  style="width: 100%;"></select>
                                </div>
                                <div class="form-group">
                                    <label>توضیحات</label>
                                    <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..."></textarea>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <!-- Button trigger map modal -->
                                    <button type="button" id="open_map" class="btn btn-primary" data-toggle="modal" data-target="#mapModal">
                                        مشخص کردن رستوران روی نقشه
                                    </button>
                                    <!-- Button trigger signUpAdminModal modal -->
                                    <button type="button" id="openSignUpAdminModal" class="btn btn-primary" data-toggle="modal" data-target="#signUpAdminModal">
                                        وارد کردن اطلاعات مدیر رستوران
                                    </button>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<!-- map Modal -->
<div class="modal position-absolute fade " id="mapModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document" style="max-width:1200px ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">مکان رستوران را انتخاب کنید</h5>
                <button type="button" style="margin: -1rem auto -1rem  -1rem;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id='map' class="ltr" style='position: relative; width: 100%; height: 500px;'></div>
                <pre id="coordinates" class="coordinates"></pre>
                <input type="hidden" id="lng">
                <input type="hidden" id="lat">
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn m-1 btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="saveCoordinates" class="btn  m-1 btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

    <!-- signUp restaurant admin Modal -->
    <div class="modal position-absolute fade " id="signUpAdminModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document" style="max-width:1200px ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">مشخصات مدیر رستوران را وارد کنید</h5>
                    <button type="button" style="margin: -1rem auto -1rem  -1rem;" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label>نام</label>
                           <input class="form-control" type="text">
                       </div>
                       <div class="form-group">
                           <label>شماره تماس</label>
                           <input class="form-control" type="text">
                       </div>
                       <div class="form-group">
                           <label>ایمیل</label>
                           <input class="form-control" type="text">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label>شماره تماس</label>
                           <input class="form-control" type="text">
                       </div>
                       <div class="form-group">
                           <label>رمز عبور</label>
                           <input class="form-control" type="text">
                       </div>
                       <div class="form-group">
                           <label for="exampleInputFile">ارسال فایل</label>
                           <div class="input-group">
                               <div class="custom-file">
                                   <input type="file" class="custom-file-input" id="exampleInputFile">
                                   <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                               </div>
                               <div class="input-group-append">
                                   <span class="input-group-text" id="">Upload</span>
                               </div>
                       </div>
                   </div>
                   </div>
                </div>

                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn m-1 btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="saveCoordinates" class="btn  m-1 btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


<script>
$(".sidebar-mini").addClass("pr-0");
$("#mapModal").attr("z");
</script>


<script  type="text/javascript" src="../../dist/js/iranLocalityDatabase/cpc.js"></script>
<script>
    $("#select_province").change(function () {
        var province_id =$(this).find(":selected").attr("data-provinces-id");
        add_city(parseInt(province_id));
    });
    add_provinces();

    function add_provinces() {
        var iran = countries[0];
        var provinces_name;
        var provinces_id;
        for (i=0; i<provinces.length; i++){
            provinces_name = provinces[i].name;
            provinces_id = provinces[i].id;
            $("#select_province").append("<option data-provinces-id="+provinces_id+">"+ provinces_name +"</option>");
        }
    }
    function add_city(provinces) {
        var options="";
        for (j=0; j<cities.length; j++){
            if(cities[j].province === provinces){
                options +="<option data-city-id="+ cities[j].id  +">"+ cities[j].name +"</option>";
                $("#select_city").html(options);
            }
        }
    }
</script>
<!-- /.content-wrapper -->


<!--    mapbox-gl-geocoder -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
<link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
    type="text/css"
/>


<!--    mapbox-gl-geocoder -->
<script>
    cityLatitude=0;
    citylongitude=0;
    $("#select_city").change(function () {
        var city_id =$(this).find(":selected").attr("data-city-id");
        var n=0;
        while ( n < cities.length){
            if(city_id == cities[n].id){
                cityLatitude=cities[n].latitude;
                citylongitude=cities[n].longitude;
                map=customMapbox(citylongitude,cityLatitude);
                console.log(5);
            }
            n++;
        }



    });

    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFyYW1pciIsImEiOiJjazhicmtoY2MwZjduM21vM3V6dGV2azR2In0.dRpdQa9r7bWeVwtKBPsLUA';
    mapboxgl.setRTLTextPlugin(
        'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.3/mapbox-gl-rtl-text.js',
        null,
        true // Lazy load the plugin
    );

    function customMapbox(longitude,Latitude) {
        var map=new mapboxgl.Map({
            container:'map',
            style:'mapbox://styles/mapbox/streets-v11',
            center:[longitude,Latitude],
            zoom:12
        });
        var lngLat;
        var marker;
        var fullScreen=new mapboxgl.FullscreenControl();
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            marker: false,
            mapboxgl: mapboxgl
        });

//default marker
        marker= new mapboxgl.Marker({
            draggable: true
        })
            .setLngLat([longitude,Latitude])
            .addTo(map);
        marker.on('dragend', onDragEnd);
//default marker


        geocoder.on('result', (e) => {
            if(marker){
                marker.remove();
            }
            lngLat =e.result.center;
            lng=lngLat[0];
            lat=lngLat[1];
            marker= new mapboxgl.Marker({
                draggable: true
            })
                .setLngLat([lng,lat])
                .addTo(map);
            marker.on('dragend', onDragEnd);
        }); // vaghti ke search ba movafaqiyat anjam shod


        map.addControl(geocoder);
        map.addControl(fullScreen);

        var coordinates = document.getElementById('coordinates');

        function onDragEnd() {
            var latlng = marker.getLngLat();
            coordinates.style.display = 'block';
            $("#lng").val(latlng.lng);
            $("#lat").val(latlng.lat);
            coordinates.innerHTML =
                'Longitude: ' + latlng.lng + '<br />Latitude: ' + latlng.lat;
        }


        window.setInterval(function () {
            map.resize();
        },0);


        $("#saveCoordinates").click(function () {
            var endlng=$("#lng").val();
            var endlat=$("#lat").val();
            var endlngLat= [endlng,endlat];
            if(endlat && endlng){
                Swal.fire(
                    'موقعیت رستوران ثبت شد',
                    'مختصات ان برابر با'+ endlngLat + '',
                    'success'
                )
            }
        });
            return map;
    }
</script>

<?php require_once("../footer.php"); ?>