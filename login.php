<?php include 'bd.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Social">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/libs/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title>Social</title>

</head>
<body>
    <style type="text/css">
         body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
             border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        
       
<h2>Connexion</h2>
        
        
<form method="POST" action="login.php">
            <label for="email">Email :</label>
            
           
<input type="text" name="email" required>

            
<label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" required>

            <a href="mon_compte.php"><input  type="submit" name="connecter" ></a>


            <div class="error">
                <!-- Afficher les messages d'erreur ici -->
            </div>
        </form>
    </div>
    </body>
    </html>

<?php 
if (isset($_POST['connecter'])) {
    $Email= $_POST['email'];
    $mdp= $_POST['mdp'];
    $req2=" SELECT id,email,mdp FROM utilisateur WHERE email='$Email'";
    $result = mysqli_query($conn,$req2);
    if ($row = mysqli_fetch_assoc($result)) {
        $mdp_secure= hash_hmac("sha256", $mdp, "cle");
        $mdp_base= $row['mdp'];
        if (password_verify($mdp_secure, $mdp_base)) {
      session_start();
            $_SESSION['id'] = $row['id'];
            header('location:mon_compte.php');
        }

    }else{
        echo "Cet mail n'existe pas!!!";
    }
}
?>