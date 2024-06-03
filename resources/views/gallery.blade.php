@extends('layouts.main')
@section('hero')
        <div class="container">
            <h2 class="h1 hero-title">PT. MSI</h2>
            <p class="hero-text">GALLERY | PT. MSI</p>
        </div>
@endsection

@section('gallery')
<div class="gallery-section">
    @foreach($gallery as $item)
        <div class="gallery-card">
            <img src="{{asset("storage/gallery/".$item->foto)}}" alt="{{$item->name}}">
            <div class="info">
                <h1>{{$item->name}}</h1>
                <p>{{$item->description}}</p>
            </div>
        </div>
    @endforeach
</div>
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
