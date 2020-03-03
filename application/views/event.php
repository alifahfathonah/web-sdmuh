<div class="bg2"></div>
<section id="blog" class="section">
    <div class="container">
        <h4>Kegiatan</h4>
        <!-- Three columns -->
        <div class="row">
            <?php foreach ($detail as $row) : ?>
                <div class="col-md-4 mb-4">
                    <div class="span3">
                        <div class="home-post">
                            <div class="post-image">
                                <img class="max-img" src="<?= base_url(); ?>assets/img/blog/img1.jpg" alt="" />
                            </div>
                            <div class="post-meta">
                                <i class="icon-file icon-2x"></i>
                                <span class="date"><?= $row->tanggal; ?></span>
                            </div>
                            <div class="entry-content" style="min-height: 200px">
                                <h5><strong><a><?= $row->nama; ?></a></strong></h5>
                                <p>
                                    <?= $row->deskripsi; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>