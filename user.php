<?php
include_once("config.php");
$result1=mysqli_query($mysqli,"SELECT advertisement.heading,advertisement.detail,advertisement.image FROM advertisement INNER JOIN pubadd ON advertisement.addno=pubadd.selcttedid;");
?>

<html>
<head>
<style>


</style>
</head>

<body>	
 <table width='100%' border=1 style="border-collapse:collapse;" >

<?php 

           
            while($res = mysqli_fetch_array($result1)) {  
			
			echo '<div>'; echo '<h1>'; echo$res['heading']; echo '<h1>'; echo'</div>';
			
			$res2='<img src="data:image/jpeg;base64,'.base64_encode($res['image']).'"width="1000" height="500"/>';
			
			echo'<div>';  echo $res2;  echo '</div>';	
			
            echo'<div>';  echo'<p This is a paragraph.>'; echo $res['detail']; echo'</p>'; echo '</div>'; 
			
			echo"_______________________________________________________________________________________________________________________________________________________________________";
			echo"_______________________________________________________________________________________________________________________________________________________________________";
			}

			
        ?>
		</table>
</body>
</html>		

        