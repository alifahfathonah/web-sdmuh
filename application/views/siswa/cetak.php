<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cetak Nilai</title>
</head>

<body>
    <?php foreach ($record->result() as $row) : ?>
        <h1>
            <center>
                Data Siswa
            </center>
        </h1>
        <table class="table table-bordered">
            <tbody class="text-center">
                <tr>
                    <th>Nama</th>
                    <td><?php echo $row->nama; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $row->jenis_kelamin; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo $row->alamat; ?></td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td><?php echo $row->telp; ?></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td><?php echo $row->kelas; ?></td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>