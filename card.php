<?php
	$cid=$_GET["cid"];
	$mysqli=new mysqli("localhost","root","12345678","card");
	$result =$mysqli->query("seletc id,title from card where cid={$cid}");

	while($row=$result->fetch_assoc()){
		echo '<ul>';
		echo '<li> <a href="con.php?id='.$row["id"].'">'.$row["title"].'</a></li>';

		echo '</ul>';
	
	
	}
