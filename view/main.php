<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="shortcut icon" href="<?= PATH ?>img/favicon.png" type="image/x-icon">
    <title>Main</title>
</head>

<body>
<div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Регистрация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="regForm">
                        <div class="form-group">
                            <label for="regFio">ФИО</label>
                            <input type="text" class="form-control" required id="fio" pattern="^[А-Яа-яЁё\s]+$" name="fio">
                        </div>
                        <div class="form-group">
                            <label for="regLogin">Логин</label>
                            <input type="text" class="form-control" required id="login" name="login">
                            <small id="resultLogin" class="d-none form-text text-muted">Данный логин уже занят!</small>
                        </div>
                        <div class="form-group">
                            <label for="regEmail">Email</label>
                            <input type="email" class="form-control" required id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="regPass1">Пароль</label>
                            <input type="password" class="form-control" required id="regPass1" name="regPass1">
                        </div>
                        <div class="form-group">
                            <label for="regPass2">Повторите пароль</label>
                            <input type="password" class="form-control" required id="regPass2" name="regPass2">
                            <small id="passError" class="d-none form-text">Пароли не совпадают!</small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sogl" required>
                            <label class="form-check-label" for="Check">Проверить меня</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="nav-link" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="nav-link" name="reg" id="buttReg" submit>Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="auth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="authForm">
                        <input type="text" class="form-control" name="loginA" placeholder="Логин" required pattern="^[a-zA-Z]+$"><br>
                        <input type="password"  class="form-control" id="pass1" name="pass" placeholder="Пароль" required>
                        <span style="font-size: 12px;color: red; display: none;" id="resAuth">Неверный логин или пароль!</span><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" name="auth" class="btn btn-primary">Авторизоваться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">Aniholka</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="modal" data-target="#reg">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#auth">Вход</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section id="Home">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex align-items-center homeCard">
                    <div class="col-lg-7">
                        <h1>
                            Аниме фигурки для вас!
                        </h1>
                        <p>
                            Делаем аниме фигурки из разных материалов и разной степени солжности
                        </p>
                        <a href="/lool">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="barahlo">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="grouping">
                            <div class="img1" style="background: url(<?= PATH ?>img/prototype.jpg) center center no-repeat; background-size: cover;"></div>
                            <div class="img2" style="background: url(<?= PATH ?>img/HomeBg.png) center center no-repeat; background-size: cover;"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="grouping">
                            <div class="img1" style="background: url(<?= PATH ?>img/prototype.jpg) center center no-repeat; background-size: cover;"></div>
                            <div class="img2" style="background: url(<?= PATH ?>img/HomeBg.png) center center no-repeat; background-size: cover;"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="grouping">
                            <div class="img1" style="background: url(<?= PATH ?>img/prototype.jpg) center center no-repeat; background-size: cover;"></div>
                            <div class="img2" style="background: url(<?= PATH ?>img/HomeBg.png) center center no-repeat; background-size: cover;"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="grouping">
                            <div class="img1" style="background: url(<?= PATH ?>img/prototype.jpg) center center no-repeat; background-size: cover;"></div>
                            <div class="img2" style="background: url(<?= PATH ?>img/HomeBg.png) center center no-repeat; background-size: cover;"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
    </footer>
    <script src="<?= PATH ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= PATH ?>js/bootstrap.min.js"></script>
    <script src="<?= PATH ?>js/script.js"></script>
</body>

</html>