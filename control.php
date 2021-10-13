<?php include_once('header.php'); ?>

<body class="sidebar-mini ">
    <?php include_once('sidebar.php'); ?>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize d-inline">
                        <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
                            <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
                            <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
                        </button>
                    </div>
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:void(0)">CONTROL DASHBOARD</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="photo">
                                    <img src="http://roboticscbit.tech/img/vectors/zeeu.png" alt="Profile Photo">
                                </div>
                                <b class="caret d-none d-lg-block d-xl-block"></b>
                                <a href="includes/logout.inc.php" class="d-lg-none">
                                    Log out
                                </a>
                            </a>
                            <ul class="dropdown-menu dropdown-navbar">
                                <li class="nav-link">
                                    <a href="dashboard.php" class="nav-item dropdown-item">Home</a>
                                </li>
                                <li class="nav-link">
                                    <a href="control.php" class="nav-item dropdown-item">Control Dashboard</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="nav-link">
                                    <a href="includes/logout.inc.php" class="nav-item dropdown-item">Log out</a>
                                </li>
                            </ul>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-sm-6 text-center">
                    <div class="card card-contributions">
                        <div class="card-body">
                            <h1 class="card-title">Control Panel</h1>
                            <h3 class="card-category">Manual / Automatic</h3>
                            <p class="card-description">Automatic Control Enabled</p>
                            <p class="card-description">Motor Switched OFF</p>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                                    <div class="card-stats justify-content-center">
                                        <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" checked>
                                        <span>For Automatic Mode</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                                    <div class="card-stats justify-content-center">
                                        <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF">
                                        <span>Switch On / Off Motor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('footer.php'); ?>