<div class="container marketing panel-default">
	<div class="container row py-51 ">
     <div class="col-xxl-8 pl">
    <div class="row flex-lg-row-reverse align-items-center g-5">
	<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Beranda</a></li>
	<li class="breadcrumb-item active" aria-current="page">PPDB 2025/2026</li>
	</ol>
	</nav>	
    </div>
    </div>
    </div>
<div class="container panel">
	<!-- /.row -->
		<form class="needs-validation" novalidate action="<?php echo base_url(); ?>ppdb" method="post">
		<div class="row">
              <div class="input-field col s6">
                <input id="first_name" name="nama_depan" type="text" class="validate" required>
                <label for="first_name" class="active">Nama Depan</label>
				<div class="invalid-feedback">Mohon input nama depan siswa.</div>
              </div>
              <div class="input-field col s6">
                <input id="last_name" name="nama_belakang"type="text" required>
                <label for="last_name" class="">Nama Belakang</label>
				 <div class="invalid-feedback">Mohon input nama belakang siswa.</div>
              </div>
            </div>
			<div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select name="jenis_kelamin" required">
				<option disabled value="">Pilih</option>
				<option value="Putra" selected>Putra</option>
				<option value="Putri">Putri</option>
			 </select></div>
			  <label>Jenis Kelamin</label>
			</div>
		  </div>
			<div class="row">
              <div class="input-field col s12">
                <input id="tempat_lahir" name="tempat_lahir" type="text" class="validate" required>
                <label for="password" class="">Tempat</label>
				<div class="invalid-feedback">Mohon input tempat lahir siswa.</div>
              </div>
            </div>
			<div class="row">
              <div class="input-field col s12">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="validate" required>
                <label for="password" class="">Tanggal Lahir</label>
				<div class="invalid-feedback">Mohon input tanggal lahir siswa.</div>
              </div>
            </div>
			<div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select name="agama" tabindex="-1" required>
				<option disabled value="">Pilih</option>
				<option value="1" selected>Islam</option>
				<option value="2">Kristen</option>
				<option value="3">Budha</option>
			  </select></div>
			  <label>Agama</label>
			</div>
		  </div>
		   <div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select name="status" tabindex="-1" required="true">
				<option disabled value="">Pilih</option>
				<option value="1" selected>Anak Kandung</option>
				<option value="2">Anak Tiri</option>
			</select></div>
			  <label>Status Keluarga</label>
			</div>
		  </div>
		  <div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select name="anak_ke" tabindex="-1" required>
				<option disabled value="">Pilih</option>
				<option value="1" selected>Ke-1</option>
				<option value="2">Ke-2</option>
				<option value="3">Ke-3</option>
			  </select></div>
			  <label>Anak Ke</label>
			</div>
		  </div>
		  <div class="row">
              <div class="input-field col s12">
                <input id="asal" name="asal_slkh" type="text" class="validate" required>
                <label for="password" class="">Asal Sekolah</label>
				<div class="invalid-feedback">Mohon input asal MTS siswa.</div>
              </div>
            </div>
			<div class="row">
              <div class="input-field col s12">
                <input id="nm_ayah" name="nm_ayah" type="text" class="validate" required>
                <label for="password" class="">Nama Ayah</label>
				<div class="invalid-feedback">Mohon input nama ayah siswa.</div>
              </div>
            </div>
			<div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select name="pekerjaan_ayah" tabindex="-1" required>
				<option disabled value="">Pilih</option>
				<option value="1" selected>Petani</option>
				<option value="2">Wirausaha</option>
				<option value="3">PNS</option>
			  </select></div>
			  <label>Pekerjaan Ayah</label>
			</div>
		  </div>
			<div class="row">
              <div class="input-field col s12">
                <input id="nm_ibu" name="nm_ibu" type="text" class="validate" required>
                <label for="password" class="">Nama Ibu</label>
				<div class="invalid-feedback">Mohon input nama ibu siswa.</div>
              </div>
            </div>
			  <div class="row">
			<div class="input-field col s12">
			  <div class="select-wrapper">
			 <select id="pekerjaan_ibu" name="pekerjaan_ibu" tabindex="-1" required>
				<option disabled value="">Choose your option</option>
				<option value="1">Petani</option>
				<option value="2" selected="">Rumah Tangga</option>
				<option value="3">PNS</option>
			   </select></div>
			  <label>Pekerjaan Ibu</label>
			</div>
			</div>
			 <div class="row">
			<div class="input-field col s12">
			  <textarea id="alamat_ortu" name="alamat_ortu" class="materialize-textarea" required></textarea>
			  <label for="textarea-normal" class="active">Alamat Orang Tua</label>
			  <div class="invalid-feedback">Mohon input alamat orang tua siswa.</div>
			</div>
			</div>
			 <div class="row">
			<div class="input-field col s12">
			 <div class="select-wrapper">
				<button type="submit" class="btn btn-primary">Kirim</button>
		  	</div>
		  	</div>
		  </div>
		  </form>
		  </div>
		  </div>
	  
	  