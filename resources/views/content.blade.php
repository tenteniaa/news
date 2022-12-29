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

<!-- Content -->
<div class="container mt-3">
  <div class="row d-flex justify-content-between pt-3">
    <div class="col-lg-8 col-sm-12">
      <div class="row">
        <h1 class="content-title"><span>Unissula</span> Kampus Terbaik di Semarang</h1>
      </div>
      <a class="writer-profile btn btn-secondary" href="/tenews/kampus-unissula/penulis">
        <img 
          src="{{ asset('assets/img/Pencil.svg')}}"
          width="20px"
          />
        Choirunnisa Kurnia Achmadi
      </a>
      <span class="content-description"> &#9679; 49402200004</span>
    </div>
    <div class="col-lg-4 col-sm-12 content-logo">
      <div class="d-flex justify-content-end">
          <button
            class="btn btn-light rounded-circle p-3 shadow-sm"
          >
            <img src="{{ asset('assets/img/unissula2.png') }}" alt="Logo Unissula"/>
          </button>
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-between mt-5">
    <div class="col-lg-6 col-md-12">
      <img class="akreditasi-image d-flex"
        src="{{ asset('assets/img/akreditasi.jpeg') }}"
        alt="akreditasi"
      />
    </div>
    <div class="akreditasi-content col-lg-6 col-md-12">
      <div class="row d-flex justify-content-end">
        <div class="col-lg-12">
          <p class="akreditasi-description">
              Universitas Islam Sultan Agung atau yang disingkat menjadi Unissula ini 
              adalah salah satu Universitas swasta di Semarang yang telah terakreditasi A 
              oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT). 
              Jadi, bisa dibilang, kualitas Unissula ini tidak perlu diragukan lagi, lho! 
              Mahasiswa Unissula banyak yang telah berprestasi dalam berbagai kejuaraan tingkat nasional. 
              Selain itu, kampus ini juga menjalin kerja sama dengan berbagai universitas di luar negeri.
          </p>
          <p class="akreditasi-description pt-3">
              Universitas yang merupakan <span>World Class Islamic Cyber University</span> termasuk 
              perguruan tinggi Islam swasta tertua dan terbesar yang berada di Kota Semarang, Jawa Tengah, 
              yang mampu memadukan antara kebutuhan dunia dan kebutuhan akhirat secara bersama-sama.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-between mt-3">
    <div class="col-lg-12">
      <p class="akreditasi-description">
        Tak kalah dengan universitas lain yang ada di Semarang, 
        Universitas Islam Sultan Agung (Unissula) Semarang berhasil meraih prestasi membanggakan di tahun 2022. 
        Berdasarkan data yang dirilis EduRank, Unissula merupakan Perguruan Tinggi Swasta (PTS) 
        dengan peringkat terbaik di Semarang. Adapun secara nasional Unissula menempati peringkat ke 71.
        Selain itu unissula juga memiliki banyak prestasi 
        yaitu menerima dua penghargaan tingkat nasional dari Ditjen Diktiristek. 
        Penghargaan tersebut adalah Unissula sebagai Perguruan Tinggi Swasta (PTS) 
        dengan pelaporan tracer study terbaik kategori lulusan 1001-3000.
        Penghargaan lainnya yaitu Unissula sebagai PTS terbaik dalam 
        pelaporan prodi yang sudah terekognisi internasional. 
        Penghargaan diserahterimakan kepada Rektor Prof Dr Gunarto SH MH dalam 
        acara anugerah Diktiristek 2022 di Jakarta, Kamis (15/12/2022). 
      </p>
      <p class="akreditasi-description">
        Dengan banyaknya prestasi yang diraih, kampus Unissula semakin diminati oleh masyarakat. 
        Tidak hanya mahasiswa lokal, Universitas Islam Sultan Agung (Unissula) Semarang 
        juga banyak diminati mahasiswa asing. Pada tahun 2021 tercatat 148 mahasiswa asing terdaftar yang
        diberi kesempatan belajar di Unissula oleh Kemenristekdikti, sedangkan dari bulan Januari sampai Febuari 2022 
        ini saja, telah tercatat sebanyak 78 mahasiswa asing yang mengikuti program pendek di Unissula.
      </p>
    </div>
  </div>
  <div class="row d-flex justify-content-between mt-1">
    <div class="akreditasi-content col-lg-7 col-md-12">
      <div class="row d-flex">
        <div class="col-12">
          <p class="akreditasi-description">
            Di Unissula juga terdapat 11 fakultas dan 40 program studi mulai dari D3, S1, S2, hingga S3. 
            Sehingga banyak pilihan bagi mahasiswa yang ingin berkuliah sesuai minat di unissula.
          </p>
          <p class="akreditasi-description mt-5">
            So, tunggu apalagi. Belajar sambil mengejar akhirat, hanya di Universitas Islam Sultan Agung Semarang,
            Prestasi Yes! Agama Oke!
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-12 d-flex justify-content-end">
        <img class="akreditasi-image"
          src="{{ asset('assets/img/kampus-unissula.jpeg') }}"
          alt="kampus unissula"
        />
    </div>
  </div>
</div>
<!-- End of Content -->
@endsection