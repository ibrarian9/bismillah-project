@extends('layouts.main')

@section('hero')
        <div class="container">
            <h2 class="h1 hero-title">PT. MSI</h2>
            <p class="hero-text">ABOUT US | VISI | MISI</p>
        </div>
@endsection

@section('about-us')
    {{-- VISI | MISI --}}
    <div class="visi-section">
        <div class="visi">
            <div class="visi-box">
                <h3>VISI</h3>
                <p>{{ $visiMisi->visi }}</p>
            </div>
        </div>
        <div class="visi">
            <div class="visi-box">
                <h3>MISI</h3>
                <p>{{ $visiMisi->misi }}</p>
            </div>
        </div>
    </div>

    <section class="about-logo container" id="about">
        <div class="contentBx">
            <h2 class="titleText">Makna Logo PT. Mandiri Sertifikasi Internasional</h2>
            <p class="title-text">
                <li>1. MSI, Merupakan singkatan dari lembaga Mandiri Sertifikasi Internasional </li>
                <li>2. Warna kuning melambangkan emas yang memaknai standar kualitas yang tinggi. Warna kuning meningkatkan komitmen kita terhadap kualitas dalam setiap aspek layanan sertifikasi yang kami tawarkan.</li>
                <li>3. Lambang bumi melambangkan dunia global dan internasional memaknai sertifikasi yang ditawarkan oleh PT. MSI sudah jangkauan tingkat internasional dan mencerminkan kemampuan perusahaan untuk memberikan layanan sertifikasi di berbagai negara dan wilayah di seluruh dunia</li>
                <li>4. Diayomi oleh tumbuhan padi dimana agar PT. Mandiri Sertifikasi Internasional ini tumbuh secara bersama-sama dan diayomi oleh dunia.</li>

            </p>
        </div>
        <div class="imgBxi">
            <img src="img/logo.png" alt="" class="fitBg">
        </div>
    </section>
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


