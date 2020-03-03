<div class="bg1"></div>
<section id="services" class="section">
    <div class="container">
        <h4>Fasilitas</h4>
        <!-- Four columns -->
        <?php foreach ($detail as $row) : ?>
            <center>
                <div class="card" style="max-width: 720px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/blog/img1.jpg') ?>" class="card-img" alt="...">
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row->nama; ?></h5>
                                <p class="card-text"><?= $row->deskripsi; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        <?php endforeach; ?>
    </div>
</section>
<!-- end section: services -->