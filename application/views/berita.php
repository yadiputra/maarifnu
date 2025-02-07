<div class="container-fluid bg-primary py-4 page-header hide">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
			<h1 class="display-3 text-white animated slideInDown">Berita</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a class="text-white" href="">Home</a></li>
						<li class="breadcrumb-item text-white active" aria-current="page">Berita</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<div class="marketing">
	<div class="px-4 py-51 ">
		<div class="col-xxl-8 px-12">
			<div class="row">
				<section id="content-berita" class="col-md-8 pe-5">
				<div class="container" data-aos="fade-up">
				<div class="row">
				<?php foreach ($btr as $ro){
					echo "
					<div class='post-item col-md-12'>
						<div class='row'>
							<div class='gallery_img col-md-5' data-aos='zoom-in' data-aos-delay='100'>
							<img src='".base_url()."assets/foto/".$ro['img']."' class='card-img-top d-block mx-lg-auto img-fluid' style='height: 200px;' alt='Bootstrap Themes' loading='lazy'>
							</div>
						<div class='col-md-7'>
							<div class='post-inf mb-2'>
								<span class='badge bg-merah' data-aos='fade-down' data-aos-delay='100'>Berita</span>
								<span class='ms-3' ><i class='far fa-user me-1'></i> Admin</span>
								<span class='ms-3'><i class='far fa-calendar-alt me-1'></i>
								 ".tgl_long($ro['tgl_up'])."</span>
							</div>
						<div class='post-title' data-aos='fade-up' data-aos-delay='100'>
							<h5>
							<a href='".base_url()."berita/detail/".$ro['seo']."'>".$ro['title']."</a>
							</h5>
						</div>
						<div class='post-headline title d_berita_detail' data-aos='fade-up' data-aos-delay='100'>
							".$ro['detail']."
						</div>
						</div>
						</div>
					</div>
					";
					}?>
					<div class="col-md-12 mt-5 d-flex justify-content-end">
					<nav>
						<ul class="pagination">
							<?php echo $this->pagination->create_links(); ?>
						</ul>
					</nav>
					</div>
					</div>
				</div><br><br>
				</section>
				<section id="sidebar-berita" class="col-md-4 ps-3">
					<h5 class="section-title bg-white text-start text-merah pe-3 ms-3">Berita Terkini</h5>
					<div id="beritaSidebar" class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
						<div class="list-group list-group-flush border-bottom border-top">
						<?php foreach ($pop as $row){
						echo "
						<a href='".base_url()."berita/detail/".$ro['seo']."' class='list-group-item list-group-item-action py-3 lh-tight'  data-aos='fade-up' data-aos-delay='100'>
							<div class='d-flex w-10 align-items-center justify-content-between'>
							<strong class='mb-1'>".$row['title']."</strong>
							</div>
						<div>
							<span><small><i>".tgl_long($row['tgl_up'])."</i></small></span>
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

