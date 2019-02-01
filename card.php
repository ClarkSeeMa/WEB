<?php
	$cid=$_GET["cid"];
	$mysqli=new mysqli("localhost","root","Ma123456","card");
	$result =$mysqli->query("select id,title from card where cid=$cid");
	$mysqli->close();
	
	echo "<br/>";
	while($row=$result->fetch_array(MYSQLI_ASSOC)){
		echo '<ul>';
		echo '<li> <a href="con.php?id='.$row["id"].'">'.$row["title"].'</a></li>';
		echo '</ul>'; 
	}
