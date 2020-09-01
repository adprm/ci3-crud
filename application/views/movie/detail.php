<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg-6">
        <div class="card shadow border-left-info mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><a href="<?php echo site_url('movies') ?>"><i class="fas fa-arrow-left"></i> Movie List</a></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo base_url('assets/img/'.$movie->poster) ?>" width="150" />
                    </div>
                    <div class="col-lg-8">
                        <ul class="list-group">
                            <li class="list-group-item"><h5><?= $movie->title; ?></h5></li>
                            <li class="list-group-item"><?= $movie->desc; ?></li>
                            <li class="list-group-item"><?= $movie->release; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->