<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Форма регистрации</h1>
    <form>
      <input type="text" id="name" name="name" placeholder="Имя" class="form-control"><br>
      <input type="text" id="surname" name="surname" placeholder="Фамилия" class="form-control"><br>
      <input type="email" id="email" name="email" placeholder="Почта" class="form-control"><br>
      <input type="password" id="password" name="password" placeholder="Пароль" class="form-control"><br>
      <input type="password" id="confirm" name="confirm" placeholder="Подтверждение пароля" class="form-control"><br>
      <button type="submit" id="register" class="btn btn-outline-success">Регистрация</button>
    </form>
    <div id="errorMess" class="text-danger"></div>
    <label>Уже зарегистрированы?</label><a href="login.php">Войти</a>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/auth.js"></script>
</body>
</html>
