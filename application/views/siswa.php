<div class="bg3"></div>
<section id="about" class="section">

    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Siswa</h4>
            </div>
        </div>
        <div class="row">
        </div>
        <div class="row">
            <div class="col">
                <div class="panel-body">
                    <table width="100%" class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($all as $row) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->jenis_kelamin; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->telp; ?></td>
                                    <td><?php echo $row->kelas; ?></td>
                                    <td>
                                        <a href="<?= base_url() . 'dom_pdf/index/' . $row->id; ?>">
                                            <button class="btn btn-danger btn-small">Cetak</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>