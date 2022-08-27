
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
                                
                                <div class="card col-sd-12 mt-3">
                                    <div class="card-body d-flex flex-wrap justify-content-center">
                                        <div class="w-25 text-center">
                                            <h6 class="w-100">Rating :</h6>
                                            <h4 class="m-0 font-weight-bold border-black w-100"><?=$data["game"]["rating"]?></h4>
                                            <h6 class="w-100"><?=$data["CURating"]["CURating"]?> Users</h6>
                                        </div>
                                        <?php if($data['name'] === "Guest") {} else {?>
                                        <div class="w-25 text-center">
                                            <h6 class="w-100">Your Rating :</h6>
                                            <?php if($data['RCRating']['CURating'] != 0) { ?>
                                            <h4 class="m-0 font-weight-bold border-black w-100"><?=$data["Urating"]["rating"]?></h4>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" id="rating" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Edit</a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu shadow card-body" aria-labelledby="rating">
                                                    <form action="<?=BASE_URL;?>/game/update/<?=$data['idGame'];?>" method="post">
                                                        <label for="rating">Your Rating :</label>
                                                        <input type="number" name="rating" id="rating" step="0.01" value="<?=$data["Urating"]["rating"]?>" min="0" max="10">
                                                        <button type="submit" class="btn">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <?php } else { ?>
                                            <div class="dropdown no-arrow">
                                                <a class="btn btn-primary dropdown-toggle" id="rating" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Rating Now</a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu shadow card-body" aria-labelledby="rating">
                                                    <form action="<?=BASE_URL;?>/game/rating/<?=$data['idGame'];?>" method="post">
                                                        <label for="rating">Your Rating :</label>
                                                        <input type="number" name="rating" id="rating" step="0.01" min="0" max="10">
                                                        <button type="submit" class="btn">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <p class="mt-3"><?=$data["game"]["desc_game"]?></p>

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
