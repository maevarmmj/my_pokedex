<?php

class View{
private $fichier;
private $titre;
public function __construct(string $action){
    $this->titre = $action;
    $this->fichier = "views/vue" . $action . ".php";
}

// Génère et affiche la vue
public function generer(array $donnees){
        // Génération de la partie spécifique de la vue
        $contenu = $this->genererFichier($this->fichier, $donnees);
        // Génération du gabarit commun utilisant la partie spécifique
        $vue = $this->genererFichier('views/gabarit.php', array('titre' => $this->titre, 'contenu' => $contenu));
        // Renvoi de la vue au navigateur
        echo $vue;
}

// Génère un fichier vue et renvoie le résultat produit

public function genererFichier(string $fichier, array $donnees){
    if (file_exists($fichier)) {
        // Rend les éléments du tableau $donnees accessibles dans la vue
        // Voir la documentation de extract
        extract($donnees);
        // Démarrage de la temporisation de sortie
        ob_start();
        // Inclut le fichier vue
        // Son résultat est placé dans le tampon de sortie
        require $fichier;
        // Arrêt de la temporisation et renvoi du tampon de sortie
        return ob_get_clean();
    }
    else {
        throw new Exception("Fichier '$fichier' introuvable");
    }
}

}

?>