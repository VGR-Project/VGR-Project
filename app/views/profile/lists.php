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
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Favorites</h6>
                                </div>
                                <div class="card-body">
                                    <div class="m-lg-0">
                                        <div>
                                          <div class="carousel slide game-" id="recomended" data-interval="false">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["fav1"], 0, 4) as $fav) :?>
                                                    <div class="rounded card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$fav["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $fav["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$fav["title"]?></h4>
                                                            <h5><?=$fav["directors"]?></h5>
                                                            <h6><?=$fav["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$fav["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["fav1"], 4, 4) as $fav) :?>
                                                    <div class="card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$fav["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $fav["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$fav["title"]?></h4>
                                                            <h5><?=$fav["directors"]?></h5>
                                                            <h6><?=$fav["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$fav["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["fav1"], 8, 4) as $fav) :?>
                                                    <div class="card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$fav["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $fav["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$fav["title"]?></h4>
                                                            <h5><?=$fav["directors"]?></h5>
                                                            <h6><?=$fav["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$fav["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#recomended" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#recomended" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon wb-chevron-right" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
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