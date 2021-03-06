<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>CiKaDa</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid nav_container">
          <a class="navbar-brand text-white" href="#">
            <img
              src="./img/cikada-logo.svg"
              width="60"
              height="60"
              class="d-inline-block align-center nav_logo"
              alt=""
              loading="lazy"
            />
            Анекдотиха
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item nav-table">
                <a
                  class="nav-link active text-white"
                  aria-current="page"
                  href="#"
                  >Простенькие</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Поинтересней</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn btn-outline-danger btn_exit" type="submit"><a href="index.php" class="btn_link">Выйти</a></button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 mt-5">
            <div class="alert alert-success mb-2" role="alert">
              <h4 class="alert-heading">Внимание!</h4>
              <p>
                Мы не несем никакой ответственности касательно информации,
                размещенной на данном сайте. Все имена и события в произведении
                вымышленны, любые совпадения с реальными людьми и событиями
                чистая случайность.
              </p>
              <hr />
              <p class="mb-0">Берегите себя!</p>
            </div>
          </div>
        </div>
        
        <?php
            $mysql = new mysqli("localhost", "root", "", "funny_app");
            $mysql->query("SET NAMES 'utf8'");
            $result = $mysql->query("SELECT * FROM `posts`");
            while($row =  $result->fetch_assoc()){
        ?>
          <div class="row mt-5 mb-6">
            <div class="col-xl-10 col-sm-12">
              <h2><?php echo $row['title'];?></h2>
            </div>
            <div class="col-xl-2 col-sm-12">
              <h4><strong>#анекдоты</strong></h4>
            </div>
          <div class="col-xl-8 col-sm-12">
            <p class="lead">
                <?php echo $row['text'];?>
            </p>
          </div>
          <div class="col-xl-4 col-sm-12 contacts_block">
            <div>
              <p>
                Имя: тут будет работать JS<br />
                Город: тут будет работать JS<br />
                Email: тут будет работать JS<br />
              </p>
            </div>
            <div>
              <button class="btn btn-success btn_contact">Связаться</button>
            </div>
          </div>
          <div class="col-xl-8 col-sm-12 info-block">
            <p>
              Автор: <?php echo $row['author_id'];?><br />
              Дата размещения: <?php echo $row['date'];?><br />
            </p>
          </div>
          <div class="col-xl-4 col-sm-12 info-block">
            <button class="btn btn-outline-info btn_contact">Об авторе</button>
          </div>
        </div>
        
        <?php
            };
            $mysql->close();
        ?>
      </div>
    </section>
    <footer></footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
