 <section class="content">
        <div class="container-fluid">
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Tambah Berita
                            </h2>
                        </div>
                        <div class="body">
						<form action="<?php echo base_url();?>admin" method="post" enctype="multipart/form-data">
                        <h2 class="card-inside-title">Judul</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" name="judul" class="form-control no-resize" placeholder="Silahkan input judul berita"></textarea>
                                        </div>
                                    </div>
                                </div>
							 </div>
							<h2 class="card-inside-title">Gambar</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
										 <input type="file" class="form-control" name="foto">
                                        </div>
                                    </div>
                                </div>
							 </div>
							  <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                         <h2 class="card-inside-title">Detail Berita</h2>
										<textarea id="ckeditor" name="detail">
										</textarea>
                                    </div>
                                </div>
							 </div>
							<button class="btn btn-primary waves-effect" type="submit" name="submit">Kirim</button>
						 </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
        </div>
    </section>