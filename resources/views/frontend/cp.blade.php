<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/CompanyProfile.css">
    <!-- crousel -->
   
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
      .carousel-item img {
      height: 500px; /* Sesuaikan tinggi gambar sesuai kebutuhan */
      object-fit: cover; /* Memastikan gambar memenuhi tinggi yang diatur dan tetap proporsional */
      }
      /* Gaya untuk teks di atas gambar */
      .carousel-caption-absolute {
        position: absolute;
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
        text-align: left;
        color: white;
      }
      .nav-custom {
        margin-right: 40px;

      }
      .carousel-indicators {
        bottom: 0;
      }

      .carousel-inner1 img {
        height: 400px;
      }

      .square {
      width: 1124.93px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 1533px; /* Sesuaikan tinggi persegi sesuai kebutuhan */
      background-color: #00A6A6; /* Sesuaikan warna latar belakang persegi sesuai kebutuhan */
      margin-top: 50px; /* Sesuaikan margin sesuai kebutuhan */
      display: flex;
      align-items: center;
      justify-content: center;    
      color: #ffffff; /* Sesuaikan warna teks sesuai kebutuhan */
      font-weight: bold;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px; 
      position: absolute;
      right: 0;
      
    }
    .square1 {
      width: 400px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 172px; /* Sesuaikan tinggi persegi sesuai kebutuhan */
      background-color: #1F4590; /* Sesuaikan warna latar belakang persegi sesuai kebutuhan */
      margin-top: 20px; /* Sesuaikan margin sesuai kebutuhan */
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff; /* Sesuaikan warna teks sesuai kebutuhan */
      font-weight: bold;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px; 
      position: absolute;
      right: 0;
      top: 520px;
      
      
      
    }
    .square2{
      width: 400px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 172px; /* Sesuaikan tinggi persegi sesuai kebutuhan */
      background-color: #1F4590; /* Sesuaikan warna latar belakang persegi sesuai kebutuhan */
      margin-top: 20px; /* Sesuaikan margin sesuai kebutuhan */
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff; /* Sesuaikan warna teks sesuai kebutuhan */
      font-weight: bold;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px; 
      position: absolute;
      right: 0;
      top: 2020px;
    }
    .imgVM{
      width: 511px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 965px;
      position: absolute;
      right: 1000px;
      top: 800px; 
    }
    .imglogo{
      width: 80px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 40px; 
      
    }
      /* Posisi tengah halaman */
      .center {
      position: absolute;
      /* top: 50%;  */
      /* right: 50%; */
      /* transform: translate(-50%, -50%); */
    }
    .btProfile{
      width: 40px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 172px; /* Sesuaikan tinggi persegi sesuai kebutuhan */
      background-color: #1F4590; 

    }
    .card-custom{
      width: 302px; /* Sesuaikan lebar persegi sesuai kebutuhan */
      height: 200px; /* Sesuaikan tinggi persegi sesuai kebutuhan */
    }
  
    .btn-custom{
      border-radius: 20px;
      background-color: #35FF14; 
    }
    .btn-cdetail{
      align-items: center;
      justify-content: center;
      background-color: #1F4590;
      color: #ffffff; /* Sesuaikan warna teks sesuai kebutuhan */
      font-weight: bold;
      display: flex;
      height: 50px;
      width: 251px;
      border-radius: 20px;
      font-size: 25px;
    
    }
    .containercs{
      background-color: #DBDBDB;
      padding-bottom: 70px;
      padding-top: 30px;
     
    }
    .containercs1{
      /* padding-bottom: 72px; */
      padding-top: 70px; 
     
    }
    .teks-custom{
      text-align: center;
      padding-bottom: 30px;
    }
    .btn-position{
      top: 50%;
      left: 50%;
      transform: translate(0%, 350%);

    }
    .garis{
      height: 4px;
      width: 50px;
      background-color: black;
      border-radius: 10px;
      top: 50%;
      left: 50%;
      transform: translate(210%, 1000%);
    }
    .garis1{
      height: 4px;
      width: 40px;
      background-color: black;
      border-radius: 10px;
      top: 50%;
      left: 50%;
      transform: translate(276%, 1040%);
    }
    .grid-cs{
      top: 50%;
      left: 50%;
      transform: translate(-1%, 0%);
    }
    .no-border-radius {
      border-radius: 0;
     
    }
    .custom-visimisi{
      width: 1190px;
    }

    /* Label Brand */
    .brand-card {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 10px;
    }

    .brand-img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
    }
    .custom-button{
      border-radius: 10px; 
      color: #ffffff; 
      background-color: #1F4590; 
      width: 200px;
    }
    /* css bagian contact */
    .custom-contact{
      border: 1px solid #ccc;
      padding: 15px;
      margin: 10px;
      text-align: left;
      align-items: center;
      background-color: #D9D9D9;
    }
    /* Bagian Footer */
    .custom-sosmed-ft > div > img{
      height: 30px;
      cursor: pointer;
      
    }
    
    </style> -->
  </head>
  <body id="beranda">
    <nav class="navbar navbar-expand-sm navbar-dark gradient-bg sticky-top">
      <div class="container-fluid">
          
        

        <img class="imglogo" src="assets/LOGO_PT_DKI-removebg-preview.png" alt="" srcset="">
        <!-- Burger Icon -->
       
        <!-- Navbar -->
        <div class="" id="navbarNav">
          <ul class="nav  justify-content-end nav-custom " >
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
        
      </div>
    </nav>

    @foreach($data1 as $item)
    <div id="carouselExampleSlidesOnly" class="carousel slide slide-custom" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img1/'.$item->img1)}}" class="d-block w-100" alt="..." srcset="">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img2/'.$item->img2)}}" class="d-block w-100" alt="..." srcset="">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img3/'.$item->img3)}}" class="d-block w-100" alt="..." srcset="">
        </div>
      </div>
    

      <div class="">
      
        <h1>{{ $item -> Judul }} </h1>
        <p>{{ $item -> Description }} </p>
      </div>
      
      @endforeach
    
      
       <div class="container mx-auto">

      <div>
        @foreach($data2 as $blog)
        <img src="{{ asset('img/'.$blog->img)}}" class="d-block w-100" alt="..." srcset="">
        <!-- <img src="{{asset('img/'.$blog->img)}}" alt=""> -->
        @endforeach

      </div>
     
  <div>
    @foreach($data3 as $dash)
      <div id="profile" class="container-fluid mx-auto pt-4" style="background-color: #DBDBDB;" >
        <!-- tadi disini ada class containercs -->
        <div class="row">
          <div class="teks-custom">
            <h1>{{ $dash -> Judul }}</h1>
            <p>{{ $dash -> Desc }}</p>
          </div>
          <div class=" mx-auto ">
            <div class="row g-0">
              
            <div class="row g-0 ">
              <div class="col-md-2">
                <div class="card  no-border-radius">
                <img src="{{ asset('img1/'.$dash->img1)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card  no-border-radius">
                <img src="{{ asset('img2/'.$dash->img2)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card no-border-radius">
                <img src="{{ asset('img3/'.$dash->img3)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card  no-border-radius">
                <img src="{{ asset('img4/'.$dash->img4)}}" class="d-block w-100" alt="..." srcset="">
                
                </div>
              </div>
              <div class="col-md-2">
                <div class="card no-border-radius">
                <img src="{{ asset('img5/'.$dash->img5)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card no-border-radius">
                <img src="{{ asset('img6/'.$dash->img6)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <!-- Add more columns as needed for the second row -->
            </div>
            <div class="row g-0 ">
              <div class="col-md-2">
                <div class="card  no-border-radius">
                <img src="{{ asset('img7/'.$dash->img7)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card  no-border-radius">
                <img src="{{ asset('img8/'.$dash->img8)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card no-border-radius">
                <img src="{{ asset('img9/'.$dash->img9)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card  no-border-radius">
                <img src="{{ asset('img10/'.$dash->img10)}}" class="d-block w-100" alt="..." srcset="">
                
                </div>
              </div>
              <div class="col-md-2">
                <div class="card no-border-radius">
                <img src="{{ asset('img11/'.$dash->img11)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
              <div class="col-md-2">
                <div class="card no-border-radius">
                <img src="{{ asset('img12/'.$dash->img12)}}" class="d-block w-100" alt="..." srcset="">
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach

          @foreach($data4 as $lay)
          <div id="layanan" class="teks-custom mt-5 mb-5">
            <h1>{{$lay -> Judul}}</h1>
            
            <div class="container text-center" >
              <div id="carouselExample" class="carousel slide" >
                <div class="d-flex justify-content-end m-2">
                  <button type="button" class="  me-2"  data-bs-target="#carouselExample" data-bs-slide="prev" style="border-radius:100px ; border: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" aria-hidden="true" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                    </svg>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button type="button" class=""  data-bs-target="#carouselExample" data-bs-slide="next" style="border-radius: 100px ; border: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" aria-hidden="true" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                    </svg>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="carousel-inner " style=" padding-bottom: 60px;">
                  <div class="carousel-item active">
                   
                    <div class="row row-cols-4 row-cols-md-4 g-4 text-center">
                      <div class="col" >
                        <div class="card h-100 border-radius-20" >
                          <img src="{{ asset('img1/'.$lay->img1)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card1}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100 border-radius-20">
                        <img src="{{ asset('img2/'.$lay->img2)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card2}}</h5>
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="button" class="btn custom-button">Detail</button>
                        </div>
                      </div>
                      <div class="col" >
                        <div class="card h-100 border-radiu-20">
                        <img src="{{ asset('img3/'.$lay->img3)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card3}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                      <div class="col" >
                        <div class="card h-100 border-radius-20">
                        <img src="{{ asset('img4/'.$lay->img4)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card4}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row row-cols-4 row-cols-md-4 g-4 text-center">
                      <div class="col" >
                        <div class="card h-100 border-radius-20">
                        <img src="{{ asset('img5/'.$lay->img5)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card5}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                      <div class="col" >
                        <div class="card h-100 border-radius-20">
                        <img src="{{ asset('img6/'.$lay->img6)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card6}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                      <div class="col" >
                        <div class="card h-100 border-radius-20">
                        <img src="{{ asset('img7/'.$lay->img7)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card7}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                      <div class="col" >
                        <div class="card h-100 border-radius-20">
                        <img src="{{ asset('img8/'.$lay->img8)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top "style="height: 200px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$lay -> Card8}}</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <div class="btn-position">
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="height: 3px; width: 40px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                              <div class="icons-center d-flex justify-content-center align-items-center">
                                <div style="margin: 4px; height: 3px; width: 30px; border-radius: 5px; background-color: #000;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2"  >
                          <button type="button" class="btn custom-button" >Detail</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                    
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  @endforeach

  @foreach($data5 as $ab)
    <div id="tentangKami" class="container-fluid containercs1 mt-5" style="background-color: #ffffff;">
      <div class="teks-custom">
        <h1>{{ $ab -> Judul }} <br></h1>
      </div>
      <div class="card mx-auto mb-3" style="max-width: 1347px; border: none;">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 50px;">{{ $ab -> Desc1 }}</h5>
              <p class="card-text" style="font-size: 20px;">{{ $ab -> Desc2 }}<br><hr>
        
              <button type="button" class="btn custom-button">Detail</button>
            </div>
          </div>
          <div class="col-md-6">
          <img src="{{ asset('img/'.$ab->img)}}" class="d-block w-100" alt="..." srcset="">
          </div>
        </div>
      </div>
      @endforeach
      <!-- Grid Anggota Perusahaan -->

      @foreach($data6 as $st)
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="{{ asset('img1/'.$st->img1)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">{{$st -> Nama1}}</h5>
                <h6 class="card-text">{{$st -> jabatan1}}</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
            <img src="{{ asset('img2/'.$st->img2)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">{{$st -> Nama2}}</h5>
                <h6 class="card-text">{{$st -> jabatan2}}</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
            <img src="{{ asset('img3/'.$st->img3)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">{{$st -> Nama3}}</h5>
                <h6 class="card-text">{{$st -> jabatan3}}</h6>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
            <img src="{{ asset('img4/'.$st->img4)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">{{$st -> Nama4}}</h5>
                <h6 class="card-text">{{$st -> jabatan4}}</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
            <img src="{{ asset('img5/'.$st->img5)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">{{$st -> Nama5}}</h5>
                <h6 class="card-text">{{$st -> jabatan5}}</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
            <img src="{{ asset('img6/'.$st->img6)}}" class="d-block w-100" alt="..." srcset="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer;">{{$st -> Nama6}}</h5>
                <h6 class="card-text">{{$st -> jabatan6}}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- sadsaf -->
      @foreach($data7 as $test)
      <div class="container mx-auto mb-3 mt-5" >
        <h3 style="text-align: left;">{{$test -> Judul}}</h3>
        <div class="card  mx-auto mb-3" style="max-width: 1120px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/'.$test->img)}}" class="img-fluid rounded-start" alt="...">
          </div>
              <div class="col-md-8">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size: 50px;">{{$test -> Nama}}</h5>
                      <p class="card-text" style="font-size: 20px;">{{$test -> Desc}}<br><hr></p>
                      <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                      <button type="button" class="btn custom-button">Detail</button>
                    </div>
                  
              </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    @foreach($data8 as $brand)
    <!-- Brand Slider -->
    <div class="container" style="padding-top: 30px;">
      <h1 class="mt-4 mb-4 text-center">{{ $brand -> Judul}}</h1>

      <div class="row justify-content-center">
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img/'.$brand->img)}}" alt="Brand 1" class="brand-img">
              <!-- <p>Brand 1</p> -->
          </div>
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img1/'.$brand->img1)}}" alt="Brand 2" class="brand-img">
              <!-- <p>Brand 2</p> -->
          </div>
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img2/'.$brand->img2)}}" alt="Brand 2" class="brand-img">
              <!-- <p>Brand 3</p> -->
          </div>
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img3/'.$brand->img3)}}" alt="Brand 2" class="brand-img">
              <!-- <p>Brand 4</p> -->
          </div>
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img4/'.$brand->img4)}}" alt="Brand 2" class="brand-img">
              <!-- <p>Brand 5</p> -->
          </div>
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img5/'.$brand->img5)}}" alt="Brand 2" class="brand-img">
              <!-- <p>Brand 6</p> -->
          </div>
          <div class="col-md-2 brand-card">
              <img src="{{ asset('img6/'.$brand->img6)}}" alt="Brand 2" class="brand-img">
              <!-- <p>Brand 7</p> -->
          </div>
          <!-- Add more brand cards as needed -->

      </div>
  </div>
    @endforeach

      

    <!-- <div class="container">
         Isi konten di sini 
        <div class="row">
          <div class="">
            <div class="square">Isi Persegi biru</div>
            <div class="square1">Isi Persegi hijau</div>
            <div class="square2">Isi Persegi hijau</div>
            <img class="imgVM" src="assets/imgVisiMisi.png" alt="" srcset="">
          </div>
        </div>
      </div> -->
      <!-- coba card -->

    <!-- Bagian Kontak -->
    <div id="kontak" class="container ">
      <div class="row">
        <div class="col-md-3">
          <div class="custom-contact">
            <h5>Address</h5>
            <p>Moon Street , 446 Jupiter,
              JP 44600</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="custom-contact">
            <h5>Email</h5>
            <p>zakra@demos.com
              first.last@demos.com</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="custom-contact">
            <h5>Phone</h5>
            <p>Call : +(123) 456-7890
              Call : +977 123-456789</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="custom-contact">
            <h5>Time</h5>
            <p>Mon – Sat : 9AM – 6 PM
              Sunday : Closed</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <img src="assets/bgcontact.png" alt="" style="align-items: center;width: 100%;">
      <div class="" style="height: 250px;width: 100%; border: 2px solid #D4D5CF; background-color: #D4D5CF;" > 
        <div class="mt-4 mb-4 text-center">
          <h1 >Apakah Ada yang Ingin Anda Tanyakan?</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien,<br> duduk sed accumsan, viverra sociis ullamcorper aenean fermentum.</p>
          <button type="button" class="btn custom-button" style="background-color: #01A6A6;" >CALL US NOW</button>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Modal Coba  -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Lanny Budiati</h1>
              <h1  class="modal-title fs-5" id="staticBackdropLabel">Direktur Utama</h1>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <!-- Image goes here -->
                <img src="assets/Rectangle 115.png" class="img-fluid" alt="Your Image">
              </div>
              <div class="col-md-8">
                <!-- Name goes here -->
                <!-- <h2>John Doe</h2> -->
                <!-- Additional content goes here -->
                <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, vero molestiae! Tenetur deleniti nam architecto dolorem ullam culpa voluptatibus, itaque labore rem vel laboriosam eligendi, accusamus veniam facilis repellendus beatae.</p>
              </div>
            </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->
        </div>
      </div>
    </div>
    
   
  </body>
</html>