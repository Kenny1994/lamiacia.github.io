<html>
    <head>
        <?php $this->load->view('admin/head',$this->data); ?>
    </head>
    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="<?php echo base_url('assets/admin')?>/images/logo.svg">
                            </div>
                            <h4>Chào mừng đến với Lamiacia</h4>
                            <h6 class="font-weight-light">Đăng nhập trang quản trị </h6>
                            <form class="pt-3">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="Đăng Nhập">
<!--                                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="--><?php //echo base_url('assets/admin')?><!--/index.html">SIGN IN</a>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    </body>
</html>
