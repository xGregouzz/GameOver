let myForm = document.getElementById('myform');
myForm.addEventListener('submit', function (e) {
    let pseudo = document.getElementById('pseudo');
    let password = document.getElementById('password');
    let email = document.getElementById('email');
    let tel = document.getElementById('phone');
    let adresse = document.getElementById('adresse');
    let ville = document.getElementById('ville');
    let postal = document.getElementById('postal');
    let nom = document.getElementById('nom');
    let prenom = document.getElementById('prenom');
    let dateNaiss = document.getElementById('dateNaiss');
    let myRegex = /^[a-zA-Z0-9àéè]+$/;
    let nbPseudo = /^.{1,45}$/;
    let nbMail = /[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]{1,45}$/i;
    let test_email = /[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i;
    let test_tel = /^[0-9]+$/;
    let nbTel = /^[0-9]{10,13}$/;
    let nbAdd = /^.{1,45}$/;
    let nbMDP = /^.{8,32}$/;
    let nbNom = /^.{1,45}$/;
    let nomReg = /^[a-zA-ZÀ-ú'-]+$/;
    let test_postal = /^[0-9][0-9][0-9][0-9][0-9]$/;

    //PSEUOD ERROR
    //Verifie si le champ est vide

    if (pseudo.value.trim() === "") {
        let errorPseudo= document.getElementById('errorPseudo');
        errorPseudo.innerHTML ="Le champ Pseudo est vide !";
        errorPseudo.style = "border-radius:5px; padding: 10px;";
        errorPseudo.style.color = 'white';
        e.preventDefault();

    //Verifie si le champ contient des caractères spéciaux et si entre 1 et 45 carac

    }else if (myRegex.test(pseudo.value) === false) {
        let errorPseudo= document.getElementById('errorPseudo');
        errorPseudo.innerHTML ="Un Pseudo ne peut comporter que des lettres et des chiffres uniquement !";
        errorPseudo.style = "border-radius:5px; padding: 10px;";
        errorPseudo.style.color = 'white';
        e.preventDefault();

    //Verifie si le champ contient des caractères spéciaux et si entre 1 et 45 carac

    }else if (nbPseudo.test(pseudo.value) === false) {
        let errorPseudo= document.getElementById('errorPseudo');
        errorPseudo.innerHTML ="Un Pseudo ne peut être composé que de 45 caractères au maximum !";
        errorPseudo.style = "border-radius:5px; padding: 10px;";
        errorPseudo.style.color = 'white';
        e.preventDefault();

    //Pas d'erreurs

    }else if (pseudo.value.trim() !== "" && myRegex.test(pseudo.value) === true && nbPseudo.test(pseudo.value) === true) {
        let errorPseudo= document.getElementById('errorPseudo');
        errorPseudo.innerHTML ="";
        errorPseudo.style = "padding: 0px;";
        errorPseudo.style.color = 'white';
    }

    //MAIL ERROR

    //Verifie si le champ est vide

    if (email.value.trim() === "") {
        let errorMail= document.getElementById('errorMail');
        errorMail.innerHTML ="Le champ E-mail est vide !";
        errorMail.style = 'border-radius:5px; padding: 10px;';
        errorMail.style.color = 'white';
        email.style.backgroundColor = "white";
        e.preventDefault();

    //Verifie si c'est un mail valide

    }else if (test_email.test(email.value) === false) {
        let errorMail= document.getElementById('errorMail');
        errorMail.innerHTML ="Vérifiez votre adresse mail, elle n'est pas valide !";
        errorMail.style = 'border-radius:5px; padding: 10px;';
        errorMail.style.color = 'white';
        email.style.backgroundColor = "white";
        e.preventDefault();


    //mail trop long

    }else if (nbMail.test(email.value) === false) {
        let errorMail= document.getElementById('errorMail');
        errorMail.innerHTML ="Une adresse mail ne peut être composé que de 45 caractères au maximum !";
        errorMail.style = 'border-radius:5px; padding: 10px;';
        errorMail.style.color = 'white';
        email.style.backgroundColor = "white";
        e.preventDefault()

    //Pas d'erreurs

    }else if (email.value.trim() !== "" && test_email.test(email.value) === true && nbMail.test(email.value) === true) {
        errorMail.innerHTML = "";
        errorMail.style = 'padding: 0px;';
        email.style.backgroundColor = "white";
        
    }

    //PHONE ERROR

    //Verifie si le champ est vide

    if (tel.value.trim() == "") {
        let errorPhone= document.getElementById('errorPhone');
        errorPhone.innerHTML ="Le champ Telephone est vide !";
        errorPhone.style = 'border-radius:5px; padding: 10px;';
        errorPhone.style.color = 'white';
        tel.style.backgroundColor = "white";
        e.preventDefault();

    //Verifie si le numéro est valide

    }else if (test_tel.test(tel.value) == false) {
        let errorPhone= document.getElementById('errorPhone');
        errorPhone.innerHTML ="Ce numéro de téléphone n'est pas valide !";
        errorPhone.style = 'border-radius:5px; padding: 10px;';
        errorPhone.style.color = 'white';
        e.preventDefault();

    //Verifie si entre 10 et 13 chiffres

    }else if (nbTel.test(tel.value) == false) {
        let errorPhone= document.getElementById('errorPhone');
        errorPhone.innerHTML ="Le numéro de téléphone doit être composé d'au minimum 10 chiffres et 13 au maximum";
        errorPhone.style = 'border-radius:5px; padding: 10px;';
        errorPhone.style.color = 'white';
        e.preventDefault();

    //Pas d'erreurs

   }else if (tel.value.trim() !== "" && test_tel.test(tel.value) === true && nbTel.test(tel.value) == true) {
        errorPhone.innerHTML ="";
        errorPhone.style = 'padding: 0px;';
        email.style.backgroundColor = "white";
        

    }

    //ADDRESS ERROR

    //Le champ est vide

    if (adresse.value.trim() == "") {
        let errorAdresse= document.getElementById('errorAdresse');
        errorAdresse.innerHTML ="Le champ Adresse est vide !"
        errorAdresse.style = 'border-radius:5px; padding: 10px;';
        errorAdresse.style.color = 'white';
        adresse.style.backgroundColor = "white";
        e.preventDefault();

    // 45 caractères au maximum

    }else if (nbAdd.test(adresse.value) == false) {
        let errorAdresse= document.getElementById('errorAdresse');
        errorAdresse.innerHTML ="Vous ne pouvez entrer que 45 caractères au maximum !";
        errorAdresse.style = 'border-radius:5px; padding: 10px;';
        errorAdresse.style.color = 'white';
        e.preventDefault();

    //Pas d'erreurs

    }else if (adresse.value.trim() !== "" && nbAdd.test(adresse.value) == true) {
        errorAdresse.innerHTML ="";
        errorAdresse.style = 'padding: 0px;';
        adresse.style.backgroundColor = "white";
        
    }

    //CITY ERROR

    //Le champ est vide

    if (ville.value.trim() == "") {
        let errorVille= document.getElementById('errorVille');
        errorVille.innerHTML ="Le champ Ville est vide !"
        errorVille.style = 'border-radius:5px; padding: 10px;';
        errorVille.style.color = 'white';
        ville.style.backgroundColor = "white";
        e.preventDefault();

    // 45 caractères au maximum

    }else if (nbAdd.test(ville.value) == false) {
        let errorVille= document.getElementById('errorVille');
        errorVille.innerHTML ="Vous ne pouvez entrer que 45 caractères au maximum !";
        errorVille.style = 'border-radius:5px; padding: 10px;';
        errorVille.style.color = 'white';
        e.preventDefault();

    //Pas d'erreurs

    }else if (ville.value.trim() !== "" && nbAdd.test(ville.value) == true) {
        errorVille.innerHTML ="";
        errorVille.style = 'padding: 0px;';
        ville.style.backgroundColor = "white";
        
    }

    //POSTAL ERROR

    if (postal.value.trim() == "") {
        let errorPostal= document.getElementById('errorPostal');
        errorPostal.innerHTML ="Le champ Code Postal est vide !"
        errorPostal.style = 'border-radius:5px; padding: 10px;';
        errorPostal.style.color = 'white';
        e.preventDefault();

    }else if (test_postal.test(postal.value) == false) {
        errorPostal.innerHTML ="Vérifiez votre code postal, il n'est pas valide !"
        errorPostal.style = 'border-radius:5px; padding: 10px;';
        errorPostal.style.color = 'white';
        e.preventDefault();

    }else if (postal.value.trim() !== "" && test_postal.test(postal.value) == true) {
        errorPostal.innerHTML ="";
        errorPostal.style = 'padding: 0px;';
        postal.style.backgroundColor = "white";
        
    }

    //PASSWORD ERROR

    //Le champ est vide

    if (password.value.trim() == "") {
        let errorPassword= document.getElementById('errorPassword');
        errorPassword.innerHTML ="Le champ Mot de Passe est vide !"
        errorPassword.style = 'border-radius:5px; padding: 10px;';
        errorPassword.style.color = 'white';
        password.style.backgroundColor = "white";
        e.preventDefault();

    // 32 caractères au maximum et 8 au minimum

    }else if (nbMDP.test(password.value) == false) {
        let errorPassword= document.getElementById('errorPassword');
        errorPassword.innerHTML ="Vous ne pouvez entrer qu'entre 8 et 32 caractères !";
        errorPassword.style = 'border-radius:5px; padding: 10px;';
        errorPassword.style.color = 'white';
        e.preventDefault();

    //Pas d'erreurs

    }else if (password.value.trim() !== "" && nbMDP.test(password.value) == true) {
        errorPassword.innerHTML ="";
        errorPassword.style = 'padding: 0px;';
        password.style.backgroundColor = "white";
        
    }

    //NAME ERROR

    //Le champ est vide

    if (nom.value.trim() === "") {
        let errorNom= document.getElementById('errorNom');
        errorNom.innerHTML ="Le champ Nom est vide !";
        errorNom.style = "border-radius:5px; padding: 10px;";
        errorNom.style.color = 'white';
        e.preventDefault();

    //Plus de 45 caractères

    }else if (nbNom.test(nom.value) == false) {
        let errorNom= document.getElementById('errorNom');
        errorNom.innerHTML ="Vous ne pouvez entrer au maximum que 45 caractères!";
        errorNom.style = "border-radius:5px; padding: 10px;";
        errorNom.style.color = 'white';
        e.preventDefault();

    //chiffre non accepté

    }else if (nomReg.test(nom.value) == false) {
        let errorNom= document.getElementById('errorNom');
        errorNom.innerHTML ='Les chiffres et les caractères spéciaux sont interdits sauf: " \' " et " - " !';
        errorNom.style = "border-radius:5px; padding: 10px;";
        errorNom.style.color = 'white';
        e.preventDefault();

    //tout est ok

    }else if (nom.value.trim() !== "" && nbNom.test(nom.value) == true && nomReg.test(nom.value) == true) {
        let errorNom= document.getElementById('errorNom');
        errorNom.innerHTML ="";
        errorNom.style = "padding: 0px;";
        errorNom.style.color = 'white';
        
    }

    //FIRSTNAME ERROR

    //Le champ est vide

    if (prenom.value.trim() === "") {
        let errorPrenom= document.getElementById('errorPrenom');
        errorPrenom.innerHTML ="Le champ Prénom est vide !";
        errorPrenom.style = "border-radius:5px; padding: 10px;";
        errorPrenom.style.color = 'white';
        e.preventDefault();

    //Plus de 45 caractères

    }else if (nbNom.test(prenom.value) == false) {
        let errorPrenom= document.getElementById('errorPrenom');
        errorPrenom.innerHTML ="Vous ne pouvez entrer au maximum que 45 caractères!";
        errorPrenom.style.color = 'white';
        e.preventDefault();

    //chiffre non accepté

    }else if (nomReg.test(prenom.value) == false) {
        let errorPrenom= document.getElementById('errorPrenom');
        errorPrenom.innerHTML ='Les chiffres et les caractères spéciaux sont interdits sauf: " \' " et " - " !';
        errorPrenom.style = "border-radius:5px; padding: 10px;";
        errorPrenom.style.color = 'white';
        e.preventDefault();

    //tout est ok

    }else if (prenom.value.trim() !== "" && nbNom.test(prenom.value) == true && nomReg.test(prenom.value) == true) {
        let errorPrenom= document.getElementById('errorPrenom');
        errorPrenom.innerHTML ="";
        errorPrenom.style = "padding: 0px;";
        errorPrenom.style.color = 'white';
        
    }
    //BIRTHDATE ERROR 

    var today = new Date();
    let currentDate = today.getFullYear()+"-"+(today.getMonth()+1)+"-"+today.getDate();
    let userDate = dateNaiss.value.trim();
    var enteredAge = getAge(dateNaiss.value);
    function getAge(DOB) {
    var today = new Date();
    var birthDate = new Date(DOB);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }    
    return age;
}

    //let resultat = dateDiff(userDate, currentDate);
    //le champ est vide
    if (dateNaiss.value.trim() === "") {
        let errorDate= document.getElementById('errorDate');
        errorDate.innerHTML ="Le champ Date de Naissance est vide !";
        errorDate.style = "border-radius:5px; padding: 10px;";
        errorDate.style.color = 'white';
        e.preventDefault();

    }else if (enteredAge < 0) {
        let errorDate= document.getElementById('errorDate');
        errorDate.innerHTML ="Il n'y a pas d'âge pour faire de l'art mais il faut au moins être né !";
        errorDate.style = "border-radius:5px; padding: 10px;";
        errorDate.style.color = 'white';
        e.preventDefault();

    }else if (dateNaiss.value.trim() !== "" && enteredAge >= 0) {
        let errorDate= document.getElementById('errorDate');
        errorDate.innerHTML ="";
        errorDate.style = "padding: 0px;";
        errorDate.style.color = 'white';
        
    }

});