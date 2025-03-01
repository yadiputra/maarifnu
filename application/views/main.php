 <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url();?>assets/foto/slide1.jpg" class="d-block w-100" alt="slide show">
		<div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url();?>assets/foto/slide2.jpg" class="d-block w-100" alt="slide show">
     <div class="container">
          <div class="carousel-caption">
         </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url();?>assets/foto/slide3.jpg" class="d-block w-100" alt="slide show">
		<div class="container">
          <div class="carousel-caption text-end">
           </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev visually-hidden" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next visually-hidden" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="container marketing">
<div class="container" data-aos="fade-up">
<div class="row g-5 mb-5">
<div class="text-center mbt-2" data-aos="fade-up" data-aos-delay="50">
<h3 class="section-title bg-white text-center text-merah px-3" style="">Berita Terkini</h3>
</div>
<div class="col-lg-5 wow fadeInUp" style="height: auto;"  data-aos="fade-right" data-aos-delay="300">
<div class="position-relative h-100">
<div class="gallery_img">
	<img src="<?php echo base_url();?>assets/foto/isra.jpg" class="card-img-top d-block mx-lg-auto img-fluid" alt="berita">
</div>
</div>
</div>
<div class="pd_top1 col-lg-7 wow fadeInUp" data-aos="fade-left" data-aos-delay="300">
	<div class="post-info mb-21">
		<span class="badge bg-merah wow fadeInDown">Berita</span>
		<span class="ms-3 wow fadeInDown fst-italic"><i class="fas fa-user me-1"></i>
		admin</span>
		<span class="ms-3 wow fadeInDown fst-italic"><i class="fas fa-calendar-day me-1"></i>
		<?php echo tgl_long($record->tgl_up) ?></span>
	</div>
	<h3 class=" display-5 fw-bold text-body-emphasis lh-1 mb-5"><?php echo $record->title ?></h3>
	<div class="lead mb-5 title berita"><?php echo $record->detail ?></div>
	 <div class="pricing berita-text">
		  <a class="btn btn-ma buy-btn py-3 px-5 mt--2" href="<?php echo base_url().'berita/detail/'.$record->seo.''; ?>">Selanjutnya</a>			  
	 </div>
</div>
</div>
</div>
    <!-- Three columns of text below the carousel -->
    <!-- /.row -->
	<div class="container" data-aos="fade-up">
	 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
	 <?php foreach ($btr as $ro){
		echo "
           <div class='col' data-aos='zoom-in' data-aos-delay='100'>
          <div class='card'>
           <div class='gallery_img'>
            <img src='".base_url()."assets/foto/".$ro['img']."' class='card-img-top d-block mx-lg-auto img-fluid img-thumbnail' style='height: 200px;' alt='Berita' loading='lazy'>
			</div><div class='card-body dis'>
			<span class='badge bg-merah wow fadeInDown'>Berita</span>
			<span class='ms-3 wow fadeInDown fst-italic'><i class='fas fa-user me-1'></i>
			admin</span>
			<span class='ms-3 wow fadeInDown fst-italic'><i class='fas fa-calendar-day me-1'></i>"
			.tgl_i($ro['tgl_up'])."</span>
              <div class='card-text title d_berita'>".$ro['detail']."</div>
              <div class='pricing  berita-text'>
				  <a class='btn btn-ma buy-btn py-3 px-5 mt-2' href='".base_url()."berita/detail/".$ro['seo']."' class='buy-btn'>Selanjutnya</a>        
			  </div>
            </div>
          </div>
        </div>
		";
		}?>
        </div>
        </div><br><br>
        </div>
	
	<div id="prestasi" class="row" style="background-color: #c1ffe038;border-top: 3px solid #d3ffe2" data-aos="flip-left" data-aos-delay="500" data-aos-duration="1500">
    <div class="col">
	<!-- =========== Konten PRESTASI SISWA ========== -->
	<div class="container mb-3">
		<div class="row mt-5 d-flex justify-content-center">
			<div class="col pb-2">
				<h4 class="mt-0 fw-bolder text-center" style="color: #35814f;">PRESTASI SISWA</h4>
				<hr class="col new2 d-flex justify-content-center" style="color:yellow">
			</div> 
		</div>
		<div class="row d-flex align-items-start" style="font-size: small;">
			<div class="col-xl-2 col-sm-12 nav flex-column nav-pills me-3 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-prestasi nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Tingkat Kabupaten/Kota</button>
				<button class="nav-prestasi nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tingkat Provinsi</button>
				<button class="nav-prestasi nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Tingkat Nasional</button>
			</div>
			<div class="col tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade active show p-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					<div class="row" style="border-radius:20px">
						<?php //print_r($prestasi->result_array());
						foreach ($prestasi as $row){
						echo "<div class='col-xl-3 col-sm-4 pb-4' style='font-size: x-small;'>
								<span><i class='fas fa-medal' style='color:orange' aria-hidden='true'></i> ".$row['nama_siswa']." ( ".$row['juara']." )</span> <br>
								<span class='text-center' style='font-size: xx-small;color:#7F6210'> -- ".$row['jenis_lomba']." --</span>
							</div>
						";}
						?>
					</div>
				</div>
				<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<div class="row p-4" style="border-radius:20px">
						<?php //print_r($prestasi->result_array());
						foreach ($prof as $rows){
						echo "<div class='col-xl-3 col-sm-4 pb-4' style='font-size: x-small;'>
								<span><i class='fas fa-medal' style='color:orange' aria-hidden='true'></i> ".$rows['nama_siswa']." ( ".$rows['juara']." )</span> <br>
								<span class='text-center' style='font-size: xx-small;color:#7F6210'> -- ".$rows['jenis_lomba']." --</span>
							</div>
						";}
						?>
					</div>
				</div>
				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
					<div class="row p-4" style="border-radius:20px">
						
						<?php //print_r($prestasi->result_array());
						foreach ($nas as $rowd){
						echo "<div class='col-xl-3 col-sm-4 pb-4' style='font-size: x-small;'>
								<span><i class='fas fa-medal' style='color:orange' aria-hidden='true'></i> ".$rowd['nama_siswa']." ( ".$rowd['juara']." )</span> <br>
								<span class='text-center' style='font-size: xx-small;color:#7F6210'> -- ".$rowd['jenis_lomba']." --</span>
							</div>
						";}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div><br>
	 
	<div class="container" data-aos="fade-up">
		<div class="row g-5 mb-5">
		<div class="col-lg-1 wow fadeInUp">
		</div>
		<div class="col-lg-4 wow fadeInUp" style="min-height: 400px;" data-aos="zoom-in" data-aos-delay="150">
		<div class="position-relative h-100 gallery_img">
			<img class="img-fluid position-absolute w-100 h-100" src="assets/foto/img10.jpg" alt="">
		</div>
		</div>
		<div class="col-lg-6 wow fadeInUp">
			<h5 class="section-title bg-white text-start text-merah pe-3">PPDB</h5>
			<h5 class="display-4 fw-bold text-body-emphasis lh-1 mb-2">PPDB</h5>
			<div class="lead mb-5 title ppbd">Selamat Datang Di web PPDB Online. Aplikasi Penerimaan Peserta didik baru Tahun Pelajaran 2025/2026 MA Ma'arif NU Musi Rawas. </div>
			  <div class="pricing">
				  <a href="<?php echo base_url().'ppdb'; ?>" class="text-whit btn btn-ma1 buy-btn">DAFTAR</a>        
			  </div>
		
		</div>
		</div>
	</div>
  </div><!-- /.container -->