<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- User Profile-->
    <div class="user-profile">
        <div class="user-pro-body">
            <div><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
            <div class="dropdown">
                <a href="javascript:void(0)" class=" u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $admin_name; ?> </a>
            </div>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
        <li> <a class="waves-effect waves-dark" href="?=dashboard" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Dashboard</span></a></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-notebook"></i><span class="hide-menu">Invoice<span class="badge rounded-pill bg-cyan ms-auto">4</span></span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="?page=add_invoice">Create Invoice</a></li>
                    <li><a href="?page=invoice">Manage Invoice</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Product</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="?page=add_product">Create Product</a></li>
                    <li><a href="?page=product">Manage Product</a></li>
                </ul>
            </li>
            <?php if($admin_role=='M'){
            ?>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Statement</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="?page=daily_statement">Daily Statement</a></li>
                    <li><a href="?page=weekly_statement">Weekly Statement</a></li>
                    <li><a href="?page=monthly_statement">Monthly Statement</a></li>
                    <li><a href="?page=yearly_statement">Yearly Statement</a></li>
                    <li><a href="?page=all_statement">All Statement</a></li>
                </ul>
            </li>
            <?php    
            } ?>
            <li> <a class="waves-effect waves-dark" href="?page=calcutalor" aria-expanded="false"><i class="icon-calculator"></i><span class="hide-menu">Calculator</span></a></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Client<span class="badge rounded-pill bg-cyan ms-auto">4</span></span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="?page=add_client">Create Client</a></li>
                    <li><a href="?page=client">Manage Client</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icons-Bus"></i><span class="hide-menu">Transport</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="?page=add_truck">Add Truck</a></li>
                    <li><a href="?page=truck">Manage Truck</a></li>
                    <li><a href="?page=add_driver">Add Driver</a></li>
                    <li><a href="?page=driver">Manage Driver</a></li>
                </ul>
            </li>
            <?php if($admin_role=='M'){
            ?>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">Admin</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="?page=add_admin"><i class="icons-Add-UserStar"></i>Add Admin</a></li>
                    <li><a href="?page=admin"><i class="icons-Checked-User"></i>Manage Admin</a></li>
                </ul>
            </li>
            <?php    
            } ?>

            <li> <a class="waves-effect waves-dark" onClick="logout()" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->