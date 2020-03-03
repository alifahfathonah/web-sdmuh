<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <hr style="border:0px">
            <a href="<?= base_url() . 'dom_pdf/siswaAdmin/'; ?>">
                <button class="btn btn-primary btn-small">Cetak</button>
            </a>

            <hr style="border:0px">
            <div class="panel panel-primary">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-hover text-center" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($all as $row) : ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->jenis_kelamin; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->telp; ?></td>
                                    <td><?php echo $row->kelas; ?></td>
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