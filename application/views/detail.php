  <div class="container-fluid bg-primary py-5 page-header">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
			<h1 class="display-3 text-white animated slideInDown">Berita</h1>
			</div>
		</div>
	</div>
</div>
<div class="marketing">
	<div class="px-l6 py-51 ">
		<div class="col-xxl-8 px-12">
			<div class="row flex-lg-row-reverse align-items-center g-5">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Beranda</a></li>
						<li class="breadcrumb-item"><a href="#">Berita</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $record->title ?></li>
					</ol>
				</nav>
			</div>
			<div class="row">
				<section id="content-berita" class="col-xs-8 col-md-12">
				<div class="title-berita mb-3" data-aos="fade-up" data-aos-delay="100">
					<h1 class="display-5"><?php echo $record->title ?></h1>
					<span class="wow fadeInDown fst-italic"><i class="bx bxs-calendar me-1"></i>
					<?php echo tgl_long($record->tgl_up) ?></span>
					<span class="ms-3 wow fadeInDown fst-italic"><i class="bx bxs-user me-1"></i>
					admin</span>
				</div>
				<div class="image-berita pe-5  pw" data-aos="fade-up" data-aos-delay="100">
					<figure class="figure w-100">
					<img class="img-fluid w-100" src="<?php echo base_url();?>assets/foto/<?php echo $record->img ?>">
					</figure>
				</div>
				<div class="isi-berita mt-3 pe_1  pw" data-aos="fade-up" data-aos-delay="100">
				<?php echo $record->detail ?>
				</div><br><br>
				</section>
				<section id="sidebar-berita"  class="col-xs-4 col-md-12">
					<h5 class="section-title bg-white text-start text-merah pe-3 ms-3">Berita Terkini</h5>
					<div id="beritaSidebar" class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
						<div class="list-group list-group-flush border-bottom border-top">
						<?php foreach ($pop as $ro){
						echo "
						
						<a href='".base_url()."berita/detail/".$ro['seo']."' class='".($ro['kod'] == $record->kod ? "active" : "")." list-group-item list-group-item-action py-3 lh-tight' data-aos='fade-up' data-aos-delay='100'>
							<div class='d-flex w-10 align-items-center justify-content-between'>
							<strong class='mb-1'>".$ro['title']."</strong>
							</div>
						<div>
							<span><small><i>".tgl_long($ro['tgl_up'])."</i></small></span>
							<span class='px-1'>|</span>
							<span><small><i>Oleh : Admin</i></small></span>
						</div>
						</a>
						";
						}?>
						</div>
					</div>
					<h5 class="section-title bg-white text-start text-merah pe-3 ms-3 mt-5">Berita Populer</h5>
						<div id="agendaSidebar" class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
							<div class="list-group list-group-flush border-bottom border-top">
								<a href="<?php echo base_url()."berita/detail/".$ro['seo']?>" class="list-group-item list-group-item-action py-3 lh-tight">
								<span class="d-table-cell align-middle text-center">24
									<strong class="d-block">Jul</strong></span>
								<span class="d-table-cell align-middle ps-3">It X Fair</span>
								</a>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
</div><!-- /.container -->

