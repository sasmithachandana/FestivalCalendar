<?php
include_once("config.php"); 
$result = mysqli_query($mysqli, "SELECT * FROM advertisement ORDER BY addno ASC"); // using mysqli_query instead
?>
 
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="3style.css" />
<title></title>

</head>

<body>
       <table width='100%' border=1 style="border-collapse:collapse;" >
          <colgroup>
          <col style="background-color:#BDEDFF">
          <col style="background-color:#BDEDFF">
		  <col style="background-color:#98FF98">
          <col style="background-color:#FFFFC2">
		  <col style="background-color:#ECC5C0">
          <col style="background-color:#B6B6B4">
		  <col style="background-color:#FFFFFF">
          <col style="background-color:#95B9C7">
		  <col style="background-color:#95B9C7">
          </colgroup>
		<tr>
            <td width="80"><b>First Name</b></td>
            <td width="80"><b>Last Name</b></td>
            <td width="80"><b>NIC</b></td>
			<td width="80"><b>Telephone</b></td>
			<td width="500"><b>Heading </b></td>
			<td width="800"><b>Details to be published</b></td>
			<td width="200"><b>Image to be published</b></td>
			<td width="50"><b>Publish</b></td>
			<td width="50"><b>Delete</b></td>
        </tr>
        
		<?php 
        
		
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['firstname']."</td>";
            echo "<td>".$res['lastname']."</td>"; 
            echo "<td>".$res['nic']."</td>";
            echo "<td>".$res['telephone']."</td>"; 
            echo "<td>".$res['heading']."</td>";
            echo "<td>".$res['detail']."</td>";    
			$res2='<img src="data:image/jpeg;base64,'.base64_encode($res['image']).'"width="200" height="150"/>';
			echo "<td>".$res2."</td>";    
			
			/*  echo '<img src="data:image/jpeg;base64,'.base64_encode($res['image']).'"width="250" height="250"/>'; */
			
            echo "<td><a href=\"publish.php?id=$res[addno]\"><input type='submit' value='Publish'></a></td><td><a href=\"delete.php?id=$res[addno]\" onClick=\"return confirm('Are you sure you want to delete?')\"><input type='submit' value='Delete'></a></td>";        
         }
        ?>
    </table>
</body>
</html>
