   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data User</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
   <a href="<?= path('user/add_user')?>" class="btn btn-success"> <i class="fa fa-plus"></i></i> Tambah Data</a>
   <div><h3 id="message"></h3></div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>E-mail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>No.</th>
                    <th>Nama</th>
                        <th>Umur</th>
                        <th>E-mail</th>
                        <th>Action</th>

                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no =1;
                     foreach($user as $g):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $g->name?></td>
                        <td><?= $g->umur?></td>
                        <td><?= $g->email?></td>
                        <td class="d-flex justify-between">
                            <a href="<?= path('user/update/'.$g->_id)?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i></a>
                            <a href="<?= path('user/delete_user/'.$g->_id)?>" onclick="return confirm('Anda yakin ingin menghapus data dengan nama <?=$g->name?>?')" class="btn btn-danger btn-delete" id="btn-delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->