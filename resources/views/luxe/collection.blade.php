@extends('luxe.layout')

@section('title', 'Collection')

@section('content')
<section class="collection-page">
    <div class="collection-hero">
        <h1>Collection A/W 2026</h1>
        <p>Pièces uniques, savoir-faire exceptionnel</p>
    </div>

    <div class="collection-filters">
        <div class="filter-container">
            @foreach($categories as $categorie)
            <button class="filter-btn {{ $loop->first ? 'active' : '' }}">
                {{ $categorie }}
            </button>
            @endforeach
        </div>
    </div>

    <div class="collection-grid">
        @foreach($produits as $produit)
        <div class="collection-item">
            <a href="{{ route('produit.details', $produit['id']) }}" class="item-link">
                <div class="item-image">
                    <!-- UTILISEZ image_thumb DU CONTROLEUR -->
                    <div class="product-image-real" 
                         style="background-image: url('{{ $produit['image_thumb'] }}');">
                    </div>
                </div>
                <div class="item-info">
                    <div class="item-header">
                        <h3>{{ $produit['marque'] }}</h3>
                        <p class="item-category">{{ $produit['categorie'] }}</p>
                    </div>
                    <p class="item-name">{{ $produit['nom'] }}</p>
                    <p class="item-price">{{ number_format($produit['prix'], 0, ',', ' ') }} €</p>
                    <button class="quick-view" data-id="{{ $produit['id'] }}">
                        Voir détails
                    </button>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="collection-pagination">
        <button class="pagination-btn active">1</button>
        <button class="pagination-btn">2</button>
        <button class="pagination-btn">3</button>
        <span class="pagination-dots">...</span>
        <button class="pagination-btn">Suivant <i class="fas fa-arrow-right"></i></button>
    </div>
</section>
@endsection