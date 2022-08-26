<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->view("template/navbar", $data); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid col-lg-8">

                    <!-- Content Row -->
                    <div class="row mb-4">

                        <div class="card col-md-12">
                            <div class="card-body">
                                <h4 class="m-0 font-weight-bold pb-4 border-black title">Search - <?=$_POST["search"]?></h4>
                            </div>
                            <div class="card-body d-flex flex-wrap gap-3">
                                <?php foreach($data["search"] as $search) { ?>
                                    <div class="pl-2 pr-2 col-md-6 mb-3">
                                        <div class="rounded card-game-container cursor-pointer game-box text-white card-body w-100 bg-danger d-flex" id="<?=$search["id"]?>">
                                            <div class="card-game-img pr-3 d-flex justify-content-center align-items-center overflow-hidden w-25">
                                                <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $search["title"])?>.jpg" alt="" class="w-100">
                                            </div>
                                            <div class="card-game-desc overflow-auto scrollbar-none w-75">
                                                <h4 class="m-0 font-weight-bold"><?=$search["title"]?></h4>
                                                <h5><?=$search["directors"]?></h5>
                                                <h6><?=$search["rating"]?></h6>
                                                <div class="text-white-50 small"><?=$search["genres"]?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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