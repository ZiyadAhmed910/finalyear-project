<?php include_once('header.php');
if (!isset($_SESSION["useruid"])) {
    header("Location: index.php");
}
?>

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
                    <a class="navbar-brand" href="javascript:void(0)">Regular Tables</a>
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
                                <p class="d-lg-none">
                                    Log out
                                </p>
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
                <div class="col-md-12 mb-5">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title"> Simple Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table tablesorter " id="simple-table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                id
                                            </th>
                                            <th>
                                                Temperature
                                            </th>
                                            <th>
                                                Hummidity
                                            </th>
                                            <th>
                                                Moisture
                                            </th>
                                            <th>
                                                Time Stamp
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once("api/db_connect.php");
                                        $sql = "SELECT  * FROM weatherksa ORDER BY id DESC";
                                        $aresult = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($aresult)) {
                                            echo '<tr>';
                                            echo '<td>' . $row["id"] . '</td>';
                                            echo '<td>' . $row["temp"] . '</td>';
                                            echo '<td>' . $row["hum"] . '</td>';
                                            echo '<td>' . $row["moisture"] . '</td>';
                                            echo '<td>' . $row["time_stamp"] . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <?php
                        include_once('footer.php');
                        ?>