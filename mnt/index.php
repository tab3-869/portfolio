<!doctype html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
		<link rel="stylesheet" href="./css/style.css">

      <title>管理画面</title>
  </head>
  <body class="wf-notosansjapanese">
<!-- jumbotron -->

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-5">管理画面</h1>
			</div>
		</div>


<!-- main -->
		<div class="container">
			<div id="login">
				<div class="container col-sm-6 border rounded py-3">
					<form action="./login.php" method="post">
						<div class="form-group text-left">
							<label for="UserID">ID</label>
							<input type="text" class="form-control" id="UserId" name="userid" aria-describedby="idHelp" placeholder="Enter Your ID">
						</div>
						<div class="form-group text-left">
							<label for="InputPassword">Password</label>
							<input type="password" class="form-control" id="Password" name="password" placeholder="Password">
						</div>
							<button type="submit" class="btn btn-primary">ログイン</button>
					</form>
				</div>
			</div>

		</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
