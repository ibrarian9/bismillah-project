<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. MSI | {{ $title }}</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom css link --}}
    <link rel="stylesheet" href="css/styles.css" />

    {{-- Google font link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  </head>

  <body id="top">
    @include('partials.navbar')
    <main>
      <article>
    {{-- HERO --}}
    <section class="hero" id="home">
        @yield('hero')
    </section>

    {{-- PROFILE --}}
        <section class="profile" id="contact">
            @yield('profile')
        </section>

    {{-- SERVICES --}}
    <section class="services">
        @yield('services')
    </section>

    {{-- ABOUT US --}}
    <section class="about-us">
        @yield('about-us')
    </section>


    {{-- BLOG --}}
    <section class="blog">
        @yield('blog')
    </section>

    {{-- GALLERY --}}
    <section class="gallery">
        @yield('gallery')
    </section>

    {{-- CONTACT --}}
    <section class="contact-form">
        @yield('contact')
    </section>


    {{-- CLIENT --}}
    <section class="client">
        @yield('client')
    </section>

    {{-- FOOTER --}}

    <footer class="footer">
        @yield('footer')
    </footer>


    {{-- GO TO TOP --}}

    <a href="#top" class="go-top" data-go-top>
      <ion-icon name="chevron-up-outline"></ion-icon>
    </a>


    {{-- Custom js link --}}
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Ion icon link --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
