<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?php echo e($character->token->avatar); ?>" alt="" />

        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600"><?php echo e($character->token->character->name); ?></h6></a>
        <p class="mb-0 font-roboto"><?php echo e($character->token->character->corporation->name); ?></p>
        <?php if($character->token->character->alliance_id > 1): ?>
        <p class="mb-0 font-roboto"><?php echo e($character->token->character->alliance->name); ?></p>
        <?php endif; ?>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Dashboard</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="#"><i data-feather="dashboard"></i><span>Home</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('extractions')); ?>" href="<?php echo e(route('extractions')); ?>"><i data-feather="moon"></i><span>Extractions</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /var/www/vhosts/scopeh.co.uk/calendar.mindstar.technology/resources/views/layouts/ledger/partials/sidebar.blade.php ENDPATH**/ ?>