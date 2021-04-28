<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  if (isset($_POST) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['message'])) 
  {
      $to = "chapelet.a2001@gmail.com";
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $message = $_POST['message'];
      $header = 'De ' . $nom . ' ' . $prenom . ' ' . ' : ' . $_POST['email'];
  
      $result = mail($to, $header, $message);
      echo json_encode($result);
  }