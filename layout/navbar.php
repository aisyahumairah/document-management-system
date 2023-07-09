<html>

<!--Nav header start-->
<div class="nav-header">
            <div style="text-align: center;">
    <div class="brand-logo">
        <a href="../folder-dashboard/dashboard.php">
            <span class="brand-title">
                <img src="../images/MBPP.png" class="center" style="width: 55%; height: 55%; transform: translateY(-35px);" alt="">
            </span>
        </a>
    </div></div>
</div>
<!--Nav header end-->

<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>

        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <!-- <span class="activity active"></span> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#343A40" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <!-- <img src="../images/user/1.png" height="40" width="40" alt=""> -->
                        <span class="span-name"><? echo $_SESSION['username']; ?></span>
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="../folder-user/profile.php"><i class="icon-user"></i>
                                        <span>Profile</span></a>
                                </li>

                                <hr class="my-2">
                                <li><a href="../authentication/logout.php"><i class="icon-key"></i> <span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</html>