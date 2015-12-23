<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-07-26
 * Time: 1:38 AM
 */
?>
<nav>
    <div class="navbar-default sidebar" role="navigation">
        <!--Welcome Title-->
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-header"> Welcome <?php echo$_SESSION['loginFirstName'];?>.</h3>
            </div>
        </div>
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Deshboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa  fa-medkit fa-fw"></i>Exams</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
