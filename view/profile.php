<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="<?=PATH?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=PATH?>css/style.css">
</head>
<body>

	<div class="modal fade" id="addOrders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Добавить заявку</h5>
					<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
						<select name="cat" class="form-control">
							<option selected disabled>Выберите категорию</option>
							<?php foreach ($cats as $c): ?>
							<option value="<?=$c->c_id?>"><?=$c->c_name?></option>
							<?php endforeach; ?>
						</select><br>
						<textarea name="address" cols="30" rows="2" placeholder="Адрес" required class="form-control"></textarea><br>
						<textarea name="text" cols="30" rows="2" placeholder="Обращение" required class="form-control"></textarea><br>
						<input type="number" name="price" placeholder="Максимальная цена" class="form-control"><br>
						<input type="file" name="photo" required class="form-control"><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="submit" name="addOrders" class="btn btn-primary">Добавить</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#reg">Зарегистрироваться</a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="#"  data-toggle="modal" data-target="#auth">Войти</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	<section id="profile">
		
		<div class="overlay">
			<div class="container h-100">
				<div class="row h-100 d-flex align-items-center">
					<div class="col-lg-12 text-center">
						<h1>Добро пожаловать,</h1>
						<h2>Сафаров Владислав Маратович</h2>
						<p>Администратор</p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="items">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row ">
						<div class="col-lg-10">
							<h2>Мои заявки</h2>
							<div class="line"></div>
						</div>
						<div class="col-lg-2 text-lg-right">
							<a href="#" data-toggle="modal" data-target="#addOrders">Добавить заявку</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($orders as $o): ?>
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-10">
										<h5 class="card-title"><?=$o->cats?></h5>
									</div>
									<div class="col-lg-2 text-lg-right">
										<?php if ($o->status == 'Новая'): ?>
											<a href="/?view=profile&del=<?=$o->id?>" onclick="return confirm('Вы действительно хотите сделать?');">Удалить</a>
										<?php endif; ?>
									</div>
								</div>
								<p><b>Статус:</b> <?=selectStatus($o->status)?></span></p>
								<p><b>Дата создания: </b><?=$o->date?></p>
								<p><b>Предложенная цена: </b><?=$o->price1?> ₽</p>
								<p><b>Адрес: </b><?=$o->address?></p>
								<p><b>Описание: </b><?=$o->text?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">2021 &copy;МастерОК. Все права защищены</div>
			</div>
		</div>
	</footer>



    <script src="<?= PATH ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= PATH ?>js/bootstrap.min.js"></script>
    <script src="<?= PATH ?>js/script.js"></script>
	
</body>
</html>
