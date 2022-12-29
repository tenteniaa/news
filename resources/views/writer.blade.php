@extends('layouts.navbar')
@section('main')
<!-- Hero -->
<div class="container-fluid jumbotron"><br>
    <div class="container">
      <div class="row">
        <div class="col-7 mt-5">
          <div class="row">
            <div class="col-lg-8 col-md-12">
              <h1 class="fw-bold jumbotron-title">
                Get ready to publish an article
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-12">
              <p class="jumbotron-description">
                Seputar berita, blog, artikel, funfact, dan lainnya
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-lg-6 col-md-12">
              <a
                type="button"
                class="btn btn-secondary me-2 btn-news fw-bold p-2"
                href="https://unissula.ac.id/"
              >
              <img 
              src="{{ asset('assets/img/unissula.png')}}"
              width="30px"
              />
                UNISSULA
              </a>
            </div>
          </div>
        </div>
        <div class="col-5 jumbotron-image d-flex justify-content-end mt-5">
          <img
            src="{{ asset('assets/img/jumbotron.svg')}}"
            alt="jumbotron"
            width="400"
          />
        </div>
      </div>
    </div>
</div>
<!-- End of Hero -->

<!-- Writer Profile -->
<div class="container mt-3 text-center">
    <div class="row">
      <h1 class="profil-penulis">Profil <span>Penulis</span></h1>
    </div>
</div>

<div class="container bg-white p-3 rounded shadow-sm mt-3">
    <div class="row d-flex justify-content-between p-3">
      <div class="col-12 col-md-3 col-md-3">
        <div class="row">
          <img
            src="{{ asset('assets/img/nissa.jpeg')}}"
            alt="Chorunnisa"
            height="400"
          />
        </div>
        <div class="row">
            <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                    <a href="https://www.linkedin.com/in/choirunnisa-kurnia-achmadi-b45161237/"
                        ><img
                            src="{{ asset('assets/img/linkedin.png')}}"
                            width="45px"
                            height="45px"
                    /></a>
                </div>
                <div class="col-2">
                    <a href="https://instagram.com/nissaka__?igshid=YmMyMTA2M2Y="
                        ><img
                            src="{{ asset('assets/img/instagram.png')}}"
                            width="45px"
                            height="45px"
                    /></a>
                </div>
                <div class="col-2">
                    <a href="mailto:choirunnisa697@gmail.com"
                        ><img
                            src="{{ asset('assets/img/gmail.png')}}"
                            width="45px"
                            height="45px"
                    /></a>
                </div>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-5">
        <div class="row profile-detail">
          <h4 class="card-title mt-2">Nama</h4>
          <p>Choirunnisa Kurnia Achmadi</p>
          <h4 class="card-title mt-2">NIM</h4>
          <p>49402200004</p>
        </div>
        <div class="profile-desc mt-5">
            <p>
                Saya Choirunnisa Kurnia Achmadi mahasiswi Universitas Islam Sultan Agung Semarang 
                memiliki minat dalam merangkai blog yang menarik.
            </p>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-4">
        <div class="row d-flex justify-content-around mt-3">
            <div class="col-2">
                <a href="https://unissula.ac.id/"
                    ><img
                        src="{{ asset('assets/img/unissula3.png')}}"
                        alt="Unissula"
                        width="60px"
                        height="60px"
                /></a>
            </div>
            <div class="col-2">
                <a href="https://dikti.kemdikbud.go.id/"
                    ><img
                        src="{{ asset('assets/img/ristekdikti.png')}}"
                        alt="RistekDikti"
                        width="60px"
                        height="60px"
                /></a>
            </div>
        </div>
        <div class="row d-flex justify-content-around mt-5">
            <div class="col-2">
                <a href="https://bansm.kemdikbud.go.id/"
                    ><img
                        src="{{ asset('assets/img/bansm.png')}}"
                        alt="BANSM"
                        width="60px"
                        height="60px"
                /></a>
            </div>
            <div class="col-2">
                <a href="https://unissula.ac.id/"
                    ><img
                        src="{{ asset('assets/img/akreditasi-unissula.png')}}"
                        alt="Akreditasi Unissula"
                        width="60px"
                        height="60px"
                /></a>
            </div>
        </div>
        <div class="row d-flex justify-content-around mt-5">
            <div class="col-2">
                <a href="#"
                    ><img
                        src="{{ asset('assets/img/graduate.png')}}"
                        alt="graduate"
                        width="60px"
                        height="60px"
                /></a>
            </div>
            <div class="col-2">
                <a href="#"
                    ><img
                        src="{{ asset('assets/img/graduate2.png')}}"
                        alt="graduate"
                        width="60px"
                        height="60px"
                /></a>
            </div>
        </div>
      </div>
    </div>
  </div>
<!-- End of Writer Profile -->
@endsection