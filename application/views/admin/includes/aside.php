<aside class="left-sidebar" data-sidebarbg="skin5">
    <?php
    if(!isset($_SESSION['admin_id'])){
        redirect(CTRL."Admin/login_view");
    }
    ?>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">

            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                   <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?/*=CTRL*/?>Admin/admin_sporting" aria-expanded="false"><i class="mdi mdi-blur-radial"></i><span class="hide-menu">Sporting Talent Setup</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?/*=CTRL*/?>Admin/admin_cat" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Sports Setup</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?/*=CTRL*/?>Admin/admin_grading" aria-expanded="false"><i class=" fas fa-graduation-cap"></i><span class="hide-menu">Grading</span></a></li>
-->
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=CTRL?>Admin/admin_dash" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Applications</span></a></li>


                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=CTRL?>Admin/app_completed" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Completed Payments</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=CTRL?>Admin/app_pending" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Pending Payments</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=CTRL?>Admin/admin_profile" aria-expanded="false"><i class="mdi mdi-human-male"></i><span class="hide-menu">Profile</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=CTRL?>Admin/admin_logout" aria-expanded="false"><i class="mdi mdi-logout"></i><span class="hide-menu">Log out</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>