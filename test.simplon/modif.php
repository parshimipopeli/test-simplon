<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=simplon;charset=utf8', 'root', 'philippe');
}
catch(Exception $e)

{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->prepare('SELECT * FROM users where id='.$_GET['id']);
$reponse->execute();
var_dump($reponse);
$textes = $reponse->fetchAll();
foreach ($textes as $key => $value) {
    // var_dump($value);


?>




      <form method="post" action="action_page.php" class="was-validated">
        <div class="form-group">
        <input type="hidden" name="id" value="<?= $value['id'] ?>">
            <label for="nom">Nom:</label>
            <input type="text" value="<?= $value['nom'] ?>" class="form-control" id="nom" name="nom" placeholder="Entrez Votre Nom" required>
        </div>
        <label for="nom">Prénom:</label>
            <input type="text"  value="<?= $value['prenom'] ?>" class="form-control" id="prenom" name="prenom" placeholder="Entrez Votre prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" value="<?= $value['mail'] ?>" class="form-control" id="email" name="email" placeholder="Entrez Votre mail" required>
        </div>
        <div class="form-group">
            <label for="text">telephone:</label>
            <input type="text" value="<?= $value['telephone'] ?>" class="form-control" id="tel" name="telephone" placeholder="Entrez Votre telephone" required>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
            <input type="submit" name="submit" class="btn  btn-ckeditor btn-primary btn-lg btn-block" value="Sauvegarder">
        </form>
    </div>
    </div>
</div>
<?php } ?>
<?php 
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])){
    $poste = $_POST['id'];
    $id = $_POST['id'];
    //UPDATE `config` SET `valeur` = NULL WHERE `config`.`id` = 3;

    $insert = $bdd->prepare('UPDATE users SET valeur = :poste WHERE id = :id ');
    $insert->bindValue(':poste', $poste);
    $insert->bindValue(':id', $id);
    $insert->execute();
    //header('Location: textes.php');
    echo '<p class="alert alert-success">Mise à jour Ok </span>';
}


 
if(isset($_POST['id'])) {
    $poste = $_POST['id'];
    $id = $_POST['id'];
    //UPDATE `config` SET `valeur` = NULL WHERE `config`.`id` = 3;

    $insert = $bdd->prepare('UPDATE users SET valeur = :poste WHERE id = :id ');
    $insert->bindValue(':poste', $poste);
    $insert->bindValue(':id', $id);
    $insert->execute();
    //header('Location: textes.php');
    // echo '<p class="alert alert-success">Mise à jour Ok FDP</span>';
}




?>