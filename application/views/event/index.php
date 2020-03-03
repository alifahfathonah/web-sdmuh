<?php
$data = $this->session->flashdata('sukses');
if ($data != "") { ?>
    <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
<?php } ?>

<?php
$data2 = $this->session->flashdata('error');
if ($data2 != "") { ?>
    <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?= $data2; ?></div>
<?php } ?>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
            <hr style="border:0px">
            <div class="panel panel-primary">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-hover text-center" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($users as $row) : ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nama; ?></td>
                                    <td><?= $row->deskripsi; ?></td>
                                    <td><?= $row->tanggal; ?></td>
                                    <td><?= $row->gambar; ?></td>
                                    <td>
                                        <center>
                                            <div class="tooltip-demo">
                                                <a data-toggle="modal" data-target="#modal-edit<?= $row->id; ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-pen" style="color:white"></i></i></a>
                                                <a href="<?= base_url('Event/hapus/' . $row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?= $row->nama; ?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


<div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
        <form action="<?php echo base_url('Event/add'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        <h4 class='col-md-4'>Data Fasilitas</h4>
                        <hr>
                        <div class='col-md'>
                            <input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="deskripsi" autocomplete="off" required placeholder="Masukkan Deskripsi" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="tanggal" autocomplete="off" required placeholder="Masukkan Tanggal" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="gambar" autocomplete="off" required placeholder="Masukkan Gambar" class="form-control">
                        </div>
                    </div>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="far fa-save" style="color:white"></i></i> Simpan</button>
                </div>
        </form>
    </div>
</div>
</div>
<!-- /#page-wrapper -->

<?php $no = 0;
foreach ($users as $row) : $no++; ?>
    <div class="row">
        <div id="modal-edit<?= $row->id; ?>" class="modal fade">
            <div class="modal-dialog">
                <form action="<?php echo base_url('Event/edit'); ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-body">
                            <input type="hidden" readonly value="<?= $row->id; ?>" name="id" class="form-control">
                            <div class="form-group">
                                <h4 class='col-md-5'> Edit Data Event</h4>
                                <hr>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="nama" autocomplete="off" value="<?= $row->nama; ?>" required placeholder="Masukkan Nama" class="form-control">
                                </div>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="deskripsi" autocomplete="off" value="<?= $row->deskripsi; ?>" required placeholder="Masukkan Deskripsi" class="form-control">
                                </div>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="tanggal" autocomplete="off" value="<?= $row->tanggal; ?>" required placeholder="Masukkan Tanggal" class="form-control">
                                </div>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="gambar" autocomplete="off" value="<?= $row->gambar; ?>" required placeholder="Masukkan Gambar" class="form-control">
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning"><i class="fas fa-pen" style="color:white"></i> Edit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>