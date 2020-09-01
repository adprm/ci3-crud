<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card border-left-success shadow mb-3">
        <div class="card-header">
        	<a href="<?php echo site_url('movies') ?>"><i class="fas fa-arrow-left"></i> Movie List</a>
        </div>

        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $movie->id; ?>" />
                <div class="form-group">
                    <label for="title">Title*</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $movie->title; ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="desc">Description*</label>
                    <input type="text" class="form-control" name="desc" value="<?= $movie->desc; ?>">
                    <?= form_error('desc', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="release">Release*</label>
                    <input type="date" class="form-control" name="release" value="<?= $movie->release; ?>">
                    <?= form_error('release', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="poster">Photo</label>
                    <input class="form-control-file <?php echo form_error('poster') ? 'is-invalid':'' ?>"
                     type="file" name="poster" />
                    <input type="hidden" name="old_image" value="<?= $movie->poster; ?>" />
                    <div class="invalid-feedback">
                    	<?php echo form_error('poster') ?>
                    </div>
                </div>
                <!-- button save -->
                <input class="btn btn-success" type="submit" name="btn" value="Edit" />
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