<?php
session_start();

if (isset($_POST['submit'])) {
  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //error handlers
  //check if input are empty
  if (empty($uid) || empty($pwd)) {
    header("Location: ../login.php?login=empty");
    exit();
  }else {
    $sql = "SELECT * FROM clients WHERE client_uid='$uid' OR client_email='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("Location: ../login.php?login=error");
      exit();
    }else {
      if ($row = mysqli_fetch_assoc($result)) {
        //De-hashing the password
        $hashedPwdCheck = password_verify($pwd, $row['client_pwd']);
        if ($hashedPwdCheck == false) {
          header("Location: ../login.php?login=error");
          exit();
        }elseif ($hashedPwdCheck == true) {
            //log in the user here
            $_SESSION['u_id'] = $row['client_id'];
            $_SESSION['u_first'] = $row['client_first'];
            $_SESSION['u_last'] = $row['client_last'];
            $_SESSION['u_email'] = $row['client_email'];
            $_SESSION['u_uid'] = $row['client_uid'];
            header("Location: ../home.php?login=success");
            exit();
        }
      }
    }

  }
}else {
  header("Location: ../login.php?login=error");
  exit();
}



 ?>
