<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  $isAuthorized = false;
  $Fail = 0;
  $i = 0;

  $users = array(
    "users" => array(
      "id" => "1",
      "email" => "asd@asd.ru",
      "password" => "123"
    ),
    "user2" => array(
      "id" => "2",
      "email" => "qwe@qwe.ru",
      "password" => "234"
    ),
    "user3" => array(
      "id" => "3",
      "email" => "zxc@zxc.ru",
      "password" => "345"
    )
  );

  foreach ($users as $value) {
      if($value['email'] == $email){
        if($value['password'] != $password){
          $Fail = 3;
        }
        $isAuthorized = true;
      }
  }

  if(strpos($email, '@') < 0){
    $Fail = 1;
  } else if (strpos($email, '@') < 0 and strpos($email, '.') < 0) {
    $Fail = 2;
  }

  $body = [
    "authorized" => $isAuthorized,
    "fail" => $Fail
  ];

  ob_start();

  echo json_encode($body);

  $log = date('Y-m-d H:i:s') . PHP_EOL . ob_get_clean() . PHP_EOL;
  file_put_contents(__DIR__ . '/log.txt', $log, FILE_APPEND);

  echo json_encode($body);

?>
