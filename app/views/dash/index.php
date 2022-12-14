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
                    <div class="row card-custom mb-4">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Body -->
                                <div class="card-body header">
                                    <div class="m-lg-0 h-100">
                                        <div class="h-100">
                                          <div class="carousel slide h-100" id="game-header" data-ride="carousel">
                                            <div class="carousel-inner h-100" role="listbox">
                                            <?php
                                            $iNew = 1;
                                            foreach($data["new"] as $new) :?>
                                                <div class="carousel-item <?php if($iNew===1) {echo "active"; $iNew++;} ?> card-body">
                                                <div class="game-box w-100 cursor-pointer" id="<?=$new["id"]?>">
                                                <!-- !!! -->
                                                    <img class="w-100" src="<?=BASE_URL;?>/public/img/header_game/<?=str_replace(":", "", $new["title"])?>.jpg" alt="...">
                                                </div>
                                                <div class="text-black position-absolute bottom-0 h-50 card-body m-auto d-flex col-md-12 flex-row align-items-end cursor-pointer game-box" id="<?=$new["id"]?>">
                                                    <div class="w-25 h-100 d-flex justify-content-center align-items-center overflow-hidden">
                                                        <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $new["title"])?>.jpg" alt="" class="w-100 border border-danger border-5">
                                                    </div>
                                                    <div class="w-75 pl-3 overflow-auto scrollbar-none">
                                                        <h4 class="m-0 font-weight-bold"><?=$new["title"]?></h4>
                                                        <h6><?=$new["rating"]?></h6>
                                                        <div class="text-black-50 small"><?=$new["genres"]?></div>
                                                    </div>
                                                </div>
                                              </div>
                                            <?php endforeach; ?>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#game-header" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#game-header" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon wb-chevron-right" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">New Added</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="d-flex flex-column h-100 overflow-auto scrollbar-none">
                                        <?php
                                        foreach($data["new"] as $new) :?>
                                                <div class="card bg-danger h-50 text-white shadow cursor-pointer game-box mb-3" id="<?=$new["id"]?>">
                                                    <div class="card-body w-100 d-flex">
                                                        <div class="w-50 mr-3 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $new["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="w-50 h-100 overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$new["title"]?></h4>
                                                            <h5><?=$new["directors"]?></h5>
                                                            <h6><?=$new["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$new["genres"]?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Recomended</h6>
                                </div>
                                <div class="card-body">
                                    <div class="m-lg-0">
                                        <div>
                                          <div class="carousel slide game-" id="recomended" data-interval="false">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["rec1"], 0, 4) as $rec) :?>
                                                    <div class="rounded card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$rec["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $rec["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$rec["title"]?></h4>
                                                            <h5><?=$rec["directors"]?></h5>
                                                            <h6><?=$rec["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$rec["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["rec1"], 4, 4) as $rec) :?>
                                                    <div class="card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$rec["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $rec["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$rec["title"]?></h4>
                                                            <h5><?=$rec["directors"]?></h5>
                                                            <h6><?=$rec["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$rec["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["rec1"], 8, 4) as $rec) :?>
                                                    <div class="card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$rec["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $rec["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$rec["title"]?></h4>
                                                            <h5><?=$rec["directors"]?></h5>
                                                            <h6><?=$rec["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$rec["genres"]?></div>
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

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">May You Like</h6>
                                </div>
                                <div class="card-body">
                                    <div class="m-lg-0">
                                        <div>
                                          <div class="carousel slide game-" id="random" data-interval="false">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["rand1"], 0, 4) as $rand) :?>
                                                    <div class="rounded card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$rand["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $rand["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$rand["title"]?></h4>
                                                            <h5><?=$rand["directors"]?></h5>
                                                            <h6><?=$rand["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$rand["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["rand1"], 4, 4) as $rand) :?>
                                                    <div class="card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$rand["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $rand["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$rand["title"]?></h4>
                                                            <h5><?=$rand["directors"]?></h5>
                                                            <h6><?=$rand["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$rand["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row w-100 container-item">
                                                <?php foreach(array_slice($data["rand1"], 8, 4) as $rand) :?>
                                                    <div class="card-body bg-danger text-white col-md-3 cursor-pointer game-box" id="<?=$rand["id"]?>">
                                                        <div class="card-game-img mb-3 d-flex justify-content-center align-items-center overflow-hidden w-100">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $rand["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="card-game-desc overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$rand["title"]?></h4>
                                                            <h5><?=$rand["directors"]?></h5>
                                                            <h6><?=$rand["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$rand["genres"]?></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#random" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#random" role="button" data-slide="next">
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

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="m-lg-0">
                                        <div>
                                          <div class="carousel slide" id="information" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                <?php foreach(array_slice($data["rand2"], 0, 2) as $rand) :?>
                                                    <div class="d-flex justify-content-center align-items-center rounded card-body bg-danger col-md-6 header-image-carousel overflow-hidden game-box cursor-pointer" id="<?=$rand["id"]?>">
                                                        <img class="w-100" src="<?=BASE_URL;?>/public/img/header_game/<?=str_replace(":", "", $rand["title"])?>.jpg" alt="...">
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                <?php foreach(array_slice($data["rand2"], 2, 2) as $rand) :?>
                                                    <div class="d-flex justify-content-center align-items-center rounded card-body bg-danger col-md-6 header-image-carousel overflow-hidden game-box cursor-pointer" id="<?=$rand["id"]?>">
                                                        <img class="w-100" src="<?=BASE_URL;?>/public/img/header_game/<?=str_replace(":", "", $rand["title"])?>.jpg" alt="...">
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                              <div class="carousel-item">
                                                <div class="d-flex flex-row justify-content-between w-100 container-item">
                                                <?php foreach(array_slice($data["rand2"], 4, 2) as $rand) :?>
                                                    <div class="d-flex justify-content-center align-items-center rounded card-body bg-danger col-md-6 header-image-carousel overflow-hidden game-box cursor-pointer" id="<?=$rand["id"]?>">
                                                        <img class="w-100" src="<?=BASE_URL;?>/public/img/header_game/<?=str_replace(":", "", $rand["title"])?>.jpg" alt="...">
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev carousel-control" href="#information" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next carousel-control" href="#information" role="button" data-slide="next">
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

                    <!-- Content Row -->
                    <div class="row card-custom">
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Most Rated</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="d-flex flex-column h-100 overflow-auto scrollbar-none">
                                        <?php
                                        foreach($data["fav1"] as $fav) :?>
                                                <div class="card bg-danger h-50 text-white shadow cursor-pointer game-box mb-3" id="<?=$fav["id"]?>">
                                                    <div class="card-body w-100 d-flex">
                                                        <div class="w-50 pr-3 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $fav["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="w-50 h-100 overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$fav["title"]?></h4>
                                                            <h5><?=$fav["directors"]?></h5>
                                                            <h6><?=$fav["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$fav["genres"]?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Old Games</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="d-flex flex-column h-100 overflow-auto scrollbar-none">
                                        <?php
                                        foreach($data["old"] as $old) :?>
                                                <div class="card bg-danger h-50 text-white shadow cursor-pointer game-box mb-3" id="<?=$old["id"]?>">
                                                    <div class="card-body w-100 d-flex">
                                                        <div class="w-50 pr-3 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $old["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="w-50 h-100 overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$old["title"]?></h4>
                                                            <h5><?=$old["directors"]?></h5>
                                                            <h6><?=$old["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$old["genres"]?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5 h-100">
                            <div class="card shadow h-100">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">New Added</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body aside">
                                    <div class="d-flex flex-column h-100 overflow-auto scrollbar-none">
                                        <?php
                                        foreach($data["new"] as $new) :?>
                                                <div class="card bg-danger h-50 text-white shadow cursor-pointer game-box mb-3" id="<?=$new["id"]?>">
                                                    <div class="card-body w-100 d-flex">
                                                        <div class="w-50 pr-3 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                                                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $new["title"])?>.jpg" alt="" class="w-100">
                                                        </div>
                                                        <div class="w-50 h-100 overflow-auto scrollbar-none">
                                                            <h4 class="m-0 font-weight-bold"><?=$new["title"]?></h4>
                                                            <h5><?=$new["directors"]?></h5>
                                                            <h6><?=$new["rating"]?></h6>
                                                            <div class="text-white-50 small"><?=$new["genres"]?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
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
                        <span aria-hidden="true">??</span>
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