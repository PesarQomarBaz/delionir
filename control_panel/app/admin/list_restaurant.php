<?php require_once("../header.php"); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?=$config['dir']?>plugins/datatables/dataTables.bootstrap4.css">

<style>
.last_td{
    display: flex;
    justify-content: space-around;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">جدول</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="list_restaurant_table" class="table table-bordered table-striped">
                            <?php
                            $restaurants=list_restaurant($conn);

                            ?>
                            <thead>

                            <tr>
                                <th></th>
                                <th>نام رستوران</th>
                                <th class="d-none d-md-table-cell">آدرس رستوران</th>
                                <th>شماره تماس</th>
                                <th class="d-none d-lg-table-cell">توضیحات</th>
                                <th class="d-none d-md-table-cell">هزینه پیک</th>
                                <th class="d-none d-md-table-cell">مدیر رستوران</th>
                                <th></th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php foreach ($restaurants as $restaurant):?>
                            <tr>
                                <td><?=$restaurant['restaurant_id']?></td>
                                <td><?=$restaurant['restaurant_name']?></td>
                                <td class="d-none d-md-table-cell"><?=$restaurant['restaurant_address']?></td>
                                <td><?=$restaurant['restaurant_number']?></td>
                                <td class="d-none d-lg-table-cell"></td>
                                <td class="d-none d-md-table-cell"><?=$restaurant['restaurant_delivery_fee']?></td>
                                <td class="d-none d-md-table-cell"><?php
                                    $admin_info=admin_info($conn,$restaurant['restaurant_admin']);
                                    echo $admin_info['name']." " .$admin_info['family'];
                                ?></td>
                                <td class="last_td">
                                    <a href="#"><i class="fa fa-edit fa-lg"></i></a>
                                </td>
                                <td class="last_td">
                                    <a href="#"><i class="fa fa-minus fa-lg"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>

                            <tfoot>
                            <tr>
                                <th></th>
                                <th>نام رستوران</th>
                                <th class="d-none d-md-table-cell">آدرس رستوران</th>
                                <th>شماره تماس</th>
                                <th class="d-none d-lg-table-cell">توضیحات</th>
                                <th class="d-none d-md-table-cell">هزینه پیک</th>
                                <th class="d-none d-md-table-cell">مدیر رستوران</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<!-- /.content-wrapper -->
</div>

<script src="<?=$config['dir']?>plugins/jquery/jquery.min.js"></script>
<script src="<?=$config['dir']?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=$config['dir']?>plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
$(function () {
var table = $('#list_restaurant_table').DataTable({
    "language": {
        "paginate": {
            "next": "بعدی",
            "previous" : "قبلی"
        }
    },
    "info" : false,
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "autoWidth": true,
    "scrollX": true,
    responsive: {
        details: false
    },
    "columnDefs": [
        { "orderable": false, "targets": 7 }
    ]
});
// Get the column API object
// var column = table.column( $(this).attr('data-column') );

});
$(window).resize(function() {
if (window.matchMedia('(max-width: 768px)').matches) {
    // functionality for screens smaller than 1200px
    $
}
});

</script>
<?php require_once("../footer.php"); ?>