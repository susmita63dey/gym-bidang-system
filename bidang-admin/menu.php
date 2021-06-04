<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="nav-item start active open">
                <a href="api.php?link=000" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item ">
                <li class="nav-item  ">
                    <a href="api.php?link=bidang-club-war" class="nav-link ">
                        <i class="fa fa-hand-stop-o"></i>
                        <span class="title">Bidang Club War</span>
                     </a>
                 </li>

                <li class="nav-item  ">
                    <a href="api.php?link=bidang-fight-league" class="nav-link ">
                        <i class="fa fa-hand-rock-o"></i>
                        <span class="title">Bidang Fight League</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="api.php?link=updates" class="nav-link ">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="title">Latest News & Updates</span>
                    </a>
                </li>

                <?php if($_SESSION['role_session']==0){ ?>
                    <li class="nav-item  ">
                        <a href="api.php?link=users" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Users</span>
                        </a>
                    </li>
                <?php } ?>
            </li>
        </ul>
    </div>
</div>