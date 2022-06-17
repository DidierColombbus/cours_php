<!-- Exercice 1-Vous créez un tableau PHP contenant les pays suivants : France, Italie, Espagne, inconnu, Allemagne auxquels vous associez les valeurs Paris, Rome, Madrid, '?', Berlin.
 
 Vous parcourez ce tableau pour afficher la phrase "La capitale X se situe en Y" dans un paragraphe (où X remplace la capitale et Y le pays).

 Pour le pays "inconnu" vous afficherez "Ca n'existe pas !" à la place de la phrase précédente.   -->

 <?php
    $pays = array('France', 'Italie', 'Espagne', 'inconnu', 'Allemagne');
    $capitale = ['Paris', 'Rome', 'Madrid', '?', 'Berlin'];
    $tableau = count($pays);

    for($i = 0; $i < $tableau; $i++){
        echo "<p>La capitale " .$capitale[$i]. " se trouve en " .$pays[$i]. ". <br>";
    }if ($i == 3){
        echo "<p>Ca n\'existe pas !";
    }
    echo "</p>";
?>

<!-- Exercice 2- Créer une fonction qui retourne la conversion d'une date FR en date US ou inversement.
  Cette fonction prend 2 paramètres : une date et le format de conversion de sortie "US" ou "FR". Pour faire cette conversion, vous utilisez la classe DateTime.
     
  2- Vous validez que le paramètre de format est bien "US" ou "FR". La fonction retourne un message si ce n'est pas le cas.
 
  3- Vous validez que la date fournie est bien une date. La fonction retourne un message si ce n'est pas le cas. -->

