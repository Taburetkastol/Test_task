<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Форма авторизации</h1>
    <form>
      <input type="email" id="email" name="email" placeholder="Логин" class="form-control"><br>
      <input type="password" id="password" name="password" placeholder="Пароль" class="form-control"><br>
      <button type="submit" id="login" class="btn btn-outline-success">Войти</button>
    </form>
    <div id="errorMess" class="text-danger"></div>
    <label>Еще не зарегистрированы?</label>
    <a href="index.php">Зарегистрироваться</a>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/login.js"></script>
</body>
</html>
