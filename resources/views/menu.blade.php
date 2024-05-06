<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
    <!-- <style>
      *{
        margin: 0;
        padding: 0;
        
      }
      /* Gradasi warna linear dari atas ke bawah */
      .gradient-bg {
        background: linear-gradient(to right, #fff,#1F4590, #1F4590);
        height: 70px; /* Sesuaikan tinggi sesuai kebutuhan */
      }
      .btn-custom{
      border-radius: 20px;
      background-color: #35FF14; 
      }
      .nav-custom {
        margin-right: 40px;

      }
      .carousel-item img {
      height: 500px; /* Sesuaikan tinggi gambar sesuai kebutuhan */
      object-fit: cover; /* Memastikan gambar memenuhi tinggi yang diatur dan tetap proporsional */
      }
      /* Gaya untuk teks di atas gambar */
      .carousel-caption-absolute {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        
        
      }
    .imglogo{
      width: 80px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 40px; 
      
    }
    .HeaderJdl{
        height: 150px;
        width: 700px;
        background-color: gray;
        border-radius: 20px;
        justify-content: center;   
        align-items: center;
        display: flex;
        opacity: 0.8;    
    }
    .custom-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    
    }
    .custom-grid > div{
      border: 0;
    }
    .custom-grid1 {
      display: grid;
      
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
    }
    .custom-grid1 > div{
      border: 0;
    }
    .custom-grid-item {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    .custom-grid-item img {
      max-width: 100%;
      height: auto;
    }
    .custom-card {
      border: 1px solid #ccc;
      padding: 20px;
      margin: 10px;
      display: flex;
      text-align: center;
      
    }
    .custom-img{
      max-width: 100%;
      height: 50px;
      align-items: center;

    }
    .custom-text{
      text-align: justify;
      align-items: center;
      padding-left: 4px;
    }
    .custom-button{
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      text-decoration: none;
      cursor: pointer;
      border: 1px solid #3498db;
      background-color: #01A6A6;
      color: #ffffff;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .custom-button :hover{
      background-color: #3498db;
      color: #fff;
    }
    .custom-icon{
      background-color: #ffffff;
      height: 100%; 
      width: 150px; 
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  
    }
    /* footer */
    .custom-sosmed-ft > div > img{
      height: 30px;
      cursor: pointer;
      
    }
    </style> -->
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark gradient-bg sticky-top">
      <div class="container-fluid">
        
        <img class="imglogo" src="assets/LOGO_PT_DKI-removebg-preview.png" alt="" srcset="">
        <ul class="nav justify-content-end nav-custom " >
          <li class="nav-item">
            <a class="nav-link text-white " href="#beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#tentangKami">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#kontak">Kontak</a>
          </li>
          <button type="button" class="btn  text-white btn-custom">Profile</button>
        </ul>
       
        
      </div>
    </nav>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/Services Law/Hukum.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/Services Law/Hukum.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/Services Law/Hukum.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <div class="carousel-caption-absolute">
        <div class="HeaderJdl" >
            <h1 style="font-size: 70px;">LAYANAN HUKUM</h1>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 
    <div class="container"> 
        <div class="card mx-auto mb-3 mt-4 " style="max-width: 1347px; border: 0;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="assets/Services Law/Rectangle 91.png" class="img-fluid" alt="..." style="width: 100%; height: 100%;">
            </div>
                <div class="col-md-8">
                    <div class="card-body" >
                        <h5 class="card-title" style="font-size: 30px;">PT. Digital Kerakyatan Indonesia</h5>
                        <hr>
                        <p class="card-text" style="font-size: 20px; text-align: justify;">PT. Digital Kerakyatan Indonesia adalah Agensi hukum yang menyediakan solusi hukum bagi klien korporasi maupun perorangan. Berkantor pusat di Daerah Istimewa Yogyakarta, kantor pengacara jogja kami memiliki wilayah kerja di seluruh Indonesia. Anggota tim kami tersebar di berbagai kota besar dengan keahlian dan sertifikasi khusus dalam masing-masing bidang hukum serta memiliki pengalaman di BUMN, pemerintahan, perusahaan besar swasta dan lainnya yang menjadikan kami memiliki pemahaman yang mendalam serta jangkauan luas yang efektif dalam memberikan layanan untuk klien di berbagai sektor. 
                        </p>
                    </div>
                </div>
            </div>
        </div>    
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="custom-card" style="border: 0;">
                <div class="p-1 custom-icon" >
                  <img class="custom-img" src="assets/icons/Law.png" alt="" srcset="">
                </div>
                <div class="custom-text" >
                  <h6>Berpengalaman</h6>
                  <p style="font-size: 11px;">Advokat-advokat yang membantu anda di Run Law Office adalah orang-orang yang berpengalaman di bidang hukum</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="custom-card"  style="border: 0;">
                <div  class="p-1 custom-icon" >
                  <img class="custom-img" src="assets/icons/Note.png" alt="" srcset="">
                </div>
                <div class="custom-text" >
                  <h6>Berpengalaman</h6>
                  <p style="font-size: 11px;">Advokat-advokat yang membantu anda di Run Law Office adalah orang-orang yang berpengalaman di bidang hukum</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="custom-card"  style="border: 0;">
                <div  class="p-1 custom-icon" >
                  <img class="custom-img" src="assets/icons/person.png" alt="" srcset="">
                </div>
                <div class="custom-text">
                  <h6>Berpengalaman</h6>
                  <p style="font-size: 11px;">Advokat-advokat yang membantu anda di Run Law Office adalah orang-orang yang berpengalaman di bidang hukum</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-4" style=" background-color:#DBDBDB;">
        <div style="text-align: center; ">
            <h1>Services Law</h1>
        </div>
        <div class="container mt-4">
          <div class="row custom-grid" >
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 100.png" alt="Image 1">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 101.png" alt="Image 2">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 102.png" alt="Image 3">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 103.png" alt="Image 4">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 104.png" alt="Image 5">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 105.png" alt="Image 6">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 106.png" alt="Image 7">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 107.png" alt="Image 8">
            </div> 
          </div>
          <div class="row  custom-grid1">
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 108.png" alt="Image 9">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 98.png" alt="Image 10">
            </div>
            <div class="col custom-grid-item">
              <img src="assets/Services Law/Rectangle 99.png" alt="Image 11">
            </div>
          </div>
          
        
        </div>
        
        </div>
    </div>
    <div class="container-fluid " style="background-color: #1F4590; color: #ffffff; padding: 100px;">
        <div style="text-align: center;">
          <h1>Ingin Konsultasi Hukum? Langsung Hubungi Kami Sekarang !</h1>
          <button class="custom-button">Konsultasi Sekarang - Free</button>
        </div>
      
    </div>
   <!-- ini footer -->
   <div class="container" style="background-color: #ffffff;">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
      <div class="col mb-3">
        <!-- <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a> -->
        <p>Jl. Asem Baris Raya No. 15 C
          Jakarta Selatan
          DKI Jakarta</p>
        <div class="row custom-sosmed-ft">
          <div class="col col-md-3">
            <img src="assets/icons/ig.png" alt="">
          </div>
          <div class="col col-md-3">
            <img src="assets/icons/fb.png" alt="">
          </div>
          <div class="col col-md-3">
            <img src="assets/icons/x.png" alt="">
          </div>
          <div class="col col-md-3">
            <img src="assets/icons/whatsapp.png" alt="">
          </div>

        </div>
        <!-- <p class="text-muted">&copy; 2022</p> -->
      </div>
  
      <!-- <div class="col mb-3">
  
      </div> -->
  
      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>
  
      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>
  
      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>
      
      <div class="col ">
        <!-- <h5>Section</h5> -->
        <ul class="nav flex-column">
          <img src="assets/LOGO_PT_DKI-removebg-preview.png" alt="" style="height: auto;" width="250px">
        </ul>
      </div>
      <div class="col">
        <p class="text-muted">&copy; 2023 Company, Inc. All rights reserved.</p>
      </div>

    </footer>
  </div>
    
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>