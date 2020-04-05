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
                                <input class="form-control form-control-lg" type="text" placeholder="اسم رستوران">
                                <br>
                                <input class="form-control form-control-lg" type="text" placeholder="آدرس رستوران">
                                <br>
                                <div class="form-group">
                                    <label>استان</label>
                                    <select class="form-control "  id="select_province" style="width: 100%;"></select>
                                </div>
                                <div class="form-group">
                                    <label>شهر</label>
                                    <select class="form-control" id="select_city"  style="width: 100%;"></select>
                                </div>


                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>

                    <!-- left column -->
                    <div class="col-md-6">

                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Different Height</h3>
                            </div>
                            <div class="card-body">
                                <input class="form-control form-control-lg" type="text" placeholder=".input-lg">
                                <br>
                                <input class="form-control" type="text" placeholder="Default input">
                                <br>
                                <input class="form-control form-control-sm" type="text" placeholder=".input-sm">
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">عرض مختلف</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" class="form-control" placeholder=".col-3">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" placeholder=".col-4">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" placeholder=".col-5">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- Input addon -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">ورودی‌‌ها</h3>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="نام کاربری">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>

                                <h5 class="my-3">به همراه‌ آیکون</h5>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="ایمیل">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-dollar"></i>
                    </span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-ambulance"></i></div>
                                    </div>
                                </div>

                                <h5 class="my-4 mb-2">به همراه چک باکس و رادیو</h5>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><input type="radio"></span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->

                                <h5 class="mt-4 mb-2">به ‌همراه دکمه</h5>

                                <p>بزرگ: <code>.input-group.input-group-lg</code></p>

                                <div class="input-group input-group-lg mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            ارسال
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item"><a href="#">لینک 1</a></li>
                                            <li class="dropdown-item"><a href="#">لینک 2</a></li>
                                            <li class="dropdown-item"><a href="#">لینک 3</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="#">لینک 4</a></li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->

                                <p>معمولی</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-danger">ارسال</button>
                                    </div>
                                    <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->

                                <p>کوچیک <code>.input-group.input-group-sm</code></p>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control">
                                    <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">برو</button>
                  </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Horizontal Form -->
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">اجزای کلی</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>نوشته</label>
                                        <input type="text" class="form-control" placeholder="وارد کردن اطلاعات ...">
                                    </div>
                                    <div class="form-group">
                                        <label>نوشته غیرفعال</label>
                                        <input type="text" class="form-control" placeholder="وارد کردن اطلاعات ..." disabled>
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>متن</label>
                                        <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>متن غیرفعال</label>
                                        <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..." disabled></textarea>
                                    </div>

                                    <!-- input states -->
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> مقدار درست</label>
                                        <input type="text" class="form-control" id="inputSuccess" placeholder="وارد کردن اطلاعات ...">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> با اخطار</label>
                                        <input type="text" class="form-control" id="inputWarning" placeholder="وارد کردن اطلاعات ...">
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> با ارور</label>
                                        <input type="text" class="form-control" id="inputError" placeholder="وارد کردن اطلاعات ...">
                                    </div>

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="option1">
                                            <label class="form-check-label">چک باکس</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="option1" disabled>
                                            <label class="form-check-label">چک باکس غیرفعال</label>
                                        </div>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="option1">
                                            <label class="form-check-label">رادیو</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="option1" disabled>
                                            <label class="form-check-label">رادیو غیرفعال</label>
                                        </div>
                                    </div>

                                    <!-- select -->
                                    <div class="form-group">
                                        <label>انتخاب کنید</label>
                                        <select class="form-control">
                                            <option>گزینه 1</option>
                                            <option>گزینه 2</option>
                                            <option>گزینه 3</option>
                                            <option>گزینه 4</option>
                                            <option>گزینه 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>انتخاب کننده غیرفعال</label>
                                        <select class="form-control" disabled>
                                            <option>گزینه 1</option>
                                            <option>گزینه 2</option>
                                            <option>گزینه 3</option>
                                            <option>گزینه 4</option>
                                            <option>گزینه 5</option>
                                        </select>
                                    </div>

                                    <!-- Select multiple-->
                                    <div class="form-group">
                                        <label>چند انتخابی</label>
                                        <select multiple class="form-control">
                                            <option>گزینه 1</option>
                                            <option>گزینه 2</option>
                                            <option>گزینه 3</option>
                                            <option>گزینه 4</option>
                                            <option>گزینه 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>چند انتخابی غیرفعال</label>
                                        <select multiple class="form-control" disabled>
                                            <option>گزینه 1</option>
                                            <option>گزینه 2</option>
                                            <option>گزینه 3</option>
                                            <option>گزینه 4</option>
                                            <option>گزینه 5</option>
                                        </select>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Button trigger modal -->
    <button type="button" id="open_map" class="btn btn-primary" data-toggle="modal" data-target="#mapModal">
        مشخص کردن رستوران روی نقشه
    </button>
<!-- Modal -->
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
<script>
$(".sidebar-mini").addClass("pr-0");
$("#mapModal").attr("z");
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
mapboxgl.accessToken = 'pk.eyJ1IjoiZmFyYW1pciIsImEiOiJjazhicmtoY2MwZjduM21vM3V6dGV2azR2In0.dRpdQa9r7bWeVwtKBPsLUA';
mapboxgl.setRTLTextPlugin(
    'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.3/mapbox-gl-rtl-text.js',
    null,
    true // Lazy load the plugin
);
var map=new mapboxgl.Map({
   container:'map',
   style:'mapbox://styles/mapbox/streets-v11',
   center:[48.673974608911294, 31.31832284646164],
    zoom:12
});
console.log(map);
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
    .setLngLat([48.673974608911294,31.31832284646164])
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
},0)
</script>

<script>
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
})
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
            var options;
            for (j=0; j<cities.length; j++){
                if(cities[j].province === provinces){
                    options +="<option data-city-id="+ cities[j].id  +">"+ cities[j].name +"</option>";
                    $("#select_city").html(options);
                }
            }
        }
    </script>
<?php require_once("../footer.php"); ?>