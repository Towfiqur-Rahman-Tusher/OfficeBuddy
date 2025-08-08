<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OfficeBuddy</title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@600&family=Playwrite+AU+QLD:wght@100..400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- css file link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="OfficeBuddy Logo" style="height: 60px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/" class="nav-link"><i class="fa-solid fa-house"></i>  Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link"><i class="fa-solid fa-address-card"></i> 
                            About Us</a></li>
                    <li class="nav-item"><a href="/services" class="nav-link"><i class="fa-solid fa-gear"></i> 
                            Services</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link"><i class="fa-solid fa-phone"></i> 
                            Contact</a></li>
                </ul>
                <a href="/login" class="btn btn-custom"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p class="mb-0">© 2025 OfficeBuddy. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>