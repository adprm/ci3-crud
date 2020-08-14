<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $title; ?></h1>

            <div class="card mb-3">
                <!-- ikon kembali -->
                <div class="card-header">
                	<a href="<?php echo site_url('students') ?>"><i class="fas fa-arrow-left"></i> List of students</a>
                </div>

                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $student->id; ?>" />
                        <!-- edit name -->
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $student->name; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM*</label>
                            <input type="number" class="form-control" name="nim" value="<?= $student->nim; ?>">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="text" class="form-control" name="email" value="<?= $student->email; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="image">Photo</label>
                            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                             type="file" name="image" />
                            <input type="hidden" name="old_image" value="<?php echo $student->image ?>" />
                            <div class="invalid-feedback">
                            	<?php echo form_error('image') ?>
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
    </main>