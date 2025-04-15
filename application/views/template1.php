<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin MA MA"ARIF NU</title>
    <link href="<?php echo base_url(); ?>assets/foto/logo.png" rel="icon">
 
    <link href="<?php echo base_url(); ?>assets/foto/logo.png" rel="icon">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/summernote/summernote-bs4.min.css">
    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-select.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">MA MA'ARIF NU</a>
            </div>
           
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(); ?>assets/foto/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Yadi</div>
                    <div class="email">Yadi@maarifnu.my.id</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url();?>admin">
                            <i class="material-icons">assignment</i>
                            <span>Tambah Berita</span>
                        </a>
                    </li>
					<li class="">
                        <a href="<?php echo base_url();?>prestasi">
                            <i class="material-icons">assignment</i>
                            <span>Tambah Prestasi</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    Copyright © <?php echo date('Y') ?> <a href="javascript:void(0);">Admin MA Ma'arif NU</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
	<?php echo $contents; ?>
    <!-- Jquery Core Js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
        $('#kelas').change(function(){
          var kelas_id = $(this).val();
          $.ajax({
            type:"POST",
            url:"<?php echo base_url('prestasi/nama'); ?>",
            data:"kelas_id="+kelas_id,
            success: function(response){
              $('#nama').html(response);
			}
          })
        })
      })
	</script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/node-waves/waves.js"></script>
	
 <!-- Ckeditor -->
    <script src="<?php echo base_url(); ?>assets/admin/js/ckeditor/ckeditor.js"></script>

   
    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js//admin.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-select.js"></script>-->
	  <script src="<?php echo base_url(); ?>assets/admin/js/editors.js"></script>
	<script src="<?php echo base_url(); ?>assets/summernote/summernote-bs4.min.js"></script>
    	<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

</body>

</html>
