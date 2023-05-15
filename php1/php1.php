<h1>PHP 1 </h1>

<?php

//Exercice 1

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui.";
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase &laquo $chaineDeCaracteres &raquo contient $nbCaracteres caractères.<br>";

//Exercice 2

$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase &laquo $chaineDeCaracteres &raquo contient $nbMots mots.<br>";

//Exercice 3

$chaineDeCaracteres2 = str_replace("aujourd'hui", "demain", "$chaineDeCaracteres");
echo $chaineDeCaracteres."<br>".$chaineDeCaracteres2."<br>";

//Exercice 4

$phrase = "Engage le jeu que je le gagne";
$reverse = strtolower($phrase);
$reverse = str_replace(' ', '', $phrase);
$reverse = strrev($phrase);
if($phrase == $reverse){
    $resultat = "est palindrome";
}else{
    $resultat = "n'est pas palindrome";
}
echo "La phrase $phrase $resultat<br><br>";

//Exercice 5

$francs = 215;
$resultat = round($francs / 6.56,2);
echo "Montant en francs : $francs<br>";
echo "$francs francs = $resultat € <br><br>";

// Exercice 6

$nbArticles = 5;
$prixHT = 9.99;
$tauxTVA = 0.2;
$totalTTC = $nbArticles * $prixHT * (1+$tauxTVA);
echo "Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $nbArticles<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de : $totalTTC € <br><br>";

// Exercice 7

$age = 6;
//if (gettype($age)=="int"){

if ($age>=12){
    $resultat2 = "Cadet";
} else if ($age>=10){
    $resultat2 = "Minime";
} else if ($age>=8){
    $resultat2 = "Pupille";
} else if ($age>=6){
    $resultat2 = "Poussin";
} else {
    $resultat2 = "La catégorie n'est pas gérée";
}

echo "L'enfant qui a " . $age . "ans appartient à la catégorie &laquo" . $resultat2 ." &raquo <br><br>";

// Exercice 8

// Avec for

echo "Table de" .$nombre ." : <br>";
 $nombre = 8;
 for ($i=0; $i<=10; $i++){
    $resultat3 = $i * $nombre;
    echo $i. "x" .$nombre. "=" .$resultat3. "<br>";
 }

// Avec while

 echo "Table de $nombre : <br>";
 $nombre = 8;
 while ($i<10){
    $resultat4 = $i * $nombre;
    echo $i. "x" .$nombre. "=" .$resultat4. "<br>";
 $i++;}

 // Exercice 9

 $age = 16;
 $sexe = "F";
 
if ($sexe == "F" && $age <= 35 & $age>= 18){
    $resultat5 = "imposable";
} else if ($sexe == "H" && $age >= 20){
    $resultat5 = "imposable";
} else {
    $resultat5 = "non imposable";
}
echo "La personne est ". $resultat5.". <br><br>";

// Exercice 10

$nb10 = 0;
$nb5 = 0;
$nb2 = 0;

$montantAPayer = "152";
$montantVerse = "200";
$reste = "48";

while($reste >=10){
    $reste = $reste - 10;
     $nb10 ++;
}
if ($reste >= 5){
    $reste = $reste - 5;
    // $reste -= 5;
     $nb5++;
    //  $nb5 = $nb5 + 1;
}
while($reste>=2){
    $reste = $reste -2;
     $nb2++;
}

echo "Rendue de monnaie :";
echo "$nb10 billets de 10€ - $nb5 billets de 5€ - $nb2 pièces de 2€ - $reste pièce de 1€ <br><br>";


// Exercice 11

$marques = [ "Peugeot" , "Renault" , "BMW" , "Mercedes" ];
$nbMarques = count($marques);

echo "Il y a " . $nbMarques . " marques de voitures dans le tableau : <br>";
foreach($marques as $marques){
    echo "".$marques. "<br>" ;
}

// Exercice 12

$tableau = array("Mickael" =>"FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG", "Stéphane" =>"FRA", "Mylena "=> 'FIN');

$tableau2 = array("Mickael" =>"FRA");


function direBonjour($prenom, $langue){

    switch($langue){
        case "FRA" : echo "Bonjour ".$prenom; break;
        case "ESP" : echo "Hola".$prenom; break;
        case "ENG" : echo "Hello".$prenom; break;
        default : echo "Langue non supportée";
}
}

foreach ($tableau as $key => $value ){

    direBonjour($key, $value);
}

foreach ($tableau2 as $key => $value ){

    direBonjour($key, $value);
}


 // Exercice 13
 
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
 

$notes2 = [10, 12, 8, 19, 3, 16, 11, 13, 9,15,19];

function calculerMoyenne (array $notes){
   
    $nbNotes = count($notes);
    $sommesNotes = array_sum($notes);
    $moyenne = round($sommesNotes/$nbNotes, 2);


    return  "Sa moyenne générale est donc de : $moyenne ";
}

echo "Les notes obtenues par l'élève sont: " ;
//var_dump($notes);
echo calculerMoyenne($notes);
echo calculerMoyenne($notes2)."<br>";


// Exercice 14

$date = "21/05/2018";
$dateNaissance = "17/01/1985";




// Exercice 15

// class (classe) : schéma, template, modèle
class Personne {
    // attributes / properties (attributs/propriétés) : de quoi la classe est composée, ce qui la définit, permet de connaître son état précis à un instant T
    // visibilité + (type) + nom
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissanceString) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissanceString);
    }

    // methods (méthodes) : comportements spécifiques à cette classe; ces méthodes seront accessibles depuis l'extérieur en passant par l'instance de l'objet ($p1->sePresenter())

    public function afficherInfos() {
        $age = $this->dateNaissance->diff(new DateTime())->format("%Y");
        echo " $this->prenom $this->nom a $age ans ";
    }

    // getters/setters (accesseurs/mutateur) : les getters servent à récupérer la valeur des attributs depuis l'exterieur (de la classe), les setters permettent de modifier les attributs, on aura au maximun 1 getter + 1 setter par attribut, on ne crée un getter que si on autorise l'extérieur à connaître la valeur ce cet attribut et on ne crée un setter que si on autorise l'extérieur à modifier cet attribut

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissanceString) {
        $this->dateNaissance = new DateTime($dateNaissanceString);
    }
}

// p1 est une variable, qui contient un objet == une instance de la classe Personne ; cet objet a été initialisé d'après les arguments passée (au constructeur via new)
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

$p1->afficherInfos();
$p2->afficherInfos();

// pour comprendre mieux les objets au fil du temps :
// encapulation, héritage, polymorphisme

?>