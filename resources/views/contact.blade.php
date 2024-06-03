@extends('layouts.main')
@section('hero')
        <div class="container">
            <h2 class="h1 hero-title">PT. MSI</h2>
            <p class="hero-text">CONTACT US</p>
        </div>
@endsection

@section('contact')
<div class="contact-form">
    <h1 class="heading">Get In Touch!</h1>
    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos inventore omnis aliquid rerum alias molestias.</p>

    <div class="contactForm">
      <form action="#">
        <h1 class="sub-heading">Need Support !</h1>
        <p class="para para2">Contact us for a quote , help to join the them.</p>
        <input type="text" class="input" placeholder="your name" />
        <input type="text" class="input" placeholder="your email" />
        <textarea class="input" cols="30" rows="5" placeholder="Your message..."></textarea>
        <input type="submit" class="input submit" value="Send Message" />
      </form>

      <div class="map-container">
        <div class="mapBg"></div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.688165447034!2d101.40099269999999!3d0.46279909999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8edef52b873%3A0x371db23c47accf23!2sGRAHA%20PENA%20RIAU!5e0!3m2!1sid!2sid!4v1716137441320!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
      </div>
    </div>
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
