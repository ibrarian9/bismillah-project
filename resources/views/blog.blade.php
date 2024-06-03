@extends('layouts.main')
@section('hero')
        <div class="container">
            <h2 class="h1 hero-title">PT. MSI</h2>
            <p class="hero-text">BLOG | PT. MSI</p>
        </div>
@endsection

@section('blog')
<div class="blog-container">
    <div class="blog-main">
      <div class="blog-section">
        <div class="blog-left">
          <img src="img/banner (1).jpg" class="blog-img" alt="Paper photo" />
        </div>

        <div class="blog-right">
          <h3 class="heading-3">latest news</h3>
          <div class="blog-lists">
              @foreach($berita as $item)
                  <div class="blog-list">
                      <img src="{{asset("storage/foto_berita/".$item->foto_berita)}}"
                           alt="{{ $item->foto_berita }}"/>
                      <p>{{$item->isi_berita}}</p>
                  </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <blockquote>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, perferendis nisi. Nisi, obcaecati sed. Doloremque omnis minima esse ullam cupiditate sint accusantium, itaque temporibus delectus commodi quidem atque id aut, nam, dolorum
    eligendi impedit. Porro labore dolore et accusamus, ea alias omnis eveniet dolor voluptate veritatis. Nisi assumenda perspiciatis facilis tenetur a ducimus atque dolorum. Non maiores porro minima incidunt quod deserunt ullam id error
    veniam debitis! Quia, nulla aspernatur.
  </blockquote>

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
