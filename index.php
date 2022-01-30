<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><penerimaan mahasiswa baru></title>
  </head>
  <body>
      <?php
      session_start();
      if (!isset($_SESSION['username'])) {
          header("location:login.php");
      }
      ?>
      
   <div class="container">
           <div class="raw">
           <div class="col-md=12"></div>
           <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container-fluid">
      <a class="navbar-brand" href="#">PENERIMAAN MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=data siswa">DATA_SISWA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=calon siswa">calon_mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=admin">admin</a>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LAPORAN
          </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="?x=pmahasiswa">calon_mahasiswa</a></li>
             <li><a class="dropdown-item" href="?x=padmin">admin</a></li>
             <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class ="nav-link"href="?x=keluar">keluar</h>
    </li>
       
      </ul>
      
    </div>
  </div>
</nav>
   <div class="row">      
       <div class="col-md-4">
</--sidebar-->
<h4>sidebar</h4>

<ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
</div>
<div class="col-md-8">
<?php include("control.php");?>

</div>
</div>
<div class="row">
    <div class="col-md-12">
        <P class="text-center font-weight-bold"> PENERIMAAN MAHASISWA &copy; 2022</P>
        



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
