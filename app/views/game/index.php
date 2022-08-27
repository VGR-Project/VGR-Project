
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

                    <div class="card col-md-12 mb-4">
                        <div class="card-body d-flex">
                            <div class="card-body col-md-3">
                            <img src="<?=BASE_URL;?>/public/img/game-image/<?=str_replace(":", "", $data['game']["title"]);?>.jpg" alt="" class="w-100 mb-4">
                                <div class="text-black header-desc-container">
                                    <h4 class="m-0 font-weight-bold mb-2"><?=$data["game"]["title"]?></h4>
                                    <h5 class="m-0">Directors :</h5>
                                    <h5 class="mb-2"><?=$data["game"]["directors"]?></h5>
                                    <h6>Rating : <?=$data["game"]["rating"]?></h6>
                                    <div class="text-white-50 small"><?=$data["game"]["genres"]?></div>
                                </div>
                            </div>
                            <div class="card-body col-md-9 ml-4 game-desc border-black text-black">
                                <h4 class="m-0 font-weight-bold pb-4 border-black title"><?=$data["game"]["title"]?></h4>
                                <div class="mt-4">
                                <?php foreach(explode(", ", $data["game"]["genres"]) as $genre) { ?>
                                    <a href="<?=BASE_URL;?>/dash/genre/<?=$genre;?>" class="btn btn-primary"><?=$genre;?></a>
                                <?php } ?>
                                </div>
                                
                                <p class="mt-4"><?=$data["game"]["desc_game"]?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Page Heading -->
                    
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
