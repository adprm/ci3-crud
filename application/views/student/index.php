<!-- function delete -->
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $title; ?></h1>

            <div class="col-lg-4">
                <?= $this->session->flashdata('message'); ?>
            </div>  
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    <a href="<?php echo site_url('students/add/') ?>"><i class="fas fa-plus"></i> Add New Student</a>
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
                                        <a href="<?= site_url('students/edit/'.$s->id); ?>" class="btn btn-small text-success">
                                        <i class="fas fa-edit"></i> Edit</a>
										<a href="#!" onclick="deleteConfirm('<?= site_url('students/delete/'.$s->id); ?>')"
                                        class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
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

    <!-- modal -->
<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Deleted data will not be restored.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>