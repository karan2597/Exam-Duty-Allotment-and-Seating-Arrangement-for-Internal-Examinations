<?php
   $msg = '';

   if (isset($_POST['login']) && !empty($_POST['username'])
      && !empty($_POST['password'])) {

      if ($_POST['username'] == 'hi' &&
         $_POST['password'] == 'hi') {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'abc';

         header('Location:try.php');
      }else {
       //  $msg = 'Wrong username or password';
         header('Location:fail.php');
      }
   }
?>
