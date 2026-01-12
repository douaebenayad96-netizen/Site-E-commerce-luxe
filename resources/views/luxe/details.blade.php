@extends('luxe.layout')

@section('title', 'Détails - ' . $produit['nom'])

@section('content')
<div class="product-details-page">
    <nav class="breadcrumb">
        <a href="{{ route('home') }}">Accueil</a>
        <span>/</span>
        <a href="{{ route('collection') }}">Collection</a>
        <span>/</span>
        <a href="#">{{ $produit['categorie'] }}</a>
        <span>/</span>
        <span class="current">{{ $produit['nom'] }}</span>
    </nav>

    <div class="details-main">
        <!-- Galerie d'images -->
        <div class="details-gallery">
            <div class="main-image">
                <!-- UTILISEZ image_main DU CONTROLEUR -->
                <div class="product-image-real-details" 
                     style="background-image: url('{{ $produit['image_main'] }}');">
                </div>
            </div>
            
            <div class="thumbnail-grid">
                <!-- Miniatures -->
                <div class="thumbnail active">
                    <div class="thumbnail-real" 
                         style="background-image: url('{{ $produit['image_thumb'] }}');">
                    </div>
                </div>
                
                <div class="thumbnail">
                    <div class="thumbnail-real" 
                         style="background-image: url('{{ $produit['image_main'] }}?angle=45');">
                    </div>
                </div>
                
                <div class="thumbnail">
                    <div class="thumbnail-real" 
                         style="background-image: url('{{ $produit['image_main'] }}?crop=detail');">
                    </div>
                </div>
                
                <div class="thumbnail video-thumbnail">
                    <div class="thumbnail-placeholder">
                        <i class="fas fa-play"></i> VIDÉO
                    </div>
                </div>
            </div>
        </div>

        <!-- Le reste du code DÉTAILS reste le même... -->
        
        <!-- [Gardez tout le reste du code de details.blade.php] -->
        <!-- Informations Produit -->
        <div class="details-info">
            <!-- En-tête -->
            <div class="details-header">
                <div class="brand-section">
                    <h1 class="product-brand">{{ $produit['marque'] }}</h1>
                    <span class="product-ref">REF: {{ strtoupper(substr($produit['marque'], 0, 3)) }}-{{ $id }}24</span>
                </div>
                <h2 class="product-title">{{ $produit['nom'] }}</h2>
                <div class="price-section">
                    <p class="product-price">{{ number_format($produit['prix'], 0, ',', ' ') }} €</p>
                    <p class="price-note">TVA incluse, frais de livraison en sus</p>
                </div>
            </div>

            <!-- Description -->
            <div class="details-description">
                <h3>Description</h3>
                <p>{{ $produit['description'] }}</p>
                <div class="highlight-features">
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Pièce unique numérotée</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Confection artisanale</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Matière premium</span>
                    </div>
                </div>
            </div>

            <!-- Sélection Options -->
            <div class="details-options">
                <!-- Couleurs -->
                <div class="option-section">
                    <h4>Couleur</h4>
                    <div class="color-selector">
                        @foreach($couleurs as $couleur)
                        <div class="color-option {{ $loop->first ? 'selected' : '' }}" 
                             style="background-color: {{ $couleur['code'] }}"
                             title="{{ $couleur['nom'] }}">
                            @if($loop->first)
                            <i class="fas fa-check"></i>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tailles -->
                <div class="option-section">
                    <h4>Taille</h4>
                    <div class="size-selector">
                        @foreach($tailles as $taille)
                        <div class="size-option {{ $loop->index === 2 ? 'selected' : '' }}">
                            {{ $taille }}
                        </div>
                        @endforeach
                    </div>
                    <a href="#" class="size-guide-link">
                        <i class="fas fa-ruler"></i> Guide des tailles
                    </a>
                </div>

                <!-- Quantité -->
                <div class="option-section">
                    <h4>Quantité</h4>
                    <div class="quantity-selector">
                        <button class="quantity-btn minus">-</button>
                        <input type="text" value="1" class="quantity-input" readonly>
                        <button class="quantity-btn plus">+</button>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="details-actions">
                <button class="add-to-cart-btn">
                    <i class="fas fa-shopping-bag"></i>
                    Ajouter au panier
                </button>
                
                <button class="wishlist-btn-details">
                    <i class="far fa-heart"></i>
                    Ajouter à la wishlist
                </button>
                
                <button class="consultant-btn">
                    <i class="fas fa-user"></i>
                    Conseiller personnel
                </button>
            </div>

            <!-- Services -->
            <div class="details-services">
                <div class="service">
                    <i class="fas fa-truck"></i>
                    <div>
                        <strong>Livraison gratuite</strong>
                        <p>Sous 2-3 jours ouvrés</p>
                    </div>
                </div>
                <div class="service">
                    <i class="fas fa-undo"></i>
                    <div>
                        <strong>Retours gratuits</strong>
                        <p>Sous 30 jours</p>
                    </div>
                </div>
                <div class="service">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <strong>Authenticité garantie</strong>
                        <p>Certificat inclus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Navigation -->
    <div class="details-tabs">
        <div class="tabs-header">
            <button class="tab-btn active" data-tab="specs">Détails techniques</button>
            <button class="tab-btn" data-tab="lookbook">Lookbook</button>
            <button class="tab-btn" data-tab="reviews">Avis clients</button>
            <button class="tab-btn" data-tab="shipping">Livraison & Retours</button>
        </div>
        
        <div class="tabs-content">
            <!-- Onglet Détails techniques -->
            <div class="tab-pane active" id="specs">
                <div class="specs-grid">
                    @foreach($detailsComplets as $key => $value)
                    <div class="spec-item">
                        <span class="spec-key">{{ $key }}</span>
                        <span class="spec-value">{{ $value }}</span>
                    </div>
                    @endforeach
                </div>
                <div class="care-instructions">
                    <h4>Instructions d'entretien</h4>
                    <ul>
                        <li>Nettoyage à sec uniquement</li>
                        <li>Éviter l'exposition prolongée au soleil</li>
                        <li>Conserver dans sa housse en coton fournie</li>
                        <li>Repasser à basse température</li>
                    </ul>
                </div>
            </div>

            <!-- Onglet Lookbook -->
            <div class="tab-pane" id="lookbook">
                <h4>Complétez votre look</h4>
                <div class="lookbook-grid">
                    <!-- Look 1 -->
                    <div class="look-item">
                        <div class="look-image">
                            <div class="look-image-real" 
                                 style="background-image: url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-4.0.3&auto=format&fit=crop&w-600&q=80');">
                            </div>
                        </div>
                        <div class="look-info">
                            <p>Tenue soirée complète</p>
                            <a href="#" class="look-link">
                                Voir le look <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Look 2 -->
                    <div class="look-item">
                        <div class="look-image">
                            <div class="look-image-real" 
                                 style="background-image: url('https://images.unsplash.com/photo-1525450824786-227cbef70703?ixlib=rb-4.0.3&auto=format&fit=crop&w-600&q=80');">
                            </div>
                        </div>
                        <div class="look-info">
                            <p>Style décontracté chic</p>
                            <a href="#" class="look-link">
                                Voir le look <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Look 3 -->
                    <div class="look-item">
                        <div class="look-image">
                            <div class="look-image-real" 
                                 style="background-image: url('https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                            </div>
                        </div>
                        <div class="look-info">
                            <p>Élégance quotidienne</p>
                            <a href="#" class="look-link">
                                Voir le look <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Onglet Avis -->
            <div class="tab-pane" id="reviews">
                <div class="reviews-header">
                    <div class="rating-overview">
                        <div class="average-rating">
                            <span class="rating-stars">
                                @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star"></i>
                                @endfor
                            </span>
                            <span class="rating-score">4.5/5</span>
                        </div>
                        <p>Basé sur 24 avis clients</p>
                    </div>
                    <button class="add-review-btn">Écrire un avis</button>
                </div>
                
                <div class="reviews-list">
                    @foreach($avis as $avisItem)
                    <div class="review-item">
                        <div class="review-header">
                            <span class="reviewer-name">{{ $avisItem['nom'] }}</span>
                            <span class="review-date">{{ $avisItem['date'] }}</span>
                        </div>
                        <div class="review-rating">
                            @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $avisItem['note'] ? 'filled' : '' }}"></i>
                            @endfor
                        </div>
                        <p class="review-comment">{{ $avisItem['commentaire'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Onglet Livraison -->
            <div class="tab-pane" id="shipping">
                <div class="shipping-info">
                    <h4>Options de livraison</h4>
                    <div class="shipping-options">
                        <div class="shipping-option">
                            <strong>Express (24h)</strong>
                            <p>25€ - Livraison avant 13h le lendemain</p>
                        </div>
                        <div class="shipping-option">
                            <strong>Standard (2-3 jours)</strong>
                            <p>Gratuit à partir de 500€ d'achat</p>
                        </div>
                        <div class="shipping-option">
                            <strong>Click & Collect</strong>
                            <p>Gratuit - Retrait en boutique</p>
                        </div>
                    </div>
                    
                    <h4>Retours & Échanges</h4>
                    <p>Vous disposez de 30 jours pour retourner votre article. Les articles doivent être dans leur état d'origine, non portés et avec leurs étiquettes.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    

    <!-- Produits Similaires -->
    <div class="related-products">
        <h3>Vous aimerez aussi</h3>
        <div class="related-grid">
            @foreach($tousProduits as $key => $item)
            @if($key != $id)
            <a href="{{ route('produit.details', $key) }}" class="related-item">
                <div class="related-image">
                    <!-- UTILISEZ image_autres DU CONTROLEUR -->
                    <div class="related-image-real" 
                         style="background-image: url('{{ $item['image_autres'] }}');">
                    </div>
                </div>
                <div class="related-info">
                    <p class="related-brand">{{ $item['marque'] }}</p>
                    <p class="related-name">{{ $item['nom'] }}</p>
                    <p class="related-price">{{ number_format($item['prix'], 0, ',', ' ') }} €</p>
                </div>
            </a>
            @endif
            @endforeach
        </div>
    </div>
</div>
<style>
/* Image principale détails */
.product-image-real-details {
    width: 100%;
    height: 600px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Miniatures */
.thumbnail-real {
    width: 100%;
    height: 100px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Lookbook */
.look-image-real {
    width: 100%;
    height: 200px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Produits similaires */
.related-image-real {
    width: 100%;
    height: 300px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Assurez-vous que les conteneurs ont une taille */
.thumbnail-grid .thumbnail {
    height: 100px;
}

.look-image, .related-image {
    height: auto;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sélection des couleurs
    document.querySelectorAll('.color-option').forEach(color => {
        color.addEventListener('click', function() {
            document.querySelectorAll('.color-option').forEach(c => {
                c.classList.remove('selected');
                c.innerHTML = '';
            });
            this.classList.add('selected');
            this.innerHTML = '<i class="fas fa-check"></i>';
        });
    });

    // Sélection des tailles
    document.querySelectorAll('.size-option').forEach(size => {
        size.addEventListener('click', function() {
            document.querySelectorAll('.size-option').forEach(s => {
                s.classList.remove('selected');
            });
            this.classList.add('selected');
        });
    });

    // Sélecteur de quantité
    const quantityInput = document.querySelector('.quantity-input');
    document.querySelector('.quantity-btn.minus').addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });
    document.querySelector('.quantity-btn.plus').addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        quantityInput.value = value + 1;
    });

    // Onglets
    document.querySelectorAll('.tab-btn').forEach(tab => {
        tab.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            document.querySelectorAll('.tab-btn').forEach(t => {
                t.classList.remove('active');
            });
            this.classList.add('active');
            
            document.querySelectorAll('.tab-pane').forEach(pane => {
                pane.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');
        });
    });

    // Mini galerie
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.addEventListener('click', function() {
            document.querySelectorAll('.thumbnail').forEach(t => {
                t.classList.remove('active');
            });
            this.classList.add('active');
            
            // Changer l'image principale avec la miniature
            if (this.querySelector('.thumbnail-real')) {
                const thumbBg = this.querySelector('.thumbnail-real').style.backgroundImage;
                document.querySelector('.product-image-real-details').style.backgroundImage = thumbBg;
            }
        });
    });
});
</script>
@endsection






