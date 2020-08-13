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
                    <?= form_open_multipart('students/edit/'); ?>
                        <input type="hidden" name="about_id" value="<?php echo $student->id?>" />
                        <!-- edit name -->
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" name="name" value="<?= $student->name; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM*</label>
                            <input type="number" class="form-control" name="nim" value="<?= $student->nim; ?>">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="number" class="form-control" name="email" value="<?= $student->email; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                Picture
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('upload/') . $student->image; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
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