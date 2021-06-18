<?php 
    require_once '../config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['date_naissance']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        
        $caractere_speciaux = array(
            ' ','!','"','#','$','%','&','(',')','*','+',',','-','.','/','0','1','2','3','4','5','6','7','8','9',':',';','<','=','>','?','@','[',']','^','_','`','{','|','}','~','€','„','ƒ','…','†','‡','‰','√','≈',
        );
        
        $prenom = htmlspecialchars($_POST['prenom']);
        
        //$tab_prenom = str_split($_POST['prenom']);
        //$interdiction_prenom = substr_count($tab_prenom, $caractere_speciaux);
        

        $nom = htmlspecialchars($_POST['nom']);
        /*
        $tab_nom = str_split($_POST['nom']);
        $interdiction_nom = substr_count($tab_nom, $caractere_speciaux);
        */

        $email = htmlspecialchars($_POST['email']);

        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // Calcul majorité (age)
        $date_naissance = $_POST['date_naissance'];
        $birth = date_create($_POST["date_naissance"]);
        $birthFormat = date_format($birth, "Y-m-d");
        $age = date('Y') - date_format($birth, "Y");;
    	if (date('md') < date('md', strtotime($birthFormat))) {
                $age -= 1;
        }

        // On vérifie si l'utilisateur existe
        $check = $connect->prepare('SELECT prenom, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if($age > 18) { //On verifie que l'utilisateur est majeur
                if(strlen($nom) <= 100){ // On verifie que la longueur du nom <= 100
                    if(in_array($nom, $caractere_speciaux) == false){ //On verifie que le nom ne comporte pas de caracteres speciaux
                        if(strlen($prenom) <= 100){ // On verifie que la longueur du prenom <= 100
                            if(in_array($prenom, $caractere_speciaux) == false){ //On verifie que le prenom ne comporte pas de caracteres speciaux
                                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                                            /* On hash le mot de passe avec Bcrypt, via un coût de 12
                                            $cost = ['cost' => 12];
                                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                                            */

                                            // On insère dans la base de données
                                            $insert = $connect->prepare('INSERT INTO utilisateurs(prenom, nom, date_naissance, email, password) VALUES(:prenom, :nom, :date_naissance, :email, :password)');
                                            $insert->execute(array(
                                                'prenom' => $prenom,
                                                'nom' => $nom,
                                                'date_naissance' => $date_naissance,
                                                'email' => $email,
                                                'password' => $password,
                                            ));
                                            // On redirige avec le message de succès
                                            header('Location:inscription.php?reg_err=success');
                                            die();
                                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
                            }else{ header('Location: inscription.php?reg_err=prenom_caractere'); die();}
                        }else{ header('Location: inscription.php?reg_err=prenom_length'); die();}
                    }else{ header('Location: inscription.php?reg_err=nom_caractere'); die();}
                }else{ header('Location: inscription.php?reg_err=nom_length'); die();}
            }else{ header('Location: inscription.php?reg_err=date_naissance'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }