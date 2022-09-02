<nav class="navbar navbar-expand navbar-light bg-gradient-dark sidebar-dark topbar static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=BASE_URL;?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?=BASE_URL;?>/public/img/game-controller.png" alt="game-controller-logo" width="100">
        </div>
        <div class="sidebar-brand-text mx-3">Video Game Review</div>
    </a>

    <div class="navbar-container">
    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?=BASE_URL;?>/gamelists">
            <i class="fas fa-fw fa-table"></i>
            <span>Game List</span>
        </a>
    </li>
     -->
    <li class="nav-item">
        <form class="nav-link" action="<?=BASE_URL;?>/dash/search" method="post">
            <button type="submit" class="mr-3 btn btn-primary">Search</button>
            <input type="text" name="search" class="w-100 rounded">
        </form>
        
    </li>
    </div>

    <?php if (isset($data['name']) && $_SESSION['user']['role'] != "user") { ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>/gamelists">
            <i class="fas fa-fw fa-table"></i>
            <span>Game List</span>
        </a>
    </li>
    <?php } ?>

    <?php if (isset($data['name']) && $_SESSION['user']['role'] === "admin") { ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>/userlists">
            <i class="fas fa-fw fa-table"></i>
            <span>User List</span>
        </a>
    </li>
    <?php } ?>

    <!-- Topbar Search -->
    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> -->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <?php if(!isset($data['name'])) { ?>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="<?=BASE_URL;?>/login">
                <img class="img-profile rounded-circle" src="<?=BASE_URL;?>/public/img/lilgru.jpg">
            </a>
        </li>
        <?php } else { ?>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="mr-2 d-none d-lg-inline text-white small">
                    <?= $data['name'];?>
                </span>
                <img class="img-profile rounded-circle" src="<?=BASE_URL;?>/public/img/lilgru.jpg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?=BASE_URL;?>/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=BASE_URL;?>/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
        <?php } ?>
    </ul>
</nav>