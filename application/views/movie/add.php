<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow border-left-primary mb-3">
        <div class="card-header">
        	<a href="<?php echo site_url('movies') ?>"><i class="fas fa-arrow-left"></i> Movie List</a>
        </div>

        <div class="card-body">
        	<form action="<?php echo site_url('movies/add') ?>" method="post" enctype="multipart/form-data" >
                <!-- input title -->
                <div class="form-group">
                    <label for="title">Title*</label>
                    <input class="form-control"
                    type="text" name="title" placeholder="Enter title" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- input desc -->
                <div class="form-group">
                    <label for="desc">Description*</label>
                    <input class="form-control"
                    type="text" name="desc" placeholder="Enter description" value="<?= set_value('desc'); ?>">
                    <?= form_error('desc', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- input release -->
                <div class="form-group">
                    <label for="release">Release*</label>
                    <input class="form-control"
                    type="date" name="release" placeholder="Enter release" value="<?= set_value('release'); ?>">
                    <?= form_error('release', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- input poster -->
                <div class="form-group">
                <label for="poster">Poster</label>
                    <input class="form-control-file"
                    type="file" name="poster" />
                    <div class="invalid-feedback">
                        <?php echo form_error('poster') ?>
                    </div>
                </div>
                <!-- button save -->
                <input class="btn btn-primary" type="submit" name="btn" value="Add" />
            </form>
        </div>

        <div class="card-footer small text-muted">
            * required fields
        </div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->