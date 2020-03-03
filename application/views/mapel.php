<div class="bg1"></div>
<section id="services" class="section orange">
    <div class="container">
        <h4>Mata Pelajaran</h4>
        <!-- Four columns -->
        <div class="row">
            <?php foreach ($detail as $row) : ?>
                <div class="span3 animated-fast flyIn">
                    <div class="service-box">
                        <img src="<?= base_url(); ?>assets/img/icons/laptop.png" alt="" />
                        <h4><?= $row->nama; ?></h4>
                        <h2><?= $row->nama_guru; ?></h2>
                        <p><?= $row->deskripsi; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- end section: services -->