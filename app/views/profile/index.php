<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->view("template/navbar", $data);?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"> 

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="h3 mb-4 text-gray-800 text-center display-3 font-weight-bold border-bottom-dark ">Profile</h1>
                            <div class="card-body col-md-12 d-flex">
                                <div class="card col-md-4 m-0">
                                    <div class="card-body">
                                        <div class="col-sm-10 border-primary rounded-circle border p-3 mt-0 mr-auto mb-3 ml-auto">
                                            <img src="<?=BASE_URL?>/public/img/lilgru.jpg" class="rounded-circle border-light w-100" alt="userprofile">
                                        </div>
                                        <h3 class="h3 mb-3 text-center"><?=$_SESSION['user']['username']?></h3>
                                        <h4 class="h4 text-center text-success"><?=$_SESSION['user']['role']?></h4>
                                    </div>
                                </div>
                                <div class="col-md-8 m-0 pl-4">
                                    <div class="card w-100 h-100">
                                        <div class="card-header">Edit</div>
                                        <div class="card-body">
                                            <form action="<?=BASE_URL?>/profile/update" method="post" class="w-100 d-flex justify-content-center flex-wrap">
                                                <div class="form-group w-50 pl-3 pr-3 d-flex flex-column">
                                                    <label for="role">Role</label>
                                                    <input type="text" name="role" id="role" class="rounded" readonly value="<?=$_SESSION['user']['role']?>">
                                                </div>
                                                <div class="form-group w-50 pl-3 pr-3 d-flex flex-column">
                                                    <label for="username">Username</label>
                                                    <input type="text" name="username" id="username" class="rounded" value="<?=$_SESSION['user']['username']?>">
                                                </div>
                                                <div class="form-group w-50 pl-3 pr-3 d-flex flex-column">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="rounded" value="<?=$_SESSION['user']['email']?>">
                                                </div>
                                                <div class="form-group w-50 pl-3 pr-3 d-flex flex-column">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="rounded" value="<?=$_SESSION['user']['password']?>">
                                                </div>
                                                <button type="submit" class="w-100 pl-3 pr-3 btn btn-warning mb-3 mt-4">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End of Main Content -->
            
            <!-- /.container-fluid -->


            <!-- Footer -->
            <?php $this->view("template/copyright"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>