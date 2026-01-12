@extends('luxe.layout')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">L'Art du <span>Détail</span></h1>
            <p class="hero-subtitle">Collection Automne-Hiver 2026</p>
            <a href="{{ route('collection') }}" class="hero-button">Découvrir</a>
        </div>
    </section>

    <!-- Collection en Vedette -->
    <section class="featured">
        <h2 class="section-title">Pièces Sélectionnées</h2>
        <div class="products-grid">
            @foreach($produits as $produit)
            <a href="{{ route('produit.details', $produit['id']) }}" class="product-card">
                <div class="product-image">
                    <!-- Placeholder image -->
                    <div class="product-image-real" 
                         style="background-image: url('{{ $produit['image_thumb'] }}');">
                    </div>
                </div>
                <div class="product-info">
                    <h3>{{ $produit['marque'] }}</h3>
                    <p>{{ $produit['nom'] }}</p>
                    <p class="price">{{ number_format($produit['prix'], 0, ',', ' ') }} €</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Éditorial -->
    <section class="editorial-preview">
        <div class="editorial-content">
            <h2>Le Magazine</h2>
            <p>Plongez dans l'univers de la création</p>
            <a href="{{ route('editorial') }}" class="editorial-link">Lire l'éditorial <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>
@endsection