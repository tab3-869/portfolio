<?php

	  $link = mysqli_connect("localhost","shopAdmin","shopadmin","gourmet_Shop_list");
    if(mysqli_connect_error()){
      die("not connecting");
    }   
		mysqli_set_charset($link,"utf8");
	//	$query = "INSERT INTO ''"
	//	print_r($_POST);
	
		if(array_key_exists('shopName',$_POST)){
			if($_POST['shopName'] == ''){
			echo "店舗名は必須です。入力をお願いします。";
		}else{
			$query = "SELECT `id` FROM `shop_data` WHERE shopName = '"
				.mysqli_real_escape_string($link,$_POST['shopName'])."'";
			$result = mysqli_query($link,$query);
			if(mysqli_num_rows($result) > 0){
				echo "その店舗は既に登録済みです。";
			}else{
				$query = "INSERT INTO `shop_data` (`shopName`,`shopAdress`,`shopTime`,`shopProfile`,`status`,`shopGenre`) VALUES('".mysqli_real_escape_string($link,$_POST['shopName'])."','".mysqli_real_escape_string($link,$_POST['shopAdress'])."','".mysqli_real_escape_string($link,$_POST['shopTime'])."','".mysqli_real_escape_string($link,$_POST['shopProfile'])."','".mysqli_real_escape_string($link,$_POST['status'])."','".mysqli_real_escape_string($link,$_POST['shopGenre'])."')";
			
				if(mysqli_query($link,$query)){
					echo "登録が完了しました!";
				}else{
					echo "登録に失敗しました";
				} 
			}
		}
	}
?>

<!doctype html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
		<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">

		<link rel="stylesheet" href="css/style.css">

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
		<div class="container border py-3">
			<form method="post">
				<div>
					<div class="form-group text-left">
							<label for="shopName">店舗名</label>
							<input type="text" class="form-control" id="shopName" name="shopName" placeholder="Shop Name">
					</div>
					<div class="form-group text-left">
							<label for="shopAdress">住所</label>
							<input type="text" class="form-control" id="shopAdress" name="shopAdress" placeholder="東京都hoge区huga町1-2-3">
					</div>
					<div class="form-group text-left">
							<label for="shopTime">営業時間</label>

							<input type="text" class="form-control" id="shopTime" name="shopTime"placeholder="9:00 ~ 19:00">
					</div>
					<div class="form-group text-left">
							<label for="shopProfile">店舗紹介</label>
							<textarea class="form-control" id="shopProfile" name="shopProfile" placeholder="例:国産の食材を産地から直輸入！素材を活かしたメニューが豊富です"></textarea>
					</div>
					
					<div class="form-group text-left">
							<label for="status">ステータス</label>
								<div id="status">
									<div class="form-check form-check-inline">
										<input type="radio" class="form-check-input" id="status1" value="公開" name="status" checked>
										<label class="form-check-label" for="status1">公開</label>
									</div>			
									<div class="form-check form-check-inline">
										<input type="radio" class="form-check-input" id="status2" value="非公開" name="status" >
										<label class="form-check-label" for="status2">非公開</label>
									</div>		
								</div>	
					</div>

					<div class="form-group text-left">
							<label for="shopGenre">ジャンル</label>
								<select type="text" class="form-control" id="shopGenre" name="shopGenre">
								<option value="和食">和食</option>
								<option value="洋食">洋食</option>
								<option value="中華">中華</option>
								<option value="カフェ・喫茶">カフェ・喫茶</option>
								<option value="焼肉">焼肉</option>
								<option value="その他">その他</option>
							</select>
					</div>
					<div class="form-group text-left">
						<input type="submit" class="btn btn-primary" name="" value="保存">
						<a href=./shop-list.php>
						<input type="button" class="btn btn-secondary" name="cancel" value="一覧に戻る">
						</a>
					</div>	
					</div>

				</div>

		</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
