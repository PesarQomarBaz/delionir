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
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="../home/index.php">پنل ادمین</a></li>
                            <li class="breadcrumb-item active">اضافه کردن رستوران</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">افزودن رستوران</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>نام رستوران</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>آدرس رستوران</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group d-flex flex-row justify-content-between">
                                <div class="col-md-2 p-0">
                                    <label>مبلغ پست </label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" dir="ltr">
                                    </div>
                                </div>
                                <div class="col-md-2 p-0">
                                    <label>شماره تماس رستوران </label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" dir="ltr" class="form-control">
                                    </div>
                                </div>

                                <!-- /.input group -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                توضیحات رستوران
                                <small></small>
                            </h3>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="mb-3">
                                <div id="editor"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Button trigger modal -->
            <button type="button" id="open_map" class="btn btn-primary" data-toggle="modal" data-target="#mapModal">
                مشخص کردن رستوران روی نقشه
            </button>


        </section>

        <!-- /.content -->
    </div>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<?php require_once("../footer.php"); ?>