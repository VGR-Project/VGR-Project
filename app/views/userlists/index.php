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
                <div class="container-fluid col-lg-12">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User Lists</h1>
                    <p class="mb-4">This is game lists data that is used to manage game datas that is shown to the user. For editing the database click this link <a target="_blank"
                            href="../../../phpmyadmin">Database Structure</a>.</p>

                    <!-- DataTales Example -->
                    <button class="btn btn-primary mb-3 tampilModalTambah" data-toggle="modal" data-target="#formModal">Add Game</button>
                    <div class='card shadow mb-4'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>DataTables Example</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Detail</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Detail</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                <?php foreach($data["user-db"] as $row):?>
                            <tr>
                                <td><?=$row["Username"]?></td>
                                <td><?=$row["email"]?></td>
                                <td><?=$row["Password"]?></td>
                                <td><?=$row["role"]?></td>
                                <!-- <td><button class="btn btn-success" onclick="window.location.href='<?= BASE_URL?>/game/<?=$row['id']?>'">Detail</button></td>
                                <td class="tampilModalUbah" data-id="<?= $row['id'];?>"><a data-toggle="modal" data-target="#formModal"><button class="btn btn-warning">Edit</button></td>
                                <td onclick="window.location.href='<?=BASE_URL;?>/gamelists/delete/<?=$row['id']?>'"><button class="btn btn-danger">Delete</button></td> -->
                            </tr>
                            <?php endforeach;?>
                        </tbody>

                        </table>
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

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="margin-top:50px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/gamelists/tambah" method="POST">
        <input type="hidden" id="id_game" name="id_game"> 
        <div class="form-group">
            <label for="game-title">Game Title</label>
            <input type="text" class="form-control" id="gameTitle" name="gameTitle">
        </div>

        <div class="form-group">
            <label for="game-directors">Game Directors</label>
            <input type="text" class="form-control" id="gameDirectors" name="gameDirectors">
        </div>

        <div class="form-group">
            <label for="game-release">Game Release</label>
            <input type="date" class="form-control" id="gameRelease" name="gameRelease">
        </div>

        <div class="form-group">
            <label for="game-release">Year Release</label>
            <input type="text" class="form-control" id="yearRelease" name="yearRelease">
        </div>
        
        <div class="form-group">
            <label for="game-desc">Game Desc</label>
            <textarea class="form-control" id="gameDesc" name="gameDesc" style="height: 150px;"></textarea>
        </div>
        <div class="form-group">
            <label for="game-genres">Game Genres</label>
            <input type="text" class="form-control" id="gameGenres" name="gameGenres">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Game</button>
        </form>
      </div>
    </div>
  </div>
</div>
