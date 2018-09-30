<?php

if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $cpwd = mysqli_real_escape_string($conn, $_POST['confirm_pwd']);

  //Error handlers
  //Check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($cpwd))
  {
    header("Location: ../login.php?signup=empty");
    exit();
  }else{
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z\s]*$/", $first) || !preg_match("/^[a-zA-Z\s]*$/", $last))
    {
      header("Location: ../login.php?signup=invalid");
      exit();
    }else {
      //check if email is invalid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        header("Location: ../login.php?signup=email");
        exit();
      }else {
        $sql = "SELECT * FROM clients WHERE client_uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../login.php?signup=usertaken");
          exit();
        }else {
          if ($pwd != $cpwd) {
            header("Location: ../login.php?signup=passwordmismatched");
          }else{
          //hashing the password
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //insert the user into the database
          $sql = "INSERT INTO  clients (client_first, client_last, client_email, client_uid, client_pwd)  VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
          mysqli_query($conn, $sql);
          header("Location: ../login.php?signup=success");
          exit();
          }
        }
      }

    }

  }


}else{
  header("Location: ../signup.php");
  exit();
}
?>
