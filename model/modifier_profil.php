<?php

include('./utilitaire/db_connexion.php');

if(isset($_SESSION['id_user']))
{
    $id_user = $_SESSION['id_user'];

    //modifier les infos perso : nom ; prenom ; email ; mdp
    if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != "ancien nom") // "ancien nom" a modifier
    {
        $new_nom = htmlspecialchars($_POST['newnom']);
        $_SESSION['nom'] = $_POST['newnom'];

        $update_nom = "UPDATE user SET nom = '$new_nom' WHERE id = $id_user";
        mysqli_query($base, $update_nom) or die('Erreur : '.$update_nom.'<br />'.mysqli_error($base));

        $succes_modify_nom = "Votre nom a été modifié avec succès !";
    }

    if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != "ANCIEN prenom") // "ancien prenom" a modifier
    {
        $new_prenom = htmlspecialchars($_POST['newprenom']);
        $_SESSION['prenom'] = $_POST['newprenom'];
    
        $update_prenom = "UPDATE user SET prenom = '$new_prenom' WHERE id = $id_user";
        mysqli_query($base, $update_prenom) or die('Erreur : '.$update_prenom.'<br />'.mysqli_error($base));
    
        $succes_modify_prenom = "Votre prenom a été modifié avec succès !";
    }

    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != "ANCIEN mail") // "ancien mail" a modifier
    {
        $new_mail = htmlspecialchars($_POST['newmail']);
        $_SESSION['mail'] = $_POST['newmail'];
    
        $update_mail = "UPDATE user SET mail = '$new_mail' WHERE id = $id_user";
        mysqli_query($base, $update_mail) or die('Erreur : '.$update_mail.'<br />'.mysqli_error($base));
    
        $succes_modify_email = "Votre email a été modifié avec succès !";
    }

    if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND $_POST['newmdp'] != "ANCIEN mdp") // "ancien mdp" a modifier
    {
        $new_mdp = htmlspecialchars($_POST['newmdp']);
        $_SESSION['mdp'] = $_POST['newmdp'];
        $mdp2 = htmlspecialchars($_POST['mdp2']);
        $_POST['newmdp'] = $_POST['mdp2'];
    
        $update_mdp = "UPDATE user SET mdp = '$new_mdp' WHERE id = $id_user";
        mysqli_query($base, $update_mdp) or die('Erreur : '.$update_mdp.'<br />'.mysqli_error($base));
    
        $succes_modify_password = "Votre mot de passe a été modifié avec succès !";
    }
}
?>
