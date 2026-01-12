@extends('luxe.layout')

@section('title', 'Contact')

@section('content')
<section class="contact-page">
    <div class="contact-hero">
        <h1>Contact</h1>
        <p>Un service personnalisé à votre écoute</p>
    </div>

    <div class="contact-container">
        <!-- Infos de contact -->
        <div class="contact-info">
            <div class="info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Boutique Paris</h3>
                <p>18 Avenue Montaigne<br>75008 Paris</p>
                <p class="info-hours">Lun-Sam: 10h-19h</p>
            </div>

            <div class="info-card">
                <i class="fas fa-phone"></i>
                <h3>Téléphone</h3>
                <p>+33 (0)1 42 68 53 00</p>
                <p class="info-note">Du lundi au vendredi, 9h-18h</p>
            </div>

            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>contact@elegance.com</p>
                <p class="info-note">Réponse sous 24h</p>
            </div>

            <div class="info-card">
                <i class="fas fa-user"></i>
                <h3>Conseiller personnel</h3>
                <p>Prendre rendez-vous</p>
                <a href="#" class="rdv-link">Réserver une consultation</a>
            </div>
        </div>

        <!-- Formulaire -->
        <div class="contact-form-section">
            <h2>Nous écrire</h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Nom" required>
                    <input type="text" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required>
                    <input type="tel" placeholder="Téléphone">
                </div>
                <div class="form-group">
                    <select required>
                        <option value="">Sujet</option>
                        <option>Commande</option>
                        <option>Service client</option>
                        <option>Rendez-vous</option>
                        <option>Presse</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea placeholder="Votre message" rows="6" required></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    Envoyer le message <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Carte (placeholder) -->
    <div class="contact-map">
        <div class="map-placeholder">
            <i class="fas fa-map"></i>
            <p>Carte de localisation</p>
            <p>18 Avenue Montaigne, 75008 Paris</p>
        </div>
    </div>
</section>
@endsection