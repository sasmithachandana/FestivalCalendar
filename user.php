<?php
include_once("config.php");
$result1=mysqli_query($mysqli,"SELECT advertisement.heading,advertisement.detail,advertisement.image FROM advertisement INNER JOIN pubadd ON advertisement.addno=pubadd.selcttedid;");
?>

<html>
<head>
<title></title>
</head>

<body>	
 <table width='100%' border=1 style="border-collapse:collapse;" >

<?php 
            while($res = mysqli_fetch_array($result1)) {  
			echo "<tr>";
			echo "<td>";
			
			echo "<h1>";echo $res['heading'];echo "</h1>";
			
			$res2='<img src="data:image/jpeg;base64,'.base64_encode($res['image']).'"width="200" height="150"/>';
			 echo "<td>".$res2."</td>";echo "<br>";
			
            echo "<td>".$res['detail']."</td>";
			echo "<br>";echo "<br>";echo "<br>";
			}
			
        ?>
		
		</table>
</body>
</html>		

        