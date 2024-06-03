<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. MSI | {{ $title }}</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom css link --}}
    <link rel="stylesheet" href="css/login.css" />

    {{-- Google font link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="login-form">
        <h1>Login Admin</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Log In</h2>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                    <form action="{{ route('loginAction') }}" method="POST">
                        @csrf
                        <div class="form-floathing">
                            <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email" placeholder="email@example.com" required autofocus value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floathing">
                            <input type="password" name="password" class="form-control" @error('email') is-invalid @enderror id="password" placeholder="masukkan password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn" type="submit">
                            Login
                        </button>

                    </form>

{{--                    <form action="{{ route("register") }}" method="post">--}}
{{--                        @csrf--}}
{{--                        <button type="submit">submit</button>--}}
{{--                    </form>--}}

                </div>
                <div class="form-img">
                    <img src="img/log.png" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Java Script --}}
    <script src="js/admin.js"></script>

</body>
</html>
