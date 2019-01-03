<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hadeh</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

    <!-- DATATABLE -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">   -->
    <!-- <link rel="stylesheet" href="css/dataTables.bootstrap.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">E - Procurement PTNW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengumuman.html">Pengumuman Lelang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rekanan Vendor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">S & K</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ's</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Lo Jual Gue Beli</h1>
          <h2 class="masthead-subheading mb-0">skripsi</h2>
          <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Sign in</a>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header> -->
    <div class="container"> 
      <br>
      <?php
        include 'Pengumuman.php';
      ?>
      <br>
    </div>


    

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
<script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>
<script href="https://code.jquery.com/jquery-3.3.1.js"></script>
<script href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
</html>
