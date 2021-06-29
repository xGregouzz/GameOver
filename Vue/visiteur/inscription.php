<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Inscription</title>
</head>
<body>
    <br><br>
    <div class="login-form">
        <form action="Controleur/inscription.php" method="post">
            <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="date" name="date_naissance" class="form-control" placeholder="Date de Naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
        </form>
    </div>
    <script type="text/javascript">
        <?php
            include_once('Controleur/script_inscription.js');
        ?>
    </script>
    <style>
        .login-form {
                    width: 340px;
                    margin: 50px auto;
                }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</body>
</html>