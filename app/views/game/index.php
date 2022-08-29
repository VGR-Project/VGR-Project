
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
                                    <p class="mb-2"><?=$data["game"]["directors"]?></p>
                                    <div class="text-white-50 small"><?=$data["game"]["genres"]?></div>
                                </div>
                            </div>
                            <div class="card-body col-md-9 ml-4 game-desc border-black text-black">
                                <h4 class="m-0 font-weight-bold pb-4 border-black title"><?=$data["game"]["title"]?></h4>

                                <div>
                                <?php foreach(explode(", ", $data["game"]["genres"]) as $genre) { ?>
                                    <a href="<?=BASE_URL;?>/dash/genre/<?=$genre;?>" class="btn btn-primary mt-4"><?=$genre;?></a>
                                <?php } ?>
                                </div>
                                
                                <div class="card col-sd-12 mt-3">
                                    <div class="card-body d-flex flex-wrap justify-content-center">
                                        <div class="w-25 text-center">
                                            <h6 class="w-100">Rating :</h6>
                                            <h4 class="m-0 font-weight-bold border-black w-100"><?=$data["game"]["rating"]?></h4>
                                            <h6 class="w-100"><?=$data["CURating"]["CURating"]?> Users</h6>
                                        </div>
                                        <?php if(!isset($data['name'])) {} else {?>
                                        <div class="w-25 text-center">
                                            <h6 class="w-100">Your Rating :</h6>
                                            <?php if($data['RCRating']['CURating'] != 0) { ?>
                                            <h4 class="m-0 font-weight-bold border-black w-100"><?=$data["Urating"]["rating"]?></h4>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" id="rating" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Edit</a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu shadow card-body" aria-labelledby="rating">
                                                    <form action="<?=BASE_URL;?>/game/updaterating/<?=$data['idGame'];?>" method="post">
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

                                <p class="mt-3 text-justify">&emsp;<?=$data["game"]["desc_game"]?></p>

                                <h3 class="mt-5 mb-0 pb-2 border-black title">Image</h3>
                                <img src="<?=BASE_URL;?>/public/img/header_game/<?=str_replace(":", "", $data["game"]["title"])?>.jpg" alt="" class="w-100 mt-3">

                                <h3 class="mt-5 mb-0 pb-2 border-black title">Review</h3>
                                
                                <div class="card col-sd-12 mt-3 review">
                                    <div class="card-body">
                                    <?php foreach($data['review'] as $review) {?>
                                        <div class="card w-75 
                                        <?php 
                                        if(isset($data['name'])) {
                                            if($review['email_user'] === $_SESSION['user']['email']) { ?>
                                            ml-auto mb-3 bg-success text-white
                                        <?php } else { ?>
                                            mr-auto mb-3 bg-warning text-white
                                        <?php }} else { ?>
                                            mr-auto mb-3 bg-warning text-white
                                        <?php } ?>
                                        ">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center review-comment pb-2">
                                                    <img class="img-profile rounded-circle mr-3" src="<?=BASE_URL;?>/public/img/undraw_profile.svg">
                                                    <span><?=$review['Username']?></span>
                                                </div>
                                                <p class="mt-3 mb-0"><?=$review['review']?></p>
                                                <div class="d-flex justify-content-end w-100">
                                                <?php if(isset($data['name'])) { 
                                                    if($review['email_user'] === $_SESSION['user']['email']) {?>
                                                    <a href="" class="btn btn-warning mt-2">Edit</a>
                                                    <a href="<?=BASE_URL;?>/game/deletereview/<?=$review['id_review'];?>/<?=$data['idGame'];?>" class="btn btn-danger mt-2 ml-2">Delete</a>
                                                <?php }} ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php if(!isset($data['name'])) {} else {?>
                                <div class="card col-sd-12 review">
                                    <div class="card-body d-flex">
                                        <img class="img-profile rounded-circle mr-3" src="<?=BASE_URL;?>/public/img/undraw_profile.svg">
                                        <form action="<?=BASE_URL;?>/game/review/<?=$data['idGame'];?>" method="post" class="d-flex w-100">
                                            <textarea name="review" rows="1" placeholder="Type here..." class="w-100"></textarea>
                                            <button type="submit" class="w-auto ml-3">Submit</button>
                                        </form>
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