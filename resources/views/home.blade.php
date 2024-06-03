@extends('layouts.main')

@section('hero')
    <div class="container">
        <h2 class="h1 hero-title">PT. MSI</h2>

        <p class="hero-text">PT Mandiri Sertifikasi Internasional adalah perusahaan konsultan manajemen dan perbaikan proses bisnis terkemuka yang membantu organisasi menjadi lebih efisien, efektif, dan menguntungkan secara finansial.</p>

        <div class="btn-group">
            <a href="/about">
                <button class="btn btn-primary"> About us</button>
            </a>

            <a href="/gallery">
                <button class="btn btn-secondary">Gallery</button>
            </a>
        </div>
    </div>
@endsection

@section('profile')
    <div class="profile" id="contact">
        <div class="profile-content">
            <h2 class="h2 section-title">Tentang Kami</h2>
            <p class="profile-text">PT. Mandiri Sertifikasi Internasional adalah perusahaan yang bergerak di bidang sertifikasi ISO, dengan komitmen kuat untuk membantu organisasi meningkatkan standar kualitas dan efisiensi operasional mereka. Sebagai salah satu lembaga sertifikasi terkemuka di Indonesia, PT. Mandiri Sertifikasi Internasional telah mendapatkan reputasi yang solid melalui pelayanan profesional dan hasil yang terpercaya. Didirikan pada tahun 2016, PT. Mandiri Sertifikasi Internasional berfokus pada penyediaan layanan sertifikasi ISO yang mencakup berbagai sektor industri. Sejak awal berdirinya, perusahaan ini berkomitmen untuk mendorong praktik bisnis yang berkelanjutan dan berkualitas tinggi. Dengan tim ahli yang berpengalaman dan berkompeten, PT. Mandiri Sertifikasi Internasional terus berkembang untuk memenuhi kebutuhan pasar yang semakin kompleks dan dinamis.</p>
        </div>
    </div>
@endsection

@section('services')
<div class="services">
    <h1>Services</h1>
    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="sbox">
                    <i class="fa-solid fa-users"></i>
                    <h3>Tim Profesional</h3>
                    <p>Tim kami profesional, energik dan dinamis dengan pengetahuan keahlian di setiap jenis lini bisnis secara aktif dan bekerja untuk memenuhi misi.</p>
                </div>
            </div>
            <div class="card">
                <div class="sbox">
                    <i class="fa-solid fa-check"></i>
                    <h3>Mencapai Pangkuan Internasional</h3>
                    <p>Untuk membantu organisasi dalam mencapai pengakuan internasional di bidang sertifikasi sistem manajemen.</p>
                </div>
            </div>
            <div class="card">
                <div class="sbox">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <h3>Berbagai Macam Bisnis</h3>
                    <p>Kami memiliki cakupan bisnis dan perencanaan yang luas dan memastikan bahwa standar tinggi akan selalu dipertahankan oleh klien.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('about-us')
<section class="about container" id="about">
    <div class="contentBx">
        <h2 class="titleText">Tentang Kami</h2>
        <p class="title-text">
            PT Mandiri Sertifikasi Internasional adalah perusahaan konsultan manajemen dan perbaikan proses bisnis terkemuka yang membantu organisasi menjadi lebih efisien, efektif, dan menguntungkan secara finansial.
            <br>PT MSI adalah penyedia layanan yang membantu perusahaan untuk mendapatkan semua jenis sertifikasi ISO. Kami menyediakan pelatihan yang diperlukan untuk menerapkan berbagai sertifikasi mutu. Sebagai konsultan ISO, kami memastikan bahwa semua kegiatan sertifikasi Sistem Manajemen dilakukan secara tidak memihak kepada komite internal dan eksternal yang dapat mempengaruhi proses sertifikasi.
        </p>
        <a href="/about" class="btn2">Baca Selengkapnya !</a>
    </div>
    <div class="imgBx">
        <img src="img/berita.jpg" alt="" class="fitBg">
    </div>
</section>
@endsection

@section('blog')
<div class="blog">
    <h1>Berita Terbaru</h1>
</div>
<div class="post-filter">
    <span class="filter-item active-filter" data-filter="all">All</span>
    <span class="filter-item" data-filter="news">News</span>
  </div>

  <div class="post blog">
    <!-- Post 1 -->
      @foreach($berita as $item)
          <div class="post-box all">
              <img class="post-img"
                   src="{{asset("storage/foto_berita/".$item->foto_berita)}}"
                   alt="{{ $item->foto_berita }}"/>
              <a href="/blog" class="post-title">{{$item->judul}}</a>
              <span class="post-date">{{$item->tanggal_terbit}}</span>
              <p class="post-description">
                  {{$item->isi_berita}}
              </p>
              <div class="foto">
                  <img src="img/delia-karni.png" alt="" class="foto-img" />
                  <span class="foto-name">MKHB</span>
              </div>
          </div>
      @endforeach

@endsection


@section('footer')
<div class="footer-top">
    <div class="container">
      <div class="footer-brand">
        <a href="#" class="logo">
          <img src="img/logo (2).png" alt="msi logo" />
        </a>

      </div>

      <div class="footer-contact">
        <h4 class="contact-title">Contact Us</h4>

        <p class="contact-text">Jam Kerja :<br> Senin – Jumat : 08.00 – 17.00 WIB</p>

        <ul>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>

            <a href="tel:+628126810663" class="contact-link">0761 64635 / +62 8126810663</a>
          </li>

          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>

            <a href="mailto:info@mandiricert.com" class="contact-link">info@mandiricert.com</a>
          </li>

          <li class="contact-item">
            <ion-icon name="location-outline"></ion-icon>
            <address>GEDUNG GRAHA PENA LANTAI 7, SUITE 705 PEKANBARU, RIAU – INDONESIA, 28294</address>
          </li>
        </ul>
      </div>

      <div class="footer-form">
        <p class="form-text">Kritik dan saran dari anda adalah suatu kehormatan bagi kami</p>

        <form action="" class="form-wrapper">
            <input type="text" name="name" class="input-field" placeholder="Kritik dan saran" required />
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required />

          <button type="submit" class="btn btn-secondary">Kirim</button>
        </form>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <p class="copyright">&copy; 2024 <a href="">sarifahmuliani</a>. All rights reserved</p>

      <ul class="footer-bottom-list">
        <li>
          <a href="#" class="footer-bottom-link">Privacy Policy</a>
        </li>

        <li>
          <a href="#" class="footer-bottom-link">Term & Condition</a>
        </li>

        <li>
          <a href="#" class="footer-bottom-link">FAQ</a>
        </li>
      </ul>
    </div>
</div>
@endsection



