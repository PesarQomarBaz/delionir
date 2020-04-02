<?php
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <?php
                    $url=$_SERVER['REQUEST_URI'];
                    $explode_url=explode('/',$url);
                    $mode='';
                    $job='';
                    $mode=$explode_url[4];
                    $job=$explode_url[5];
                    switch ($mode){
                        case 'admin': $mode_name='پنل ادمین';break;
                        case 'restaurant': $mode_name='پنل رستوران';break;
                        default:'';break;
                    }
                    switch ($job){
                        case 'add_restaurant.php':$job_name='افزودن رستوران';break;
                        case 'list_restaurant.php':$job_name='لیست رستوران';break;
                        default:$job_name='';break;
                    }

                    ?>
                    <li class="breadcrumb-item"><a href="index.php"><?=$mode_name?> </a></li>
                    <li class="breadcrumb-item active"> <?=$job_name?> </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

