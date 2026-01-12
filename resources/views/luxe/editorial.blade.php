@extends('luxe.layout')

@section('title', 'Éditorial')

@section('content')
<section class="editorial-page">
    <div class="editorial-hero">
        <h1>Le Magazine ÉLÉGANCE</h1>
        <p>Où l'art rencontre la mode</p>
    </div>

    <div class="editorial-articles">
        @foreach($editorials as $index => $article)
        <article class="editorial-article {{ $index % 2 == 0 ? '' : 'reverse' }}">
            <div class="article-image">
                <!-- Image selon l'index -->
                @if($index == 0)
                <div class="article-image-real" 
                     style="background-image: url('https://plus.unsplash.com/premium_photo-1690205363047-76b238d0a86c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fHw%3D')">
                </div>
                @elseif($index == 1)
                <div class="article-image-real" 
                     style="background-image: url('https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                </div>
                @else
                <div class="article-image-real" 
                     style="background-image: url('https://images.unsplash.com/photo-1490481651871-ab68de25d43d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                </div>
                @endif
            </div>
            
            <div class="article-content">
                <span class="article-number">0{{ $index + 1 }}</span>
                <h2>{{ $article['titre'] }}</h2>
                <p class="article-excerpt">
                    @if($index == 0)
                    Explorez l'art de la silhouette à travers les âges. Comment les couturiers ont sculpté la forme féminine pour créer des chefs-d'œuvre intemporels.
                    @elseif($index == 1)
                    Découvrez les matières les plus rares de notre planète. Du cachemire mongol à la soie sauvage, un voyage sensoriel exclusif.
                    @else
                    Pénétrez dans les ateliers secrets où la magie opère. Rencontrez les artisans dont les mains créent l'exceptionnel.
                    @endif
                </p>
                <a href="#" class="article-link">
                    Lire l'article complet <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </article>
        @endforeach
    </div>

    <div class="editorial-newsletter">
        <h2>Restez informé</h2>
        <p>Recevez nos éditoriaux et invitations exclusives</p>
        <form class="newsletter-form">
            <input type="email" placeholder="Votre adresse email" required>
            <button type="submit">S'abonner</button>
        </form>
    </div>
</section>

<!-- Ajoutez ce style directement dans la page pour tester -->

@endsection