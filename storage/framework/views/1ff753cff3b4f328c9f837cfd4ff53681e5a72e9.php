<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold user-name">
                                    <?php if(Auth::guest()): ?>
                                        <a href="<?php echo e(route('login')); ?>">Login</a>
                                    <?php else: ?>
                                        <?php echo e(Auth::user()->name); ?>

                                    <?php endif; ?>
                                </strong>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    CH
                </div>
            </li>

            <li class="<?php echo( isActiveRoute('createchart')); echo(isActiveRoute('createSinglechart')); echo(isActiveRoute('createMultichart')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-pencil"></i> <span class="nav-label">Create Thing Chart</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('welcome')); ?>">
                <a href="<?php echo e(url('/welcome')); ?>"><i class="fa fa-pie-chart"></i> <span class="nav-label">My Charts Gallery</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('t')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-book"></i> <span class="nav-label">Tutorials</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('pu')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-picture-o"></i> <span class="nav-label">Public Gallery</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('pr')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-usd"></i> <span class="nav-label">Pricing and Plans</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('s')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-cog"></i> <span class="nav-label">Settings</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('p')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-user"></i> <span class="nav-label">Profile</span> </a>
            </li>
            <li class="<?php echo e(isActiveRoute('l')); ?>">
                <a href="<?php echo e(url('/createchart')); ?>"><i class="fa fa-sign-out"></i> <span class="nav-label">LOGOUT</span> </a>
            </li>
        </ul>

    </div>
</nav>
