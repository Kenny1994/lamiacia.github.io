<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?php echo base_url('upload/user')?>/user-admin.png" alt="profile">
                    <span class="login-status online"></span> <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?php echo $user_info->name?></span>
                    <span class="text-secondary text-small">User ID: <?php echo $user_info->id?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo get_admin_url('home')?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-manager" aria-expanded="false" aria-controls="user-manager">
                <span class="menu-title">System</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-account-box-outline  menu-icon"></i>
            </a>
            <div class="collapse" id="user-manager">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo get_admin_url('user')?>">All Users</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#catalog-manager" aria-expanded="false" aria-controls="user-manager">
                <span class="menu-title">Catalog</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-clipboard menu-icon"></i>
            </a>
            <div class="collapse" id="catalog-manager">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo get_admin_url('product')?>">Products</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo get_admin_url('catalog')?>">Categories</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>