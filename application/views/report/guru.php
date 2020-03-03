<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <hr style="border:0px">
            <a href="<?= base_url() . 'dom_pdf/guruAdmin/'; ?>">
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
                                <th>Id Guru</th>
                                <th>Nama</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Mapel</th>
                                <th>Kelas</th>
                                <th>Gambar</th>
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
                                    <td><?php echo $row->gambar; ?></td>
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