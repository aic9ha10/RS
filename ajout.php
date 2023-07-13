
<?php 
session_start();
include 'bd.php';

if(isset($_POST['ajouter'])){
            $id=$_SESSION['id'];
          $contenu=$_POST['contenu'];
            $name=$_FILES['image']['name'];
            $dest = "image".$name;
            move_uploaded_file($_FILES['image']['tmp_name'],$dest);

          $req1="INSERT INTO publication (contenu,id,photo) VALUES ('$contenu','$user','$name')";
          $resultat=mysqli_query($conn,$req1);

  if($resultat){
    
    header("location:index.php");
  }
}

 if (isset($_POST['inscrire'])) {
 
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    // $photo=$_FILES['photo']['name'];
    // $dest="image". $photo;
    // move_uploaded_file($_FILES ['photo']['tmp_name'],$dest);
    $cmdp = $_POST['cmdp'];
    

    if ($mdp==$cmdp) {
      $secure=hash_hmac("sha256", $mdp, "cle");
      $mdp_secure=password_hash($secure,PASSWORD_DEFAULT);
    $sql1="INSERT INTO utilisateur(nom,prenom,email,mdp)VALUES('$nom','$prenom','$email','$mdp_secure')";
      $resultat=mysqli_query($conn,$sql1);
      if ($resultat) {
        // echo "utilisateur ajouté avec succes !"; 
         header("location: login.php");
      }
    }
}  
 //  if (isset($_POST['soumettre'])) {
  
 //    $contenu=$_POST['contenu'];
 //    $date_heure_com=$_POST['date_heure_com'];

 //    $requete ="INSERT INTO commentaire(contenu,date_heure_com,id) VALUES ('$contenu','$date_heure_com')";
 //    $resultat = mysqli_query($conn,$requete);
 //    if ($resultat) {
 //      // echo "utilisateur ajouté avec succes !"; 
 //       header("location: index.php");
 //    }
 // }

//    // Affichage des commentaires existants
//    $requete = "SELECT * FROM commentaire ORDER BY date_heure_com DESC";
//    $resultat = mysqli_query($conn,$requete);



//    if (mysqli_num_rows($resultat) > 0) {
//     while ($row = mysqli_fetch_assoc($resultat)) {
//         echo "contenu : " . $row['contenu'] . "<br>";
//         echo "date_heure_com : " . $row['date_heure_com'] . "<br><br>";
//     }
// } else {
//     echo "Aucun commentaire trouvé.";
// }



 ?>