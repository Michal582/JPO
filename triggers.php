<?php
if (isset($_POST['login_sub']) &&
  isset($_POST['username']) && !empty($_POST['username']) &&
  isset($_POST['passwd']) && !empty($_POST['passwd'])) {
  //TODO: verify md5
  $username = $_POST['username'];
  $passwd = $_POST['passwd'];
  echo "lmao";

  try {
    $pdo = new PDO("sqlite:users.sqlite");
    $sql = $pdo->prepare("SELECT * FROM users WHERE username=:username AND passwd=:passwd");

    if (!$sql) {
      echo "co jest: ".var_dump($pdo);
    }

    //INFO: By passing the parameters along with the $pdo->execute() method, all values in the array with be passed, as PDO::PARAM_STR to the statement with the $pdo->bindParam() function. https://stackoverflow.com/questions/12392424/pdo-bindparam-vs-execute
    $sql -> execute(array(':username' => $username, ':passwd' => $passwd));
    // var_dump($sql);

    while ($row = $sql->fetch()) {
      echo $row['username']."<br />\n";
    }
    
    die;
  } catch (PDOException $e) {
    echo "cos sie zepsulo: ". $e->getMessage();
    die;
  }
  

}
echo "will he";

if (isset($_POST['register_sub']) &&
isset($_POST['username']) && !empty($_POST['username']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['passwd']) && !empty($_POST['passwd']) &&
isset($_POST['ConfirmPasswd']) && !empty($_POST['ConfirmPasswd']) &&
$_POST['passwd'] == $_POST['ConfirmPasswd']) {
  //TODO: add md5 to password and base64 and stuff
  $username = $_POST['username'];
  $passwd = $_POST['passwd'];
  $email = $_POST['email'];
  //INFO: czym to moze byc xD
  $info = rand(0, 127);

  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "chuj".$email;
    die;
  }

  try {
    $pdo = new PDO("sqlite:users.sqlite");
    $sql = $pdo->prepare("INSERT INTO users(id, username, passwd, email, info, permission) VALUES (:id, :username, :passwd, :email, :info, :permission)");

    if (!$sql) {
      echo "co jest: ".var_dump($pdo);
    }

    //INFO: By passing the parameters along with the $pdo->execute() method, all values in the array with be passed, as PDO::PARAM_STR to the statement with the $pdo->bindParam() function. https://stackoverflow.com/questions/12392424/pdo-bindparam-vs-execute
    $sql -> execute(array(':id' => NULL, ':username' => $username, ':passwd' => $passwd, ':email' => $email, ':info' => $info, ':permission' => 4));
    
    die;
  } catch (PDOException $e) {
    echo "cos sie zepsulo: ". $e->getMessage();
    die;
  }

}














?>