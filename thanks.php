
<?php

   
if($_SERVER['REQUEST_METHOD'] === 'POST') {
 $errors = [];
 
    if(empty(trim($_POST['user_name']))){
       $errors[] = 'Name is required';
    }
    if(empty(trim($_POST['user_firstname']))){
       $errors[] = 'Firstname is required';
    }
    if(empty(trim($_POST['user_email'])) && filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors[] = 'Email is required';
    }
    if(empty(trim($_POST['user_phone']))){
       $errors[] = 'Phone is required';
    }
    if(empty(trim($_POST['user_subject']))){
       $errors[] = 'Subject is required';
    }
    if(empty(trim($_POST['user_message']))){
       $errors[] = 'Email is required';
    }
    if(empty($errors)) {

      echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['user_subject'] . ' .'; 


      echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au '.  $_POST['user_phone'] . 'dans les plus brefs délais pour traiter votre demande : ' . $_POST['user_message'] . ' .';

    }else {
     foreach($errors as $error){
      echo $error;
     }
    }
   }
?>

  


