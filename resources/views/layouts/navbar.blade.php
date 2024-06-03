<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>PT. MSI | {{ $title }}</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>
   <input type="checkbox" id="menu-toggle">
   @include('partials.sidebar')
    <div class="main-content">

        @include('partials.header')
        <section class="header-content">
            @yield('header-content')
        </section>

        <section class="page-content">
            @yield('page-content')
        </section>

        <section class="table">
            @yield('table')
        </section>

        <section class="container">
            @yield('form')
        </section>

        <section class="berita-admin">
            @yield('berita-admin')
        </section>

       <section class="struktur">
            @yield('struktur')
        </section>

        <section class="profilePT">
            @yield('profilePT')
        </section>
    </div>
    <script src="js/admin-script.js"></script>
</body>
</html>
