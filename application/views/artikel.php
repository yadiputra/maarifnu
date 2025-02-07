<div class="container marketing panel-default">
	<div class="container row py-51 ">
     <div class="col-xxl-8 pl">
    <div class="row flex-lg-row-reverse align-items-center g-5">
	<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Beranda</a></li>
	<li class="breadcrumb-item active" aria-current="page">Artikel Kelas XII</li>
	</ol>
	</nav>	
    </div>
    </div>
    </div>
<div class="container panel">
	<!-- /.row -->
		<form class="needs-validation" novalidate action="<?php echo base_url(); ?>artikel" method="post" enctype="multipart/form-data">
			<div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select name="kelas" required">
				<option disabled value="">Pilih</option>
				<option value="XII IPA" selected>Kelas XII IPA</option>
				<option value="XII IPS">Kelas XII IPS</option>
			 </select></div>
			  <label>Kelas</label>
			</div>
		  </div>
			<div class="row">
              <div class="input-field col s12">
                <input id="nama" name="nama" type="text" class="validate" required>
                <label for="password" class="">Nama - Nama Kelompok</label>
				<div class="invalid-feedback">Mohon nama - nama anda</div>
              </div>
            </div>
			<div class="row">
              <div class="input-field col s12">
                <input name="tugas" type="file" class="validate" required>
               <div class="invalid-feedback">Mohon file tugas</div>
              </div>
            </div>
			 <div class="row">
			<div class="input-field col s12">
			 <div class="select-wrapper">
				<button type="submit" name="submit" class="btn btn-primary">Kirim</button>
		  	</div>
		  	</div>
		  </div>
		  </form>
		  </div>
		  </div>
	  
	  