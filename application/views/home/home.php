	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="<?= base_url(); ?>assets/img/sdmuh.png" alt="" style="width: 250px;height:250px" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										Selamat Datang
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										<strong>SD Muhammadiyah 1</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										<strong>Karanganyar</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->

	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Sambutan Kepala Sekolah</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<p>
							Selamat datang di website kami, website ini bertujuan untuk mengenalkan sekolah kami kepada khalayak umum.
							Semoga dengan website ini sekolah kami bisa dikenal lebih banyak orang.
							Semoga menjadikan berkah untuk kita semua,
							Selamat berselancar, semoga bisa bermanfaat untuk anda.
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img class="team-thumb img-circle" src="<?= base_url(); ?>assets/img/team/img-4.jpg" style="width: 200px; height:200px" />
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: services -->
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						Kejarlah ilmu sampai kenegeri China
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: blog -->
	<section id="blog" class="section">
		<div class="container">
			<h4>Kegiatan Terbaru</h4>
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
								<div class="entry-content">
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
			<div class="blankdivider30"></div>
			<div class="aligncenter">
				<a href="<?= base_url('Event'); ?>" class="btn btn-large btn-theme">Kegiatan Lainnya</a>
			</div>
		</div>
	</section>

	<!-- end spacer section -->