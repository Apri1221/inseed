@extends('master')

@section('content')
    
    <section id="headline">
      <div class="container-fluid">
        <h2 class="judul">SEAWEED ARTICLES</h2>
        <div class="row barisArtikelAtas" >
          
          <div class="col-xl-7 col-md-10 col-sm-12 col-xs-12 boxHeadline" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators" style="position: relative; margin-top: 5%;">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              
              <div class="carousel-inner" id="carouselArticle" >
                <div class="carousel-item active">
                  <img class="d-block w-100" src="image/petani/petani1.jpg" alt="First slide">
                  <h5 class="caption">Kisah Petani Bone memulai Budidaya Rumput Laut</h5>
                </div>
                
                <div class="carousel-item">
                  <img class="d-block w-100" src="image/petani/petani2.jpg" alt="Second slide">
                  <h5 class="caption">Ditemukan rumput laut langka menghebohkan netizen</h5>
                </div>
                
                <div class="carousel-item">
                  <img class="d-block w-100" src="image/petani/petani3.jpg" alt="Third slide">
                  <h5 class="caption">Bapak ini menemukan harta karun isinya rumput laut</h5>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          
          <div class="col-xl-4 col-md-10 topArticle">
            <h2>TOP ARTICLE</h2>
            <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12" >
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="image/produk/produk1.jpg" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="image/produk/produk1.jpg" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="image/produk/produk1.jpg" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="artikelBawah">
      <div class="container">        
        <div class="jcarousel-wrapper">
          <h3 class="JudulSectionArtikel">ARTIKEL TERKINI</h3>
          <a href="#" class="jcarousel-control-next">&rsaquo;</a>
          <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
          <hr class="col-lg-12 col-xs-12 separator-multi-item">
          <div class="jcarousel">
            <ul style="padding-top: 4%;">
              <li>
                <img class="artikelTerbaru" src="image/produk/produk2.jpg" alt="Image 1">
                <h5 class="judulArtikel">10 resep budidaya rumput laut</h5>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </li>
              <li>
                <img class="artikelTerbaru" src="image/produk/produk2.jpg" alt="Image 1">
                <h5 class="judulArtikel">Makanan Rumput Laut Enaa</h5>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </li>
              <li>
                <img class="artikelTerbaru" src="image/produk/produk2.jpg" alt="Image 1">
                <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </li>
              <li>
                <img class="artikelTerbaru" src="image/produk/produk2.jpg" alt="Image 1">
                <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </li>
              <li>
                <img class="artikelTerbaru" src="image/produk/produk2.jpg" alt="Image 1">
                <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </li>
              
              <li>
                <img class="artikelTerbaru" src="image/produk/produk2.jpg" alt="Image 1">
                <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    @include('components.footer')