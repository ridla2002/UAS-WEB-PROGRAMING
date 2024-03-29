<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



  <div class="row">
    <div class="col-lg-6">
      <?php form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

      <?= $this->session->flashdata('message'); ?>
      <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newRoleModal">tambah role baru</a>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($role as $r) : ?>
            <tr>
              <td><?= $i;  ?></td>
              <td><?= $r['role'] ?></td>
              <td>
                <a href="<?= base_url('admin/role-access') . $r['id']; ?>" class="badge badge-warning">access</a>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class=" badge badge-danger">Hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">tambah menu baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/role'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">

            <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>