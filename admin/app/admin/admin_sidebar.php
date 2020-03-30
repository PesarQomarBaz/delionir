<?php ?>
<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?=$home?>#" class="d-block">حسام موسوی</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?=$home?>#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            داشبوردها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=$home?>./index.html" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>داشبورد اول</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$home?>./index2.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>داشبورد دوم</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$home?>./index3.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>داشبورد سوم</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/delionir/admin/app/admin/index.php" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            افزودن رستوران
                            <span class="right badge badge-danger">جدید</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>