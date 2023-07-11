<?php include 'bd.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <div class="container">
    <h2>Inscription</h2>

    <form action="ajout.php" method="POST">
        <label for="nom">Nom d'utilisateur :</label>
        <input type="text" name="nom" id="nom" required><br>
        <label for="prenom">Prenom d'utilisateur :</label>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="email">E-mail :</label>
        <input type="text" name="email" id="email" required><br>
        
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" required><br>
        <label for="cmdp">Confirmer le mot de passe :</label>
        <input type="password" name="cmdp" required>
        <!-- <label for="photo" >Photo</label>
        <input type="file"  name="photo" id="photo" required> -->

        <input type="submit" value="inscrire" name="inscrire">
        <!-- <div class="success">
                inscription avec success!!
            </div> -->
      </div>  
    </form>
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

        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</body>
</html>
