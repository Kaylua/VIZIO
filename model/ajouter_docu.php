<!DOCTYPE html>

<?php
 // connexion à la base de données
 $base = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($base, "vizio");
?>

<?php
 
 if(isset($_POST["submit"])){
    $b = getimagesize($_FILES["userImage"]["tmp_name"]);
    //Vérifiez si l'utilisateur à sélectionné une image
    if($b !== false){
        //Récupérer le contenu de l'image
        $file = $_FILES['userImage']['tmp_name'];
        $image = addslashes(file_get_contents($file));


        $query = $db->query("INSERT into gallery (image) VALUES ('$image')");
        if($query){
            echo "Fichier uploadé avec succès.";
        }else{
            echo "Échec d'upload du fichier.";
        } 
    }else{
        echo "Veuillez sélectionner une image à uploader.";
    }
}
?>