<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->view("template/navbar");?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"> 

            <!-- Main Content -->
            <div id="content" class="container " >
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-center display-3 font-weight-bold">Profile</h1>
                </div>
                <div class="pict-text-group d-flex"> 
                    <div class="pictprofile">
                        <img src=".//img/profilepict.jpg" class="rounded-circle mb-3" alt="userprofile" class="img-fluid ">
                    </div>
                    <div class="text_group ml-5">
                        <p class="h4 pb-2">Username</p>
                        <h4 class="pb-2">emaillimaeil@gmail.com</h4>
                        <button type="button" class="btn btn-outline-primary mb-2">Edit Profile</button>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
            <div class="container-fluid">
                <a href="#" class="btn btn-primary btn-lg disabled mb-3" tabindex="-1" role="button" aria-disabled="true">My Game List</a>
            </div>
            <!-- Game Favourites -->
            <div class="row px-4">
                <!-- Pie Chart -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Favourites</h6>
                        </div>
                        <div class="card-body col">
                            <div class="game-card-list">
                                <div class="card">
                                    <div class="card-body bg-danger">
                                        <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                            <div>
                                                <h6 class="m-0 font-weight-bold">Omori</h6>
                                                <div class="text-white-50 small">Masterpiece</div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-danger">
                                        <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                            <div>
                                                <h6 class="m-0 font-weight-bold">Omori</h6>
                                                <div class="text-white-50 small">Masterpiece</div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-danger">
                                        <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                            <div>
                                                <h6 class="m-0 font-weight-bold">Omori</h6>
                                                <div class="text-white-50 small">Masterpiece</div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-danger">
                                        <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                            <div>
                                                <h6 class="m-0 font-weight-bold">Omori</h6>
                                                <div class="text-white-50 small">Masterpiece</div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-danger">
                                        <img src="img/game-image/omori_cover.jpg" alt="" class="game-image">
                                            <div>
                                                <h6 class="m-0 font-weight-bold">Omori</h6>
                                                <div class="text-white-50 small">Masterpiece</div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>