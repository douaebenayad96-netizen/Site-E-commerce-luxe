<?php

namespace App\Http\Conts;

class LuxeCont extends Controller
{
    // Données statiques (remplace la base de données)
    private $produits = [
    1 => [
        'id' => 1,
        'nom' => 'Veste en Cachemire',
        'marque' => 'ÉLÉGANCE',
        'prix' => 1250,
        'description' => 'Veste en cachemire pur, confectionnée à la main en Italie. Coupe structurée avec finitions en soie.',
        'categorie' => 'Vestes',
        // MÊME IMAGE POUR TOUTES LES PAGES
        'image_main' => 'https://images.unsplash.com/photo-1544022613-e87ca75a784a?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHZlc3RlfGVufDB8fDB8fHww',
        'image_thumb' => 'https://images.unsplash.com/photo-1544022613-e87ca75a784a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHZlc3RlfGVufDB8fDB8fHww',
        'image_autres'=>'https://plus.unsplash.com/premium_photo-1691622500391-ae19954ffa7a?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'details' => '100% Cachemire · Fabriqué en Italie · Entretien à sec'
    ],
    2 => [
        'id' => 2,
        'nom' => 'Robe Soirée Sculptée',
        'marque' => 'NOCTURNE',
        'prix' => 3200,
        'description' => 'Robe longue en satin de soie avec découpes stratégiques. Dos nu et traîne légère.',
        'categorie' => 'Robes',
        // MÊME IMAGE POUR TOUTES LES PAGES
        'image_main' => 'https://plus.unsplash.com/premium_photo-1675107360188-111441548390?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fFJvYmUlMjBTb2lyJUMzJUE5ZXxlbnwwfHwwfHx8MA%3D%3D',
        'image_thumb' => 'https://plus.unsplash.com/premium_photo-1675107360188-111441548390?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fFJvYmUlMjBTb2lyJUMzJUE5ZXxlbnwwfHwwfHx8MA%3D%3D',
        'image_autres'=>'https://images.unsplash.com/photo-1631234764568-996fab371596?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'details' => 'Soie naturelle · Broderies main · Unique pièce'
    ],
    3 => [
        'id' => 3,
        'nom' => 'Sac Portfolio',
        'marque' => 'ARCHIVE',
        'prix' => 2800,
        'description' => 'Sac en cuir de veau grainé, fermeture magnétique dissimulée. Compartiment tablette intégré.',
        'categorie' => 'Sacs',
        // MÊME IMAGE POUR TOUTES LES PAGES
        'image_main' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.1.0',
        'image_thumb' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0',
        'image_autres'=>'https://images.unsplash.com/photo-1682628890923-e0d08e2e51f9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTZ8fFNhY3xlbnwwfHwwfHx8MA%3D%3D',
        'details' => 'Cuir plein fleur · Laiton vieilli · Numéroté'
    ]
];

    private $editorials = [
        ['titre' => 'L\'Art de la Silhouette', 'image' => 'editorial1.jpg'],
        ['titre' => 'Matières Rares', 'image' => 'editorial2.jpg'],
        ['titre' => 'Ateliers Secrets', 'image' => 'editorial3.jpg']
    ];

    public function home()
    {
        return view('luxe.home', [
            'produits' => array_slice($this->produits, 0, 3),
            'editorials' => array_slice($this->editorials, 0, 2)
        ]);
    }

    public function collection()
    {
        return view('luxe.collection', [
            'produits' => $this->produits,
            'categories' => ['Tous', 'Robes', 'Vestes', 'Sacs', 'Accessoires']
        ]);
    }

    public function produit($id)
    {
        if (!isset($this->produits[$id])) {
            abort(404);
        }

        return view('luxe.produit', [
            'produit' => $this->produits[$id]
        ]);
    }

    public function editorial()
    {
        return view('luxe.editorial', [
            'editorials' => $this->editorials
        ]);
    }

    public function contact()
    {
        return view('luxe.contact');
    }
    public function details($id)
{
    if (!isset($this->produits[$id])) {
        abort(404);
    }

    // Données supplémentaires pour la page détaillée
    $produitDetails = [
        'id' => $id,
        'produit' => $this->produits[$id],
        'tailles' => ['XS', 'S', 'M', 'L', 'XL'],
        'couleurs' => [
            ['nom' => 'Noir', 'code' => '#1a1a1a'],
            ['nom' => 'Écru', 'code' => '#f5f5dc'],
            ['nom' => 'Bordeaux', 'code' => '#800000']
        ],
        'detailsComplets' => [
            'Composition' => '100% Cachemire',
            'Origine' => 'Fabriqué en Italie',
            'Entretien' => 'Nettoyage à sec uniquement',
            'Poids' => '450g',
            'Dimensions' => 'Longueur: 75cm, Largeur: 52cm'
        ],
        'looksAssocies' => [
            ['id' => 2, 'nom' => 'Robe Soirée Sculptée'],
            ['id' => 3, 'nom' => 'Sac Portfolio']
        ],
        'avis' => [
            ['nom' => 'Sophie D.', 'note' => 5, 'commentaire' => 'Exceptionnel. La matière est divine.', 'date' => '15/10/2024'],
            ['nom' => 'Marie L.', 'note' => 4, 'commentaire' => 'Très belle coupe, légèrement grand.', 'date' => '10/10/2024']
        ],
        // AJOUTEZ CETTE LIGNE :
        'tousProduits' => $this->produits // Pour les produits similaires
    ];

    return view('luxe.details', $produitDetails);
}
}
