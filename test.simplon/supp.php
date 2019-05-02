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



$query = "SELECT * FROM membres";
while($donnees = mysql_fetch_array($query))
{
    ?>
    <a href='listemembres.php?id=<?php echo $donnees['id']; ?>' ><?php echo $donnees['id']; ?> </a> <?php PHP_EOL ?>
    <a href='listemembres.php?id=<?php echo $donnees['id']; ?>' ><?php echo $donnees['pseudo']; ?> </a> <?php PHP_EOL ?>
    <a href='listemembres.php?id=<?php echo $donnees['id']; ?>' ><?php echo $donnees['email']; ?> </a> <?php PHP_EOL ?>
    <?php
}

if(isset($_GET['id']) and $_GET['id'] != "" and is_numeric ($_GET['id']))
{
if($_POST['delete'] == "effacer")
{
    $sql = "DELETE FROM membres WHERE id= " . $_GET['id'];
 
}else
{
?>
<form method="POST" action="">
<input type="text" name="delete" placeholder="effacer" />
<input type="submit" />
</form>
<?php
}
}

?>