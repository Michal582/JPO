<?php
session_start();

//TODO: tutorial for remembering: https://stackoverflow.com/questions/1354999/keep-me-logged-in-the-best-approach

// function onLogin($user) {
//   $token = GenerateRandomToken(); // generate a token, should be 128 - 256 bit
//   storeTokenForUser($user, $token);
//   $cookie = $user . ':' . $token;
//   $mac = hash_hmac('sha256', $cookie, SECRET_KEY);
//   $cookie .= ':' . $mac;
//   setcookie('rememberme', $cookie);
// }

// function rememberMe() {
//   $cookie = isset($_COOKIE['rememberme']) ? $_COOKIE['rememberme'] : '';
//   if ($cookie) {
//       list ($user, $token, $mac) = explode(':', $cookie);
//       if (!hash_equals(hash_hmac('sha256', $user . ':' . $token, SECRET_KEY), $mac)) {
//           return false;
//       }
//       $usertoken = fetchTokenByUserName($user);
//       if (hash_equals($usertoken, $token)) {
//           logUserIn($user);
//       }
//   }
// }

if (isset($_POST['login_sub']) &&
  isset($_POST['username']) && !empty($_POST['username']) &&
  isset($_POST['passwd']) && !empty($_POST['passwd'])) {
  //TODO: verify md5
  $username = $_POST['username'];
  $passwd   = md5($_POST['passwd']);

  try {
    $pdo = new PDO("sqlite:users.sqlite");
    $sql = $pdo->prepare("SELECT * FROM users WHERE username=:username AND passwd=:passwd");

    if (!$sql) {
      echo "co jest: ".var_dump($pdo);
    }

    //INFO: By passing the parameters along with the $pdo->execute() method, all values in the array with be passed, as PDO::PARAM_STR to the statement with the $pdo->bindParam() function. https://stackoverflow.com/questions/12392424/pdo-bindparam-vs-execute
    $sql -> execute(array(':username' => $username, ':passwd' => $passwd));

    while ($row = $sql->fetch()) {
          
      //TODO: remember me:
    
      if ($row['username'] == $username && $row['passwd'] == $passwd) {
        $_SESSION['username']   = $row['username'];
        $_SESSION['permission'] = $row['permission'];
        
        header('Location: index.php');
        die;
      }
    } 
    
    echo "bad password or login";
    // header('Location: index.php');
    die;

  } catch (PDOException $e) {
    echo "cos sie zepsulo: ". $e->getMessage();
    die;
  }
  

}
//INFO: password must contain minimum of 6 chars, 1 number, one uppercase char, one lowercace char:
//TODO: add regex in html

if (isset($_POST['register_sub']) &&
isset($_POST['username']) && !empty($_POST['username']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['passwd']) && !empty($_POST['passwd']) &&
isset($_POST['ConfirmPasswd']) && !empty($_POST['ConfirmPasswd']) &&
$_POST['passwd'] == $_POST['ConfirmPasswd']) {
  //TODO: add md5 to password and base64 and stuff
  $username = $_POST['username'];
  $passwd   = md5($_POST['passwd']);
  $email    = $_POST['email'];
  //INFO: czym to moze byc xD
  $info = rand(0, 127);

  $uppercase = preg_match('@[A-Z]@', $passwd);
  $lowercase = preg_match('@[a-z]@', $passwd);
  $number    = preg_match('@[0-9]@', $passwd);

  // if (!$uppercase || !$lowercase || $number || strlen($passwd) < 6) {
  //   echo "cipeusz zly format";
  //   die;
  // }

  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "chuj".$email;
    die;
  }

  try {
    $pdo = new PDO("sqlite:users.sqlite");

    //check if user is in table, if not preceed
    $sql = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
    $sql->execute(array(':username' => $username));
    
    //BECAUSE $sql->fetchColumn() > 0 DOESNT WORK TO ROBIE TAK
    $countQuery = $sql->fetchColumn();
    if ($countQuery > 0) {
      somethingExistsErr("username");
    }

    //check if email is in table, if not preceed
    $sql = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $sql->execute(array(':email' => $email));

    $countQuery = $sql->fetchColumn();
    if ($countQuery > 0) {
      somethingExistsErr("email");
    }
    

    $sql = $pdo->prepare("INSERT INTO users(id, username, passwd, email, info, permission) VALUES (:id, :username, :passwd, :email, :info, :permission)");
    if (!$sql) {
      echo "co jest: ".var_dump($pdo);
    } 

    //INFO: By passing the parameters along with the $pdo->execute() method, all values in the array with be passed, as PDO::PARAM_STR to the statement with the $pdo->bindParam() function. https://stackoverflow.com/questions/12392424/pdo-bindparam-vs-execute

    $sql -> execute(array(':id' => NULL, ':username' => $username, ':passwd' => $passwd, ':email' => $email, ':info' => $info, ':permission' => 4));

  } 
  catch (PDOException $e) {
    echo "cos sie zepsulo: ". $e->getMessage();

    if ($e->errorInfo[1] == 1062) {
      echo "no gosciu username istnieje";
    } else {
      throw $e;
    }
    die;
  } 
  catch (Exception $e) {
     $message = 'cos niezwiazanego z baza'.$e->getMessage();
  }

  echo "xd";
  $_SESSION['username']   = $username;
  $_SESSION['permission'] = 4;
        
  header('Location: index.php');
  die;

}


if (isset($_GET['cmd']) && $_GET['cmd']=="logout") {
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
     $params = session_get_cookie_params();
     setcookie(session_name(), '', time() - 42000,
         $params["path"], $params["domain"],
         $params["secure"], $params["httponly"]
     );
  }
  session_unset('username');
  session_unset('permission');
  session_destroy();
  header('Location: index.php');
  die;
}


function somethingExistsErr($what) {
  echo $what."taken!";
  // header('Location: index.php');
  die;
}












?>