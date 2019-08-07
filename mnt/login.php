<?php

  $link = mysqli_connect("localhost","shopAdmin","shopadmin","gourmet_Shop_list");
    if(mysqli_connect_error()){
      die("not connecting");
    }   
    mysqli_set_charset($link,"utf8");
		
		$id = $_POST['userid'];
		$shop = $_POST['password'];

		$query = "SELECT * FROM users";
		$result = mysqli_query($link,$query);
		$row = mysqli_fetch_array($result);

		if($row[1] == $id && $row[2] == $shop){
			header('Location: ./shop-list.php');
		}else{
			header('Location: ./index.php');
		}

?>
