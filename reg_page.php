<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Форма регистрации</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
<body>
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="reg_logic.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" />
            <br />
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" />
            <br />
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" />
            <br />
            <button class="btn btn-success form-control" type="submit">
              Зарегистрироваться
            </button>
          </form>
          <button class="btn btn-danger form-control mt-2 " type="submit"><a href="index.php" class="btn_link">Выйти</a></button>
        </div>
      </div>
    </div>
</body>
</html>
