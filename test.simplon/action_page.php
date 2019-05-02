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
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])) {
//    var_dump($_POST);
        // Insertio à l'aide d'une requête préparée
        

        $req = $bdd->prepare('INSERT INTO users(nom, prenom, mail, telephone) VALUES(?, ?, ?, ?)');

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $req->bindParam(1, $nom);
        $req->bindParam(2, $prenom);
        $req->bindParam(3, $email);
        $req->bindParam(4, $telephone);
        
        
        
        $req->execute();
}
?>

<div class="box">
<div class="box-header">
</div>
<!-- /.box-header -->
<div class="box-body">
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-striped table-responsive table-hover dataTable" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending">Nom</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">prenom</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">telephone</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $reponse = $bdd->query('SELECT * FROM users');
                        $reponse->execute(); 
                        while ($donnees = $reponse->fetch()) {
            echo '<tr role="row" class="odd">
                    <td class="sorting_1">'.$donnees['nom'].'</td>
                    <td>'.$donnees['prenom'].'</td>
                    <td>'.$donnees['mail'].'</td>
                    <td>'.$donnees['telephone'].'</td>
                </tr>';
        }
        $reponse->closeCursor(); 
        ?>
                    </tbody>
                    <tfoot>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending">Nom</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">prenom</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">telephone</th>
                            
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        