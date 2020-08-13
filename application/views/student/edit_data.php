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
                	<form action="<?php echo site_url('students/edit') ?>" method="post" enctype="multipart/form-data" >
                        <!-- input name -->
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input class="form-control"
                            type="text" name="name" placeholder="Enter your name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- input nim -->
                        <div class="form-group">
                            <label for="nim">NIM*</label>
                            <input class="form-control"
                            type="number" name="nim" min="0" placeholder="Enter your NIM" value="<?= set_value('nim'); ?>">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- input email -->
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input class="form-control" type="text" name="email" min="0" placeholder="Enter your email"
                            value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- input image -->
                        <div class="form-group">
                        <label for="image">Photo</label>
                            <input class="form-control-file"
                            type="file" name="image" />
                            <div class="invalid-feedback">
                                <?php echo form_error('image') ?>
                            </div>
                        </div>
                        <!-- button save -->
                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>
                </div>

                <div class="card-footer small text-muted">
                    * required fields
                </div>
			</div>
        </div>
    </main>