<?php
	$link = mysqli_connect("localhost","shopAdmin","shopadmin","gourmet_Shop_list");
    if(mysqli_connect_error()){
      die("not connecting");
    }
    mysqli_set_charset($link,"utf8");
		
		$query = "SELECT * FROM shop_data";
		$result = mysqli_query($link,$query);
		$num_rows = mysqli_num_rows($result);

		for($i = 1; $i <= $num_rows;$i++){
			$query = "SELECT * FROM shop_data WHERE id =".$i;
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_array($result);
				echo "<tr>";
				echo "<td>".$row['shopName']."</td>";
				echo "<td>".$row['shopAdress']."</td>";
				echo "<td>".$row['shopTime']."</td>";
				echo "<td>".$row['status']."</td>";
				echo "<td><button type=\"button\" class=\"btn btn-light\">削除</button></td>";
				echo "</tr>";
			}

?>
