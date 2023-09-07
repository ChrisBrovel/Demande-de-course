<?php

//pour vérifier si le formulaire a bien été envoyé

if (!empty($_POST)){

//  var_dump($_POST);

//on verifie que tout les champs requis sont remplis

if (isset ($_POST["pseudo"], $_POST["email"], $_POST["pass"])
&& !empty ($_POST["pseudo"]) && !empty ($_POST["email"]) && !empty ($_POST["pass"])


){
 
    //le formulaire est correctement rempli (complet...)
    // on recupère les données en les protégeant

    $pseudo = strip_tags($_POST["pseudo"]);
    // pour vérifier si c'est vraiment une adresse email
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
      
        die("L'adresse email est incorrecte");
    }

    // pour Hasher le mot de passe 
    $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);

   // die ($pass);


// on enregistre en base de donée

require_once


} else{
        die ("Le formuamire est incomplet");

    }
}


?>