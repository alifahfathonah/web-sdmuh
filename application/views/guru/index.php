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
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Mapel</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($all as $row) : ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->id_guru; ?></td>
                                    <td><?php echo $row->nama_guru; ?></td>
                                    <td><?php echo $row->ttl; ?></td>
                                    <td><?php echo $row->mapel; ?></td>
                                    <td><?php echo $row->kelas; ?></td>
                                    <td>
                                        <center>
                                            <div class="tooltip-demo">
                                                <a data-toggle="modal" data-target="#modal-edit<?= $row->id; ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-pen" style="color:white"></i></i></a>
                                                <a href="<?php echo site_url('Guru/hapus/' . $row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?= $row->nama_guru; ?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
        <form action="<?php echo site_url('Guru/add'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        <h4 class='col-md-4'>Data Guru</h4>
                        <hr>
                        <div class='col-md'>
                            <input type="text" name="id_guru" autocomplete="off" required placeholder="Masukkan Kode" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="nama_guru" autocomplete="off" required placeholder="Masukkan Nama" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="ttl" autocomplete="off" required placeholder="Masukkan TTL" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="mapel" autocomplete="off" required placeholder="Masukkan Mapel" class="form-control">
                        </div>
                        <br>
                        <div class='col-md'>
                            <input type="text" name="kelas" autocomplete="off" required placeholder="Masukkan Kelas" class="form-control">
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
foreach ($all as $row) : $no++; ?>
    <div class="row">
        <div id="modal-edit<?= $row->id; ?>" class="modal fade">
            <div class="modal-dialog">
                <form action="<?php echo site_url('Guru/edit'); ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-body">

                            <input type="hidden" readonly value="<?= $row->id; ?>" name="id" class="form-control">

                            <div class="form-group">
                                <h4 class='col-md-5'> Edit Data Guru</h4>
                                <hr>
                                <div class='col-md'>
                                    <input type="text" name="id_guru" autocomplete="off" value="<?= $row->id_guru; ?>" required placeholder="Masukkan Id Guru" class="form-control">
                                </div>

                                <br>
                                <div class='col-md'>
                                    <input type="text" name="nama_guru" autocomplete="off" value="<?= $row->nama_guru; ?>" required placeholder="Masukkan Nama" class="form-control">
                                </div>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="ttl" autocomplete="off" value="<?= $row->ttl; ?>" required placeholder="Masukkan TTL" class="form-control">
                                </div>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="mapel" autocomplete="off" value="<?= $row->mapel; ?>" required placeholder="Masukkan Nama Mapel" class="form-control">
                                </div>
                                <br>
                                <div class='col-md'>
                                    <input type="text" name="kelas" autocomplete="off" value="<?= $row->kelas; ?>" required placeholder="Masukkan Nama Kelas yang diampu" class="form-control">
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