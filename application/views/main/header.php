
<nav class="navbar navbar-expand-md fixed-top bg-darks navbar-light">
    <div id="logo" class="container-fluid right_">
      <a href="<?php echo base_url();?>" class="navbar-brand d-flex align-items-center px-2 px-lg-4 col-md-4 col-9">
		<div class="col-md-12 col-xs-12 ps-2 ">
		<img class="img-fluid pt-2 pb-2" src="<?php echo base_url();?>assets/foto/ma.png">
		</div>
	  </a>
	  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto p-4 p-lg-0">
		<a href="<?php echo base_url()?>" class="nav-item nav-link <?= ($page == "home" ? "active" : ""); ?>">Home</a>
		<div class="nav-item dropdown">
		<a href="#" class="nav-link dropdown-toggle <?= ($page == "tentang" ? "active" : ""); ?>" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
		<div class="dropdown-menu fade-down m-0">
		<a href="<?php echo base_url().'sejarah'; ?>" class="dropdown-item">Sejarah</a>
		<a href="<?php echo base_url().'visi'; ?>" class="dropdown-item">Visi & Misi</a>
		<a href="<?php echo base_url().'struktur'; ?>" class="dropdown-item">Struktur Sekolah</a>
		</div>
		</div>
		<a href="<?php echo base_url()?>#prestasi" class="nav-item nav-link" >Prestasi</a>
		<a href="<?php echo base_url().'estrakulikuler'; ?>" class="nav-item nav-link <?= ($page == "estrakulikuler" ? "active" : ""); ?>">Estrakulikuler</a>
		<a href="<?php echo base_url().'berita'; ?>" class="nav-item nav-link <?= ($page == "berita" ? "active" : ""); ?>">Berita</a>
		<a href="<?php echo base_url().'kontak'; ?>" class="nav-item nav-link <?= ($page == "kontak" ? "active" : ""); ?>">Kontak Kami</a>
		<a href="<?php echo base_url().'ppdb'; ?>" class="nav-item nav-link <?= ($page == "ppdb" ? "active" : ""); ?>">PPDB</a>
		</div>
		</div>

    </div>