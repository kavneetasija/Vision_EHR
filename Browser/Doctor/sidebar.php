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

                <!--Location-->
                <li>
                    <a href="#"><i class="fa fa-building fa-fw"></i>Locations</a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i>Location list</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-hospital-o fa-fw"></i>Add new location</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa  fa-medkit fa-fw"></i>Patient</a>
                    <ul>
                        <li>
                            <a href="patientList.php"><i class="fa fa-list-alt fa-fw"></i>Patient list</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-plus-square fa-fw"></i>Register new patient</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cubes fa-fw"></i> Sessions</a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-clock-o fa-fw"></i>Schedule appointments</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-medkit fa-fw"></i> Add new patient</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> Patient list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i>Manage system users</a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i>User Manager </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Add new system user</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
