<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
	<title>MA Ma'arif NU Musi Rawas</title>
	<meta charset="utf-8">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="title" content="<?php echo $keywords; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="subject" content="Situs Pendidikan">
	<meta name="copyright" content="MA MA'ARIF NU Musi Rawas">
	<meta name="language" content="Indonesia">
	<meta name="robots" content="index,follow">
	<meta name="revised" content="">
	<meta name="Classification" content="Education">
	<meta name="designer" content="Trimulyadi, yadyiputra12@gmail.com">
	<meta name="owner" content="MA MA'ARIF NU Musi Rawas">
	<meta name="url" content="MA MA'ARIF NU MUSI RAWAS">
	<meta name="identifier-URL" content="MA MA'ARIF NU MUSI RAWAS">
	<meta name="category" content=" Education">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Copyright" content="MA MA'ARIF NU Musi Rawas">
	<meta name="revisit-after" content="7">
	<meta name="webcrawlers" content="all">
	<meta name="rating" content="general">
	<meta name="spiders" content="all">
	<meta itemprop="name" content="MA MA'ARIF NU Musi Rawas">
	<meta itemprop="description" content="Website resmi Ma Ma'arif NU Musi Rawas">
	<meta name="google-site-verification" content="SEB5TIKO0iAOL_FVIblIBCXqZq7gIx1TXESvWSmsUTg" />
  <!-- Favicons -->
	<link href="<?php echo base_url(); ?>assets/foto/logo.png" rel="icon">
 

	<script src="<?php echo base_url(); ?>assets/js/color-modes.js"></script>
	<link href="<?php echo base_url(); ?>assets/foto/logo.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxiconss.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/dist/css/all.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>assets/vendor/carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/mobile.css" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>assets/aos/aos.css" rel="stylesheet">
	
     <link href="<?php echo base_url(); ?>assets/vendor/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo base_url(); ?>assets/vendor/css/prism.css" rel="stylesheet" />
  </head>
  <body>
<header>
  <?php include "main/header.php"; ?>
</header>
	<?php echo $contents; ?>
<main>
	
  <!-- FOOTER -->
  <footer id="footer">
	<?php include "main/footer.php"; ?>
  </footer>
</main>
  <!-- Vendor JS Files -->
   <script src="<?php echo base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js/materialize.js"></script>
  <script src="<?php echo base_url(); ?>assets/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>


  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  
  <script>
  

		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  var forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()


    $(document).ready(function(){
        $('select').formSelect();
    });
  </script>

    </body>
</html>
