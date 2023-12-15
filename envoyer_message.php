<?php
//parametre de connection à la base de donnée
$nomserveur='localhost';
$bdname='bd_usafoot';
$utilisateur='root';
$password='';

try{
    //connection à la base de donnée
    $dbo= new PDO("mysql:host=$nomserveur; dbname=$bdname",$utilisateur,$password);
    $dbo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    // Récupérer les informations
    $nomcomplet = $_POST['nomcomplet'];
    $email = $_POST['email'];
    $messages = $_POST['messages'];
    
    //Insérer les données dans la base de bonnées
    $sql="INSERT INTO t_contact(nomcomplet, email,  messages) VALUES('$nomcomplet','$email','$messages')";
    $dbo->exec($sql);
?>
  
  <div style="background-color:green; color:white;font-size:16px; text-align:center;height: 25px">
  <?php
    //Message de succès
    echo'Merci de nous joindre, votre message à bien été envoyer';
	?>
	</div>
<?php
 }catch(PDOException $e){
    //Message d'erreur
    echo"Erreur, impossiblede se connecter à la base. Message échouée:".$e->getMessage();
 }
?>