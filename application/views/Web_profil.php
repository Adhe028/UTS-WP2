<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href='<?= base_url('asset/css/bootstrap.min.css'); ?>' >

    <title>Rental Mobil</title>
  </head>
  <body>



    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
   
      <div class="collapse navbar-collapse container" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#list">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav float-right">
          <li class="nav-item">
            <a class="nav-link active" href="<?= site_url('login');?>">
              <img src='<?= base_url('asset/img/log-in.png'); ?>' width="28" height="28" class="d-inline-block align-top" alt="icon"> Login</a>
          </li>
        </ul>
      </div>
    </nav>


<div class="jumbotron bg-white" id="home" >
  <img  class="mt-4 container-fluid text-center" src='<?= base_url('asset/img/mbl.png'); ?>' width="100%"  alt="jumbotron">
</div>

<div class="bg-secondary text-white py-3 ">
<div class="container " id="about">
  <div class="row mb-3" >
    <div class="col text-center ">
      <h1>About Us</h1>
    </div>
  </div>

  <div class="row">
    <div class="col text-justify">
      <p>Memakai kendaraan umum di Jakarta kelihatannya adalah pilihan yang paling tepat,
         tetapi alternatif berkeliling Jakarta dengan lebih aman dan nyaman adalah dengan 
         jasa rental mobil yang akan mengantarkan anda dari satu tujuan ke tujuan lainnya
         dengan lebih mudah. Rental Mobil Com didirikan dengan tujuan memberikan layanan
         rental mobil yang maksimal untuk semua orang, baik expat, pengunjung, juga 
         perusahaan nasional dan internasional yang membutuhkan rental mobil jangka 
         pendek maupun panjang dengan harga yang bersaing serta layanan berkualitas.</p>
    </div>
    <div class="col text-justify">
      <p>Ketika anda memerlukan rental mobil jangka pendek atau rental mobil jangka panjang 
        di Jakarta, Indonesia; kami siap membantu dengan jalan menyediakan rental mobil jakarta 
        dengan kondisi yang prima. Jenis – jenis mobil yang kami sediakan: Rental Alphard, 
        Rental Avanza, Rental Innova, Rental Fortuner, Rental Camry, serta jenis mobil lainnya. <br>
        Selain Rental Mobil di Jakarta, anda dapat menyewa mobil di berbagai lokasi populer, 
        diantaranya Jasa Rental Mobil di Jakarta, Bandung, Bali, Surabaya, Padang, Medan, Makasar, 
        Pontianak dan juga di kota - kota besar lainnya di Indonesia.</p>
    </div>
  </div>
</div>
</div>


<div class="container mt-5" id="list">
  <div class="row" >
    <div class="col text-center mb-3">
      <h1>List Mobil</h1>
    </div>
  </div>

  <div class="row mb-3" >
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src='<?= base_url('asset/img/thumbs/avanza.jpg'); ?>' height="250" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Avanza</h5>
          <p class="card-text">Rp. 300 RB/Hari <br>Max. Penumpang 7 Orang </p>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src='<?= base_url('asset/img/thumbs/alpard.jpg'); ?>' height="250" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Alphard</h5>
          <p class="card-text">Rp. 800 RB/Hari <br>Max. Penumpang 6 Orang</p>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src='<?= base_url('asset/img/thumbs/xpander.jpg'); ?>' height="250" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Xpander</h5>
          <p class="card-text">Rp. 350 RB/Hari <br>Max. Penumpang 7 Orang</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src='<?= base_url('asset/img/thumbs/calya.png'); ?>' height="250" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Calya</h5>
          <p class="card-text">Rp. 200 RB/Hari <br>Max. Penumpang 7 Orang</p>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src='<?= base_url('asset/img/thumbs/yaris.jpg'); ?>' height="250" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Yaris</h5>
          <p class="card-text">Rp. 250 RB/Hari <br>Max. Penumpang 4 Orang</p>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img class="card-img-top" src='<?= base_url('asset/img/thumbs/fortuner.jpg'); ?>' height="250" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Fortuner</h5>
          <p class="card-text">Rp. 600 RB/Hari <br>Max. Penumpang 7 Orang</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="bg-dark py-3 mt-5" id="contact">
  <div class="container text-center text-white "> 
    <h1>Contact Us</h1>
  </div>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="#"><img src='<?= base_url('asset/img/facebook.png'); ?>'  height="50" width="50" class="d-inline-block align-top" alt="icon"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><img src='<?= base_url('asset/img/instagram.png'); ?>'  height="50" width="50" class="d-inline-block align-top" alt="icon"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><img src='<?= base_url('asset/img/twitter.png'); ?>'  height="50" width="50" class="d-inline-block align-top" alt="icon"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#"><img src='<?= base_url('asset/img/whatsapp.png'); ?>' height="50" width="50" class="d-inline-block align-top" alt="icon"></a>
    </li>
  </ul>
  <div class="text-center text-muted mt-3">
    <p>Copyright © 2020 </p>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>