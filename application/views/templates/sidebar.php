<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>" href="<?= site_url('overview'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">College student</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-fw fa-user-graduate"></i></div>
                        Student Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
                            <a class="nav-link" href="<?= site_url('students'); ?>">List Students</a>
                            <a class="nav-link" href="<?= site_url('students/add'); ?>">Add Studend</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>