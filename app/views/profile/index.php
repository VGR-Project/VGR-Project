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
                    <!-- Page Heading -->
                    <div>
                        <h1 class="h3 mb-4 text-gray-800 text-center display-3 font-weight-bold">Profile</h1>
                        <div class="pict-text-group d-flex"> 
                        <div class="pictprofile">
                            <img src=".//img/profilepict.jpg" class="rounded-circle mb-3" alt="userprofile" class="img-fluid ">
                        </div>
                        <div class="text_group ml-5">
                            <p class="h4 pb-2"><?=$data['name'];?></p>
                            <h4 class="pb-2"><?=$_SESSION['user']['email'];?></h4>
                            <button type="button" class="btn btn-outline-primary mb-2">Edit Profile</button>
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