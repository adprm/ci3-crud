<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $title; ?></h1>

            <div class="col-lg-4">
                <!-- alert error add -->
                <?= $this->session->flashdata('message_error_addstudent'); ?>
                <!-- alert success add -->
                <?= $this->session->flashdata('message_success_addstudent'); ?>
            </div>  
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    DataTable Students
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>NIM</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($student as $s) : ?>
                                <tr>
                                    <th><?= $i ?></th>
                                    <td><?= $s->name; ?></td>
                                    <td><?= $s->nim; ?></td>
                                    <td><?= $s->email; ?></td>
                                    <td>
                                        <img src="<?php echo base_url('upload/'.$s->image) ?>" width="64" />
                                    </td>
                                    <td>
                                        <a href="<?= site_url('students/edit/' . $s->id); ?>" class="btn btn-small text-success"><i class="fas fa-edit"></i> Edit</a>
										<a href="#" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <?= $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>