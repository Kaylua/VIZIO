<html>
 <head>
    <meta charset='utf-8'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inscription</title>
 </head>
     <body>
         <div align="center">
        <br>
         <h2>Inscription</h2>

         <?php // affiche si le compte est créé ou si il y a une erreure
        if(isset($erreur))
        {
            echo '<div class = "erreur">' . $erreur . '</div>';
        }
        ?>

        <br>
         <form action="" method="POST" >
             <table>
                  <tr>
                     <td>
                         <label for="name">Nom:</label><br>
                         <input class="form-control" type="text" name="nom" autocomplete="off">
                     </td>
                  </tr>
                  <tr>
                      <td>
                          <label for="name">Prenom:</label><br>
                          <input class="form-control" type="text" name="prenom" autocomplete="off">
                      </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="mdp">Mot de passe:</label><br>
                        <input class="form-control" type="password" name="mdp" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mdp">Confirmation mot de passe:</label><br>
                         <input class="form-control" type="password" name="mdp2" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <label for="mail">E-mail:</label><br>
                         <input class="form-control" type="email" name="email" autocomplete="off">
                     </td>
                 </tr>
                
                 <tr>
                     <td>
                         <label for="age">Age:</label><br>
                         <input class="form-control" type="number" name="age" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="sex">Sexe:</label>
                         <select class="form-control" name="sex">
                         <option value="h">Masculin</option>
                         <option value="f">Feminin</option>
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="tel">Telephone:</label>
                         <input class="form-control" type="tel" name="tel" autocomplete="off">
                     </td>
                 </tr>
                 <tr>
                     <td>
                     <br><label for="statut">Statut:</label>
                         <select class="form-control" name="statut">
                         <option value="med">Medecin</option>
                         <option value="pat">Patient</option>
                     </td>
                 </tr>
                 <tr>
                     <td></td>
                     <td align="center">
                         <br/>
                     </td>
                 </tr>
             </table> 
            <form action="./index.php" method="GET">
                <button class="btn btn-primary" type="submit" value="Inscription" name="action">S'inscrire</button>
            </form>
         </form>
        <br>
         <form action="./index.php" method="GET">
             <a class="form-text">Déjà enregistré ?</a>
            <button class="btn btn-primary" type="submit" value="LOGIN" name="action">Se connecter</button>
        </form>

     </div>
 </body>
 </html>