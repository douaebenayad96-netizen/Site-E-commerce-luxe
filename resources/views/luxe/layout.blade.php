<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÉLÉGANCE | @yield('title', 'Haute Couture')</title>
    <link rel="stylesheet" href="{{ asset('css/luxe.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation Minimaliste -->
    <nav class="nav-luxe">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo">ÉLÉGANCE</a>
            <div class="nav-links">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('collection') }}">Collection</a>
                <a href="{{ route('editorial') }}">Éditorial</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="nav-icons">
                <i class="far fa-heart"></i>
                <i class="fas fa-shopping-bag"></i>
            </div>
        </div>
    </nav>

    <!-- Contenu -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Épuré -->
    <footer class="footer-luxe">
        <div class="footer-content">
            <div class="footer-section">
                <h3>ÉLÉGANCE</h3>
                <p>Paris · Milan · Tokyo</p>
            </div>
            <div class="footer-section">
                <p>© 2026 ÉLÉGANCE Haute Couture</p>
                <p>Toutes les images sont utilisées à titre démonstratif</p>
            </div>
            <div class="footer-section">
                <p>Newsletter</p>
                <input type="email" placeholder="Votre email" class="newsletter-input">
            </div>
        </div>
    </footer>
</body>
</html>